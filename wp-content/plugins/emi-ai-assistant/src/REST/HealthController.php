<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Infra\Cache;

final class HealthController {

	/** Lightweight public health check. */
	public static function check( \WP_REST_Request $req ): \WP_REST_Response {
		return new \WP_REST_Response( [
			'ok'        => true,
			'version'   => EMI_AI_VERSION,
			'timestamp' => time(),
		], 200 );
	}

	/** Deep authenticated diagnostics — for admin Diagnostics page. */
	public static function diagnostics( \WP_REST_Request $req ): \WP_REST_Response {
		global $wpdb;

		$checks = [
			'php_version'      => [
				'ok'      => version_compare( PHP_VERSION, EMI_AI_MIN_PHP, '>=' ),
				'value'   => PHP_VERSION,
				'expects' => '>= ' . EMI_AI_MIN_PHP,
			],
			'wp_version'       => [
				'ok'      => version_compare( get_bloginfo( 'version' ), EMI_AI_MIN_WP, '>=' ),
				'value'   => get_bloginfo( 'version' ),
				'expects' => '>= ' . EMI_AI_MIN_WP,
			],
			'ext_mbstring'     => [ 'ok' => extension_loaded( 'mbstring' ) ],
			'ext_openssl'      => [ 'ok' => extension_loaded( 'openssl' ) ],
			'ext_curl'         => [ 'ok' => extension_loaded( 'curl' ) ],
			'ext_intl'         => [ 'ok' => extension_loaded( 'intl' ) ],
			'ext_json'         => [ 'ok' => extension_loaded( 'json' ) ],
			'mysql_fulltext'   => [
				'ok'    => (bool) $wpdb->get_var( "SHOW INDEX FROM {$wpdb->prefix}emi_case_studies WHERE Index_type = 'FULLTEXT'" ),
				'value' => 'FULLTEXT index on emi_case_studies',
			],
			'cache_backend'    => [
				'ok'    => true,
				'value' => Cache::active_backend(),
			],
			'cron_webhook'     => [
				'ok'    => (bool) wp_next_scheduled( 'emi_ai_webhook_retry_cron' ),
				'value' => wp_next_scheduled( 'emi_ai_webhook_retry_cron' )
					? gmdate( 'c', (int) wp_next_scheduled( 'emi_ai_webhook_retry_cron' ) )
					: 'not scheduled',
			],
			'cron_event_gc'    => [
				'ok'    => (bool) wp_next_scheduled( 'emi_ai_event_cleanup_cron' ),
				'value' => wp_next_scheduled( 'emi_ai_event_cleanup_cron' )
					? gmdate( 'c', (int) wp_next_scheduled( 'emi_ai_event_cleanup_cron' ) )
					: 'not scheduled',
			],
			'tables'           => [
				'ok'    => count( array_filter( [
					$wpdb->get_var( "SHOW TABLES LIKE '{$wpdb->prefix}emi_services'" ),
					$wpdb->get_var( "SHOW TABLES LIKE '{$wpdb->prefix}emi_case_studies'" ),
					$wpdb->get_var( "SHOW TABLES LIKE '{$wpdb->prefix}emi_events'" ),
				] ) ) === 3,
			],
			'uploads_writable' => [
				'ok'    => wp_is_writable( wp_upload_dir()['basedir'] ),
				'value' => wp_upload_dir()['basedir'],
			],
		];

		$all_ok = ! in_array( false, array_column( $checks, 'ok' ), true );

		return new \WP_REST_Response( [
			'ok'      => $all_ok,
			'version' => EMI_AI_VERSION,
			'checks'  => $checks,
		], 200 );
	}
}
