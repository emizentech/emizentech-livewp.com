<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Compatibility;

use Emizentech\AiAssistant\Infra\Cache;

/**
 * Registers Site Health (Tools → Site Health) tests so admins can spot
 * plugin issues from WP's standard health screen.
 */
final class SiteHealth {

	public static function register(): void {
		add_filter( 'site_status_tests', [ self::class, 'add_tests' ] );
	}

	public static function add_tests( array $tests ): array {
		$tests['direct']['emi_ai_tables'] = [
			'label' => __( 'Emi AI tables', 'emi-ai-assistant' ),
			'test'  => [ self::class, 'test_tables' ],
		];
		$tests['direct']['emi_ai_cron'] = [
			'label' => __( 'Emi AI cron events', 'emi-ai-assistant' ),
			'test'  => [ self::class, 'test_cron' ],
		];
		$tests['direct']['emi_ai_uploads'] = [
			'label' => __( 'Emi AI uploads dir writable', 'emi-ai-assistant' ),
			'test'  => [ self::class, 'test_uploads' ],
		];
		$tests['direct']['emi_ai_cache'] = [
			'label' => __( 'Emi AI cache backend', 'emi-ai-assistant' ),
			'test'  => [ self::class, 'test_cache' ],
		];
		return $tests;
	}

	public static function test_tables(): array {
		global $wpdb;
		$expected = [ 'emi_services', 'emi_case_studies', 'emi_events' ];
		$missing  = [];
		foreach ( $expected as $name ) {
			$table = $wpdb->prefix . $name;
			if ( ! $wpdb->get_var( "SHOW TABLES LIKE '{$table}'" ) ) {
				$missing[] = $name;
			}
		}
		if ( ! $missing ) {
			return self::pass(
				__( 'Emi AI database tables are present', 'emi-ai-assistant' ),
				__( 'All 3 plugin tables (services, case_studies, events) exist.', 'emi-ai-assistant' )
			);
		}
		return self::fail(
			__( 'Emi AI tables missing', 'emi-ai-assistant' ),
			sprintf( __( 'Missing: %s. Re-activate the plugin to recreate.', 'emi-ai-assistant' ), implode( ', ', $missing ) )
		);
	}

	public static function test_cron(): array {
		$webhook = wp_next_scheduled( 'emi_ai_webhook_retry_cron' );
		$cleanup = wp_next_scheduled( 'emi_ai_event_cleanup_cron' );
		if ( $webhook && $cleanup ) {
			return self::pass(
				__( 'Emi AI cron events scheduled', 'emi-ai-assistant' ),
				__( 'Webhook-retry and event-cleanup cron events are scheduled.', 'emi-ai-assistant' )
			);
		}
		return self::warn(
			__( 'Emi AI cron events not scheduled', 'emi-ai-assistant' ),
			__( 'One or both plugin cron events missing. Re-activate the plugin to schedule them.', 'emi-ai-assistant' )
		);
	}

	public static function test_uploads(): array {
		$dir = trailingslashit( wp_upload_dir()['basedir'] ) . 'emi-ai';
		if ( ! is_dir( $dir ) ) wp_mkdir_p( $dir );
		if ( wp_is_writable( $dir ) ) {
			return self::pass(
				__( 'Emi AI uploads dir is writable', 'emi-ai-assistant' ),
				sprintf( __( 'Path: %s', 'emi-ai-assistant' ), $dir )
			);
		}
		return self::fail(
			__( 'Emi AI uploads dir not writable', 'emi-ai-assistant' ),
			sprintf( __( 'Cannot write to %s — PDF generation and DSR receipts will fail.', 'emi-ai-assistant' ), $dir )
		);
	}

	public static function test_cache(): array {
		return self::pass(
			__( 'Emi AI cache backend', 'emi-ai-assistant' ),
			sprintf( __( 'Active backend: %s', 'emi-ai-assistant' ), Cache::active_backend() )
		);
	}

	private static function pass( string $label, string $desc ): array {
		return [
			'label'       => $label,
			'status'      => 'good',
			'badge'       => [ 'label' => __( 'Emi AI', 'emi-ai-assistant' ), 'color' => 'green' ],
			'description' => '<p>' . esc_html( $desc ) . '</p>',
			'test'        => 'emi_ai',
		];
	}

	private static function warn( string $label, string $desc ): array {
		return [
			'label'       => $label,
			'status'      => 'recommended',
			'badge'       => [ 'label' => __( 'Emi AI', 'emi-ai-assistant' ), 'color' => 'orange' ],
			'description' => '<p>' . esc_html( $desc ) . '</p>',
			'test'        => 'emi_ai',
		];
	}

	private static function fail( string $label, string $desc ): array {
		return [
			'label'       => $label,
			'status'      => 'critical',
			'badge'       => [ 'label' => __( 'Emi AI', 'emi-ai-assistant' ), 'color' => 'red' ],
			'description' => '<p>' . esc_html( $desc ) . '</p>',
			'test'        => 'emi_ai',
		];
	}
}
