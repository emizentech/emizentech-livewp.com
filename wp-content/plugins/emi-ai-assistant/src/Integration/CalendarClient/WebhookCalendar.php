<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration\CalendarClient;

use Emizentech\AiAssistant\Infra\Logger;

/**
 * Generic-webhook calendar client. Admin pastes a single endpoint URL that
 * accepts the booking payload as JSON and returns { ok: true, booking_id?: string }.
 *
 * Useful when:
 *   - You don't have Calendly but DO have an internal /availability + /book
 *     endpoint (Zapier, n8n, Make, custom CRM, etc.).
 *   - You want to route booking through a workflow tool that does its own
 *     calendar logic.
 *
 * Slot generation falls back to the same 4-slot logic as NullClient so the
 * widget always has something to show; the booking POST is delegated.
 */
final class WebhookCalendar implements CalendarClientInterface {

	public function __construct( private string $webhook_url, private array $headers = [] ) {}

	public function available_slots( string $timezone ): array {
		try {
			$tz  = new \DateTimeZone( $timezone ?: 'UTC' );
			$now = new \DateTimeImmutable( 'now', $tz );
		} catch ( \Throwable $e ) {
			$now = new \DateTimeImmutable();
			$tz  = new \DateTimeZone( 'UTC' );
		}

		$slots      = [];
		$candidates = [
			[ 'days' => 1, 'hour' => 11, 'min' => 0  ],
			[ 'days' => 1, 'hour' => 15, 'min' => 0  ],
			[ 'days' => 2, 'hour' => 10, 'min' => 0  ],
			[ 'days' => 2, 'hour' => 16, 'min' => 30 ],
		];
		foreach ( $candidates as $c ) {
			$dt = $now->modify( "+{$c['days']} day" )->setTime( $c['hour'], $c['min'] );
			$slots[] = [
				'label_day'  => $dt->format( 'D' ),
				'label_time' => $dt->format( 'g:i A T' ),
				'iso'        => $dt->format( 'c' ),
			];
		}
		return $slots;
	}

	public function book( string $email, string $slot_iso, string $topic = '' ): array {
		if ( ! $this->webhook_url ) {
			return [ 'ok' => false, 'error' => 'Webhook URL not configured' ];
		}

		$headers = array_merge(
			[ 'Content-Type' => 'application/json', 'User-Agent' => 'EmiAI/' . EMI_AI_VERSION ],
			$this->headers
		);

		$resp = wp_remote_post( $this->webhook_url, [
			'timeout' => 15,
			'headers' => $headers,
			'body'    => wp_json_encode( [
				'email'    => $email,
				'slot_iso' => $slot_iso,
				'topic'    => $topic,
				'site'     => [ 'url' => home_url(), 'name' => get_bloginfo( 'name' ) ],
			] ),
		] );

		if ( is_wp_error( $resp ) ) {
			Logger::warning( 'calendar.webhook.error', [ 'msg' => $resp->get_error_message() ] );
			return [ 'ok' => false, 'error' => $resp->get_error_message() ];
		}

		$code = (int) wp_remote_retrieve_response_code( $resp );
		$body = json_decode( (string) wp_remote_retrieve_body( $resp ), true ) ?: [];

		if ( $code >= 200 && $code < 300 && ! empty( $body['ok'] ) ) {
			return [
				'ok'          => true,
				'booking_id'  => (string) ( $body['booking_id']  ?? wp_generate_uuid4() ),
				'meeting_url' => (string) ( $body['meeting_url'] ?? '' ),
				'note'        => (string) ( $body['note']        ?? '' ),
			];
		}

		return [
			'ok'    => false,
			'error' => sprintf( 'Webhook returned HTTP %d', $code ),
			'body'  => substr( (string) wp_remote_retrieve_body( $resp ), 0, 500 ),
		];
	}
}
