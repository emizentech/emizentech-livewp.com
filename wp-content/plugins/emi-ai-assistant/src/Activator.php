<?php
/**
 * Plugin activation handler. Creates DB tables, schedules cron, registers caps.
 *
 * @package Emizentech\AiAssistant
 */

declare(strict_types=1);

namespace Emizentech\AiAssistant;

final class Activator {

	public const DB_VERSION_OPTION = 'emi_ai_db_version';
	public const DB_VERSION        = '1.0.0';

	public static function activate(): void {
		self::check_environment();
		self::create_tables();
		self::add_capabilities();
		self::schedule_cron();
		self::seed_default_options();

		update_option( 'emi_ai_setup_redirect', 1, false );
		update_option( self::DB_VERSION_OPTION, self::DB_VERSION, false );
	}

	/**
	 * Hard-check PHP/WP versions and required extensions. Self-deactivate on failure.
	 */
	private static function check_environment(): void {
		$missing = [];

		if ( version_compare( PHP_VERSION, EMI_AI_MIN_PHP, '<' ) ) {
			$missing[] = sprintf( 'PHP %s+ (current: %s)', EMI_AI_MIN_PHP, PHP_VERSION );
		}
		if ( version_compare( get_bloginfo( 'version' ), EMI_AI_MIN_WP, '<' ) ) {
			$missing[] = sprintf( 'WordPress %s+ (current: %s)', EMI_AI_MIN_WP, get_bloginfo( 'version' ) );
		}
		foreach ( [ 'mbstring', 'openssl', 'json', 'curl' ] as $ext ) {
			if ( ! extension_loaded( $ext ) ) {
				$missing[] = "PHP extension: {$ext}";
			}
		}

		if ( ! empty( $missing ) ) {
			deactivate_plugins( EMI_AI_BASENAME );
			wp_die(
				wp_kses_post(
					sprintf(
						/* translators: %s: list of missing requirements */
						__( '<h1>Emi AI Assistant cannot activate</h1><p>The following requirements are not met:</p><ul><li>%s</li></ul><p><a href="%s">Return to plugins page</a></p>', 'emi-ai-assistant' ),
						implode( '</li><li>', $missing ),
						esc_url( admin_url( 'plugins.php' ) )
					)
				),
				'',
				[ 'response' => 200, 'back_link' => true ]
			);
		}
	}

	/**
	 * Create the 3 plugin tables via dbDelta().
	 */
	private static function create_tables(): void {
		global $wpdb;

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';

		$charset_collate = $wpdb->get_charset_collate();
		$prefix          = $wpdb->prefix;

		$services = "CREATE TABLE {$prefix}emi_services (
			id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
			slug VARCHAR(120) NOT NULL,
			name VARCHAR(150) NOT NULL,
			category VARCHAR(80) DEFAULT NULL,
			short_pitch TEXT DEFAULT NULL,
			synonyms TEXT DEFAULT NULL,
			landing_url VARCHAR(500) DEFAULT NULL,
			base_price_min INT UNSIGNED DEFAULT NULL,
			base_price_max INT UNSIGNED DEFAULT NULL,
			tier ENUM('starter','standard','enterprise') DEFAULT 'standard',
			enabled TINYINT(1) NOT NULL DEFAULT 1,
			menu_order INT NOT NULL DEFAULT 0,
			created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			PRIMARY KEY  (id),
			UNIQUE KEY uq_slug (slug),
			KEY idx_enabled (enabled)
		) {$charset_collate};";

