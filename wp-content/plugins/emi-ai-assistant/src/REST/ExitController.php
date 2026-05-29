<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Analytics\EventLogger;
use Emizentech\AiAssistant\Analytics\GA4EventBus;
use Emizentech\AiAssistant\Flow\ExitIntentService;
use Emizentech\AiAssistant\Infra\RateLimiter;
use Emizentech\AiAssistant\Integration\EmailSender;
use Emizentech\AiAssistant\Integration\WebhookSender;

final class ExitController {

	/** GET /exit/magnet — pick eligible lead magnet for current visitor context. */
	public static function magnet( \WP_REST_Request $req ): \WP_REST_Response {
		$page_url = (string) $req->get_param( 'page_url' );
		$lang     = (string) ( $req->get_param( 'lang' ) ?: 'en' );

		$magnet = ExitIntentService::pick_magnet( $page_url, $lang );
		if ( empty( $magnet ) ) {
			return new \WP_REST_Response( [], 204 );
		}
		return new \WP_REST_Response( $magnet, 200 );
	}

	/** POST /exit/capture — visitor submitted email → deliver magnet + fire webhook. */
	public static function capture( \WP_REST_Request $req ): \WP_REST_Response {
		$ip = self::client_ip();
		if ( ! RateLimiter::allow( "exit:{$ip}", 5, 60 ) ) {
			return new \WP_REST_Response( [ 'ok' => false, 'message' => 'Rate limit' ], 429 );
		}

		$email = sanitize_email( (string) $req->get_param( 'email' ) );
		if ( ! is_email( $email ) ) {
			return new \WP_REST_Response( [ 'ok' => false, 'message' => 'Invalid email' ], 400 );
		}

		$magnet_id  = (int) $req->get_param( 'magnet_id' );
		$page_url   = (string) $req->get_param( 'page_url' );
		$lang       = (string) ( $req->get_param( 'lang' ) ?: 'en' );
		$visitor_id = (string) $req->get_param( 'visitor_id' );
		$source     = (string) ( $req->get_param( 'source' ) ?: 'exit_intent' );

		// Re-fetch magnet to get the configured asset.
		$magnet = $magnet_id > 0 ? self::find_magnet( $magnet_id ) : ExitIntentService::pick_magnet( $page_url, $lang );
		if ( empty( $magnet ) ) {
			return new \WP_REST_Response( [ 'ok' => false, 'message' => 'Magnet not found' ], 404 );
		}

		// Build a lead-like payload for webhook + email.
		$payload = [
			'name'        => '',
			'email'       => $email,
			'source'      => $source,
			'mode'        => 'exit_intent',
			'lang'        => $lang,
			'page_url'    => $page_url,
			'visitor_id'  => $visitor_id,
			'scope'       => 'Exit-intent lead magnet: ' . ( $magnet['title'] ?? '' ),
			'budget'      => '',
			'magnet_id'   => $magnet['id']    ?? 0,
			'magnet_title'=> $magnet['title'] ?? '',
		];

		// Webhook(s).
		WebhookSender::dispatch_event( 'exit_modal_email_submitted', $payload );

		// Magnet delivery — wp_mail() with the asset URL as the body link
		// (also attach if local file URL).
		self::deliver_magnet( $email, $magnet, $lang );

		// Analytics (no PII).
		EventLogger::log( 'exit_modal_email_submitted', [
			'magnet_id' => $payload['magnet_id'],
			'lang'      => $lang,
			'source'    => $source,
		], $visitor_id );

		GA4EventBus::send_server_event( 'exit_modal_email_submitted', $payload );

		return new \WP_REST_Response( [ 'ok' => true ], 200 );
	}

	private static function find_magnet( int $post_id ): array {
		$post = get_post( $post_id );
		if ( ! $post || $post->post_type !== \Emizentech\AiAssistant\CPT\LeadMagnetCpt::POST_TYPE ) {
			return [];
		}
		return [
			'id'        => $post->ID,
			'title'     => $post->post_title,
			'pitch'     => (string) get_post_meta( $post->ID, '_emi_pitch', true ),
			'cta_text'  => (string) get_post_meta( $post->ID, '_emi_cta_text', true ),
			'asset_url' => (string) get_post_meta( $post->ID, '_emi_asset_url', true ),
		];
	}

	private static function deliver_magnet( string $email, array $magnet, string $lang ): void {
		$title = $magnet['title']     ?? __( 'Your free resource', 'emi-ai-assistant' );
		$pitch = $magnet['pitch']     ?? '';
		$asset = $magnet['asset_url'] ?? '';

		$subject = sprintf( __( '[%s] %s', 'emi-ai-assistant' ), get_bloginfo( 'name' ), $title );

		$html_body = '<p>Thanks for grabbing this resource — we hope it helps.</p>'
			. '<p><strong>' . esc_html( $title ) . '</strong></p>'
			. ( $pitch ? '<p>' . wp_kses_post( $pitch ) . '</p>' : '' )
			. ( $asset ? '<p><a href="' . esc_url( $asset ) . '" style="display:inline-block;padding:10px 20px;background:#F26B1F;color:#fff;text-decoration:none;border-radius:6px;font-weight:600;">Download now</a></p>' : '' )
			. '<p style="margin-top:24px;color:#888;font-size:12px;">If you have any questions, just reply to this email.</p>';

		$headers = [
			'Content-Type: text/html; charset=UTF-8',
			'From: ' . sprintf( '"%s" <%s>', get_bloginfo( 'name' ), get_option( 'admin_email' ) ),
		];

		// Try to attach the asset if it's a local upload URL.
		$attachments = [];
		$upload = wp_upload_dir();
		if ( $asset && strpos( $asset, $upload['baseurl'] ) === 0 ) {
			$local = str_replace( $upload['baseurl'], $upload['basedir'], $asset );
			if ( file_exists( $local ) && filesize( $local ) < 20 * 1024 * 1024 ) {
				$attachments[] = $local;
			}
		}

		wp_mail( $email, $subject, $html_body, $headers, $attachments );
	}

	private static function client_ip(): string {
		foreach ( [ 'HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR' ] as $h ) {
			if ( ! empty( $_SERVER[ $h ] ) ) {
				$raw = sanitize_text_field( wp_unslash( $_SERVER[ $h ] ) );
				$ip  = trim( explode( ',', $raw )[0] );
				if ( filter_var( $ip, FILTER_VALIDATE_IP ) ) return $ip;
			}
		}
		return '0.0.0.0';
	}
}
