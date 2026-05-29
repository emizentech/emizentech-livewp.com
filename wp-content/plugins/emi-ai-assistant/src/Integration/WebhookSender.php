<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration;

use Emizentech\AiAssistant\Infra\Logger;

/**
 * Generic webhook sender. Admin configures destinations as a list of:
 *   {id, name, event, url, method, headers[], body_template, auth, retry_attempts, retry_backoff_s, timeout_s, quiet, enabled}
 *
 * Each lead/event fires every matching destination. Failed deliveries enter a
 * transient-backed retry queue, processed by emi_ai_webhook_retry_cron.
 */
final class WebhookSender {

	private const QUEUE_OPTION = 'emi_ai_webhook_retry_queue';
	private const MAX_QUEUE    = 200;

	/**
	 * Fire every webhook destination configured for the given event.
	 *
	 * @param string $event_name  Logical event key (e.g., 'lead_captured').
	 * @param array  $payload     Data available to body templates.
	 */
	public static function dispatch_event( string $event_name, array $payload ): array {
		$destinations = self::destinations_for_event( $event_name );
		$results      = [];

		foreach ( $destinations as $dest ) {
			$results[] = self::send( $dest, $payload, $event_name );
		}

		return $results;
	}

	/**
	 * Send to a single destination. Queues on failure unless quiet=false (then surfaces immediately).
	 */
	public static function send( array $dest, array $payload, string $event_name = '' ): array {
		if ( empty( $dest['enabled'] ) ) {
			return [ 'id' => $dest['id'] ?? '', 'ok' => false, 'skipped' => 'disabled' ];
		}

		$method  = strtoupper( $dest['method'] ?? 'POST' );
		$url     = BodyTemplateEngine::render( (string) ( $dest['url'] ?? '' ), $payload );
		$headers = self::render_headers( (array) ( $dest['headers'] ?? [] ), $payload );
		$body    = BodyTemplateEngine::render( (string) ( $dest['body_template'] ?? '{}' ), $payload );

		$args = [
			'method'  => $method,
			'headers' => $headers,
			'body'    => $body,
			'timeout' => (int) ( $dest['timeout_s'] ?? 10 ),
			'redirection' => 3,
		];

		$resp = wp_remote_request( $url, $args );

		if ( is_wp_error( $resp ) ) {
			Logger::warning( 'webhook.send.error', [ 'id' => $dest['id'] ?? '', 'msg' => $resp->get_error_message() ] );
			self::enqueue_retry( $dest, $payload, $event_name, 'wp_error: ' . $resp->get_error_message() );
			return [ 'id' => $dest['id'] ?? '', 'ok' => false, 'error' => $resp->get_error_message() ];
		}

		$code = (int) wp_remote_retrieve_response_code( $resp );
		$body = (string) wp_remote_retrieve_body( $resp );

		if ( $code >= 200 && $code < 300 ) {
			return [ 'id' => $dest['id'] ?? '', 'ok' => true, 'status' => $code ];
		}

		Logger::warning( 'webhook.send.non2xx', [ 'id' => $dest['id'] ?? '', 'status' => $code ] );
		self::enqueue_retry( $dest, $payload, $event_name, "http_{$code}" );
		return [ 'id' => $dest['id'] ?? '', 'ok' => false, 'status' => $code, 'body' => substr( $body, 0, 500 ) ];
	}

	/**
	 * Cron handler — retries queued deliveries with exponential backoff.
	 */
	public static function process_retry_queue(): void {
		$queue = (array) get_option( self::QUEUE_OPTION, [] );
		if ( ! $queue ) {
			return;
		}

		$now      = time();
		$still    = [];
		foreach ( $queue as $item ) {
			if ( $item['next_attempt'] > $now ) {
				$still[] = $item;
				continue;
			}
			if ( $item['attempt'] >= $item['max_attempts'] || ( $now - $item['queued_at'] ) > DAY_IN_SECONDS ) {
				Logger::error( 'webhook.retry.gave_up', [ 'id' => $item['dest']['id'] ?? '', 'attempt' => $item['attempt'] ] );
				continue;
			}

			$result = self::send( $item['dest'], $item['payload'], $item['event'] );
			if ( ! $result['ok'] ) {
				$item['attempt']++;
				$item['next_attempt'] = $now + ( $item['backoff_s'] * ( 2 ** $item['attempt'] ) );
				$still[] = $item;
			}
		}

		update_option( self::QUEUE_OPTION, array_slice( $still, 0, self::MAX_QUEUE ), false );
	}

