<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Analytics;

/**
 * Lightweight server-side event log — only aggregate analytics, no PII.
 * Stored in wp_emi_events, cleaned up by daily cron per retention policy.
 */
final class EventLogger {

	public static function log( string $event, array $props = [], string $visitor_id = '' ): void {
		if ( empty( get_option( 'emi_ai_events_mapping' )[ $event ]['enabled'] ?? true ) ) {
			return;
		}

		global $wpdb;

		$wpdb->insert(
			$wpdb->prefix . 'emi_events',
			[
				'visitor_id' => $visitor_id ?: wp_generate_uuid4(),
				'event'      => substr( $event, 0, 60 ),
				'props'      => wp_json_encode( self::scrub( $props ) ),
				'page_url'   => isset( $_SERVER['HTTP_REFERER'] )
					? esc_url_raw( wp_unslash( $_SERVER['HTTP_REFERER'] ) )
					: '',
				'ip_hash'    => self::ip_hash(),
				'lang'       => (string) ( $props['lang'] ?? 'en' ),
				'created_at' => current_time( 'mysql', true ),
			],
			[ '%s', '%s', '%s', '%s', '%s', '%s', '%s' ]
		);
	}

	public static function cleanup_old_events(): void {
		global $wpdb;
		$settings = (array) get_option( 'emi_ai_settings_privacy', [] );
		$days     = max( 7, (int) ( $settings['retention_days'] ?? 90 ) );

		$wpdb->query(
			$wpdb->prepare(
				"DELETE FROM {$wpdb->prefix}emi_events WHERE created_at < DATE_SUB(NOW(), INTERVAL %d DAY)",
				$days
			)
		);
	}

	private static function scrub( array $props ): array {
		// Drop any PII keys defensively.
		$strip = [ 'email', 'phone', 'name', 'company', 'scope', 'user_agent', 'ip' ];
		return array_diff_key( $props, array_flip( $strip ) );
	}

	private static function ip_hash(): string {
		$salt = (string) ( get_option( 'emi_ai_settings_privacy' )['ip_hash_salt'] ?? '' );
		if ( ! $salt ) {
			$salt = wp_generate_password( 32, false, false );
			$priv = (array) get_option( 'emi_ai_settings_privacy', [] );
			$priv['ip_hash_salt'] = $salt;
			update_option( 'emi_ai_settings_privacy', $priv, false );
		}
		$ip = '';
		foreach ( [ 'HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR' ] as $h ) {
			if ( ! empty( $_SERVER[ $h ] ) ) {
				$raw = sanitize_text_field( wp_unslash( $_SERVER[ $h ] ) );
				$ip  = trim( explode( ',', $raw )[0] );
				if ( filter_var( $ip, FILTER_VALIDATE_IP ) ) break;
				$ip = '';
			}
		}
		return $ip ? hash( 'sha256', $ip . '|' . $salt ) : '';
	}
}
