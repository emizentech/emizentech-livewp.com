<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Analytics\EventLogger;
use Emizentech\AiAssistant\Analytics\GA4EventBus;
use Emizentech\AiAssistant\Infra\RateLimiter;
use Emizentech\AiAssistant\Infra\Sanitizer;
use Emizentech\AiAssistant\Integration\EmailSender;
use Emizentech\AiAssistant\Integration\WebhookSender;
use Emizentech\AiAssistant\Privacy\PiiScrubber;

final class LeadController {

	public static function args(): array {
		return [
			'name'        => [ 'type' => 'string', 'required' => true, 'sanitize_callback' => 'sanitize_text_field' ],
			'email'       => [ 'type' => 'string', 'required' => true, 'sanitize_callback' => 'sanitize_email' ],
			'phone'       => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'company'     => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'budget'      => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'timeline'    => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'scope'       => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => [ Sanitizer::class, 'textarea' ] ],
			'urgency'     => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_key', 'default' => 'medium' ],
			'source'      => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_key', 'default' => 'ai_chat' ],
			'mode'        => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_key', 'default' => 'qualifier' ],
			'lang'        => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_key', 'default' => 'en' ],
			'timezone'    => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'page_url'    => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'esc_url_raw' ],
			'utm'         => [ 'type' => 'object', 'required' => false, 'default' => [] ],
			'visitor_id'  => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
		];
	}

	/**
	 * Capture a lead. Per design: do NOT persist to a leads table. Instead fire
	 * configured webhooks, send the admin notification email, log an analytics
	 * event, and fire GA4 generate_lead.
	 */
	public static function capture( \WP_REST_Request $req ): \WP_REST_Response {
		// Rate limit by IP.
		$ip = self::client_ip();
		if ( ! RateLimiter::allow( "lead:{$ip}", 10, 60 ) ) {
			return new \WP_REST_Response(
				[ 'ok' => false, 'code' => 'EMI-1002', 'message' => 'Rate limit exceeded' ],
				429
			);
		}

		// Email validation.
		if ( ! is_email( $req->get_param( 'email' ) ) ) {
			return new \WP_REST_Response(
				[ 'ok' => false, 'code' => 'EMI-1003', 'message' => 'Invalid email' ],
				400
			);
		}

		// Honeypot — REST args don't expose `hp_field`; pull it raw.
		$body = $req->get_json_params() ?: [];
		if ( ! empty( $body['hp_field'] ) ) {
			return new \WP_REST_Response( [ 'ok' => true ], 200 ); // Silent for bots.
		}

		// Assemble lead payload.
		$lead = [
			'name'         => $req->get_param( 'name' ),
			'email'        => $req->get_param( 'email' ),
			'phone'        => (string) $req->get_param( 'phone' ),
			'company'      => (string) $req->get_param( 'company' ),
			'budget'       => (string) $req->get_param( 'budget' ),
			'timeline'     => (string) $req->get_param( 'timeline' ),
			'scope'        => PiiScrubber::scrub( (string) $req->get_param( 'scope' ) ),
			'urgency'      => (string) $req->get_param( 'urgency' ),
			'source'       => (string) $req->get_param( 'source' ),
			'mode'         => (string) $req->get_param( 'mode' ),
			'lang'         => (string) $req->get_param( 'lang' ),
			'timezone'     => (string) $req->get_param( 'timezone' ),
			'page_url'     => (string) $req->get_param( 'page_url' ),
			'utm'          => (array) $req->get_param( 'utm' ),
			'visitor_id'   => (string) $req->get_param( 'visitor_id' ),
			'captured_at'  => gmdate( 'c' ),
			'user_agent'   => isset( $_SERVER['HTTP_USER_AGENT'] ) ? sanitize_text_field( wp_unslash( $_SERVER['HTTP_USER_AGENT'] ) ) : '',
		];

		// Fire webhook(s).
		$webhook_results = WebhookSender::dispatch_event( 'lead_captured', $lead );

		// Send admin email.
		$email_result = EmailSender::send_lead_notification( $lead );

		// Log analytics event (no PII — only aggregate).
		EventLogger::log( 'lead_captured', [
			'mode'       => $lead['mode'],
			'lang'       => $lead['lang'],
			'budget'     => $lead['budget'],
			'source'     => $lead['source'],
			'has_phone'  => ! empty( $lead['phone'] ),
		], $lead['visitor_id'] );

		// GA4 server-side mirror.
		GA4EventBus::send_server_event( 'lead_captured', $lead );

		return new \WP_REST_Response( [
			'ok'        => true,
			'lead_id'   => wp_generate_uuid4(),
			'webhooks'  => $webhook_results,
			'email'     => $email_result,
			'message'   => __( 'Thanks — your details are on their way to our team.', 'emi-ai-assistant' ),
		], 200 );
	}

	private static function client_ip(): string {
		foreach ( [ 'HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR' ] as $h ) {
			if ( ! empty( $_SERVER[ $h ] ) ) {
				$raw = sanitize_text_field( wp_unslash( $_SERVER[ $h ] ) );
				$ip  = trim( explode( ',', $raw )[0] );
				if ( filter_var( $ip, FILTER_VALIDATE_IP ) ) {
					return $ip;
				}
			}
		}
		return '0.0.0.0';
	}
}