		$case_studies = "CREATE TABLE {$prefix}emi_case_studies (
			id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
			post_id BIGINT UNSIGNED DEFAULT NULL,
			slug VARCHAR(160) NOT NULL,
			title VARCHAR(255) NOT NULL,
			summary TEXT DEFAULT NULL,
			industry VARCHAR(80) DEFAULT NULL,
			region VARCHAR(40) DEFAULT NULL,
			tech_stack TEXT DEFAULT NULL,
			tags TEXT DEFAULT NULL,
			metrics TEXT DEFAULT NULL,
			case_url VARCHAR(500) DEFAULT NULL,
			featured TINYINT(1) NOT NULL DEFAULT 0,
			excluded TINYINT(1) NOT NULL DEFAULT 0,
			published_at DATETIME DEFAULT NULL,
			updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			PRIMARY KEY  (id),
			UNIQUE KEY uq_slug (slug),
			KEY idx_post (post_id),
			KEY idx_industry (industry),
			KEY idx_region (region),
			FULLTEXT KEY ft_search (title, summary, tags)
		) {$charset_collate} ENGINE=InnoDB;";

		$events = "CREATE TABLE {$prefix}emi_events (
			id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
			visitor_id CHAR(36) DEFAULT NULL,
			event VARCHAR(60) NOT NULL,
			props TEXT DEFAULT NULL,
			page_url VARCHAR(500) DEFAULT NULL,
			ip_hash CHAR(64) DEFAULT NULL,
			lang CHAR(2) DEFAULT NULL,
			created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY  (id),
			KEY idx_event_created (event, created_at),
			KEY idx_visitor (visitor_id)
		) {$charset_collate};";

		dbDelta( $services );
		dbDelta( $case_studies );
		dbDelta( $events );
	}

	/**
	 * Add the manage_emi_ai capability to the administrator role.
	 */
	private static function add_capabilities(): void {
		$role = get_role( 'administrator' );
		if ( $role ) {
			$role->add_cap( 'manage_emi_ai' );
		}
	}

	/**
	 * Schedule cron jobs.
	 */
	private static function schedule_cron(): void {
		if ( ! wp_next_scheduled( 'emi_ai_webhook_retry_cron' ) ) {
			wp_schedule_event( time() + 60, 'every_five_minutes', 'emi_ai_webhook_retry_cron' );
		}
		if ( ! wp_next_scheduled( 'emi_ai_event_cleanup_cron' ) ) {
			wp_schedule_event( time() + 600, 'daily', 'emi_ai_event_cleanup_cron' );
		}
	}

	/**
	 * Seed default option values if not already present.
	 */
	private static function seed_default_options(): void {
		$defaults = [
			'emi_ai_settings_general'   => [
				'plugin_mode'         => 'sandbox',
				'agent_name'          => 'Emi',
				'widget_position'     => 'bottom-right',
				'fab_delay_ms'        => 1500,
				'footer_attribution'  => true,
			],
			'emi_ai_branding'           => [
				'primary'   => '#F26B1F',
				'secondary' => '#0E2A47',
				'accent'    => '#0FA3A3',
				'text'      => '#1B2733',
				'bg'        => '#FAFCFE',
				'line'      => '#E3E8EE',
				'radius'    => '14px',
				'avatar_id' => 0,
			],
			'emi_ai_settings_languages' => [
				'enabled'       => [ 'en' ],
				'default'       => 'en',
				'auto_detect'   => true,
			],
			'emi_ai_settings_privacy'   => [
				'retention_days'           => 90,
				'anonymize_ip'             => true,
				'pii_redaction'            => true,
				'cookieyes_integration'    => true,
				'dsr_contact_email'        => get_option( 'admin_email' ),
			],
			'emi_ai_settings_visibility' => [
				'show_on'           => 'all',
				'url_include'       => '',
				'url_exclude'       => "/wp-admin/\n/wp-login.php\n/cart\n/checkout",
				'logged_in_behavior'=> 'show',
			],
			'emi_ai_settings_advanced'  => [
				'rate_limit_per_ip_per_min'    => 30,
				'rate_limit_per_session_per_hr'=> 200,
				'remove_data_on_uninstall'     => false,
				'debug_log_level'              => 'error',
			],
			'emi_ai_integrations'       => [
				'webhooks' => [],
				'emails'   => [],
			],
			'emi_ai_triggers'           => [
				'rules' => [
					[
						'type'        => 'page_load_delay',
						'enabled'     => true,
						'mode'        => 'qualifier',
						'priority'    => 10,
						'params'      => [ 'delay_seconds' => 30 ],
					],
				],
			],
			'emi_ai_events_mapping'     => self::default_events_mapping(),
			'emi_ai_ai_settings'        => [
				'enabled'                 => false,
				'anthropic_api_key'       => '',
				'enable_nlu'              => false,
				'enable_dynamic_welcome'  => false,
			],
		];

		foreach ( $defaults as $key => $value ) {
			if ( false === get_option( $key, false ) ) {
				add_option( $key, $value, '', false );
			}
		}
	}

	private static function default_events_mapping(): array {
		return [
			'widget_loaded'              => [ 'ga4_name' => 'emi_widget_loaded', 'enabled' => true ],
			'widget_opened'              => [ 'ga4_name' => 'emi_widget_opened', 'enabled' => true ],
			'mode_switched'              => [ 'ga4_name' => 'emi_mode_switched', 'enabled' => true ],
			'question_answered'          => [ 'ga4_name' => 'emi_question_answered', 'enabled' => true ],
			'chip_clicked'               => [ 'ga4_name' => 'emi_chip_clicked', 'enabled' => true ],
			'flow_completed'             => [ 'ga4_name' => 'emi_flow_completed', 'enabled' => true ],
			'lead_captured'              => [ 'ga4_name' => 'generate_lead', 'enabled' => true, 'is_conversion' => true ],
			'meeting_booked'             => [ 'ga4_name' => 'emi_meeting_booked', 'enabled' => true ],
			'exit_modal_shown'           => [ 'ga4_name' => 'emi_exit_modal_shown', 'enabled' => true ],
			'exit_modal_email_submitted' => [ 'ga4_name' => 'emi_exit_email_submitted', 'enabled' => true ],
			'widget_closed'              => [ 'ga4_name' => 'emi_widget_closed', 'enabled' => true ],
			'error'                      => [ 'ga4_name' => 'emi_error', 'enabled' => true ],
		];
	}
}