	/**
	 * Admin "Send test" endpoint — finds a destination by ID and fires a synthetic payload.
	 */
	public static function rest_test( \WP_REST_Request $req ): \WP_REST_Response {
		$id           = sanitize_text_field( (string) $req->get_param( 'id' ) );
		$destinations = self::all_destinations();

		$dest = null;
		foreach ( $destinations as $d ) {
			if ( ( $d['id'] ?? '' ) === $id ) {
				$dest = $d;
				break;
			}
		}
		if ( ! $dest ) {
			return new \WP_REST_Response( [ 'ok' => false, 'message' => 'Destination not found' ], 404 );
		}

		$result = self::send( $dest, self::synthetic_payload(), 'test' );
		return new \WP_REST_Response( $result, 200 );
	}

	private static function destinations_for_event( string $event ): array {
		$matches = [];
		foreach ( self::all_destinations() as $dest ) {
			$dest_event = $dest['event'] ?? 'all';
			if ( $dest_event === 'all' || $dest_event === $event ) {
				$matches[] = $dest;
			}
		}
		return $matches;
	}

	private static function all_destinations(): array {
		$opt = (array) get_option( 'emi_ai_integrations', [] );
		return (array) ( $opt['webhooks'] ?? [] );
	}

	private static function enqueue_retry( array $dest, array $payload, string $event, string $reason ): void {
		if ( ! empty( $dest['quiet'] ) === false ) {
			// quiet=false: don't queue, surface immediately. (Default is quiet=true.)
		}
		$queue = (array) get_option( self::QUEUE_OPTION, [] );
		if ( count( $queue ) >= self::MAX_QUEUE ) {
			array_shift( $queue );
		}
		$queue[] = [
			'dest'         => $dest,
			'payload'      => $payload,
			'event'        => $event,
			'reason'       => $reason,
			'attempt'      => 1,
			'max_attempts' => (int) ( $dest['retry_attempts'] ?? 3 ),
			'backoff_s'    => (int) ( $dest['retry_backoff_s'] ?? 2 ),
			'queued_at'    => time(),
			'next_attempt' => time() + ( (int) ( $dest['retry_backoff_s'] ?? 2 ) * 2 ),
		];
		update_option( self::QUEUE_OPTION, $queue, false );
	}

	private static function render_headers( array $tpl_headers, array $payload ): array {
		$out = [ 'Content-Type' => 'application/json', 'User-Agent' => 'EmiAI/' . EMI_AI_VERSION ];
		foreach ( $tpl_headers as $h ) {
			if ( empty( $h['name'] ) ) continue;
			$out[ $h['name'] ] = BodyTemplateEngine::render( (string) ( $h['value'] ?? '' ), $payload );
		}
		return $out;
	}

	private static function synthetic_payload(): array {
		return [
			'name'        => 'Test Visitor',
			'email'       => 'test@example.com',
			'phone'       => '+1-555-0100',
			'company'     => 'Acme Corp',
			'budget'      => '$50k – $150k',
			'timeline'    => '3 months',
			'scope'       => 'Native iOS app for property listings (synthetic test payload)',
			'urgency'     => 'medium',
			'source'      => 'ai_chat',
			'mode'        => 'qualifier',
			'lang'        => 'en',
			'timezone'    => 'Asia/Dubai',
			'page_url'    => home_url( '/' ),
			'utm'         => [ 'source' => 'test', 'campaign' => 'admin_send_test' ],
			'visitor_id'  => wp_generate_uuid4(),
			'captured_at' => gmdate( 'c' ),
			'user_agent'  => 'EmiAI/Admin-Send-Test',
		];
	}
}
