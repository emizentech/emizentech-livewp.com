<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Analytics;

use Emizentech\AiAssistant\Infra\Logger;

/**
 * GA4 Measurement Protocol mirror — fires server-side as a backup for the
 * client-side gtag/dataLayer push. Admin maps logical events to GA4 event
 * names via emi_ai_events_mapping option.
 */
final class GA4EventBus {

	public static function send_server_event( string $logical_event, array $props ): void {
		$mapping = (array) get_option( 'emi_ai_events_mapping', [] );
		$cfg     = $mapping[ $logical_event ] ?? null;
		if ( ! $cfg || empty( $cfg['enabled'] ) ) {
			return;
		}

		$ga4 = (array) get_option( 'emi_ai_ga4', [] );
		if ( empty( $ga4['measurement_id'] ) || empty( $ga4['api_secret'] ) ) {
			return;
		}

		$client_id = $props['visitor_id'] ?? wp_generate_uuid4();
		$event_name = $cfg['ga4_name'] ?? "emi_{$logical_event}";

		$payload = [
			'client_id' => $client_id,
			'events'    => [
				[
					'name'   => $event_name,
					'params' => self::sanitize_params( $logical_event, $props ),
				],
			],
		];

		$url = add_query_arg(
			[
				'measurement_id' => $ga4['measurement_id'],
				'api_secret'     => $ga4['api_secret'],
			],
			'https://www.google-analytics.com/mp/collect'
		);

		$resp = wp_remote_post( $url, [
			'timeout'  => 5,
			'headers'  => [ 'Content-Type' => 'application/json' ],
			'body'     => wp_json_encode( $payload ),
			'blocking' => false, // fire-and-forget for speed
		] );

		if ( is_wp_error( $resp ) ) {
			Logger::warning( 'ga4.mp.error', [ 'msg' => $resp->get_error_message() ] );
		}
	}

	/**
	 * Strip PII from event params before sending to GA4.
	 */
	private static function sanitize_params( string $event, array $props ): array {
		$strip = [ 'email', 'phone', 'name', 'company', 'scope', 'user_agent', 'ip', 'ip_hash' ];
		$out   = array_diff_key( $props, array_flip( $strip ) );

		// Add conversion value for lead_captured.
		if ( 'lead_captured' === $event ) {
			$out['value']    = 1;
			$out['currency'] = 'USD';
		}

		// GA4 param value type constraints: max 100 char string or scalar.
		foreach ( $out as $k => $v ) {
			if ( is_array( $v ) ) {
				$out[ $k ] = substr( (string) wp_json_encode( $v ), 0, 100 );
			} elseif ( is_string( $v ) ) {
				$out[ $k ] = substr( $v, 0, 100 );
			}
		}

		return $out;
	}
}
