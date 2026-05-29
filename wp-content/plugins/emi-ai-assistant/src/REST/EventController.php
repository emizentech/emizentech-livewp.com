<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Analytics\EventLogger;
use Emizentech\AiAssistant\Infra\RateLimiter;

final class EventController {

	public static function capture( \WP_REST_Request $req ): \WP_REST_Response {
		$ip = self::client_ip();
		if ( ! RateLimiter::allow( "event:{$ip}", 120, 60 ) ) {
			return new \WP_REST_Response( [ 'ok' => false ], 429 );
		}

		$event      = sanitize_key( (string) $req->get_param( 'event' ) );
		$props      = (array) $req->get_param( 'props' );
		$visitor_id = sanitize_text_field( (string) $req->get_param( 'visitor_id' ) );

		if ( empty( $event ) ) {
			return new \WP_REST_Response( [ 'ok' => false, 'message' => 'event required' ], 400 );
		}

		EventLogger::log( $event, $props, $visitor_id );

		return new \WP_REST_Response( [ 'ok' => true ], 200 );
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
