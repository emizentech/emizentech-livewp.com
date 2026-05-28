<?php
/**
 * Main plugin orchestrator. Boots all subsystems.
 *
 * @package Emizentech\AiAssistant
 */

declare(strict_types=1);

namespace Emizentech\AiAssistant;

use Emizentech\AiAssistant\Admin\Menu as AdminMenu;
use Emizentech\AiAssistant\Admin\Assets as AdminAssets;
use Emizentech\AiAssistant\CPT\CaseStudyCpt;
use Emizentech\AiAssistant\CPT\FaqCpt;
use Emizentech\AiAssistant\CPT\LeadMagnetCpt;
use Emizentech\AiAssistant\Frontend\Enqueue as FrontendEnqueue;
use Emizentech\AiAssistant\Integration\WebhookSender;
use Emizentech\AiAssistant\REST\Router as RestRouter;

final class Plugin {

	/**
	 * Boot the plugin. Wires every WordPress hook.
	 */
	public static function boot(): void {
		// Custom cron schedules.
		add_filter( 'cron_schedules', [ self::class, 'register_cron_schedules' ] );

		// I18n.
		add_action(
			'init',
			static function (): void {
				load_plugin_textdomain( 'emi-ai-assistant', false, dirname( EMI_AI_BASENAME ) . '/languages' );
			}
		);

		// Custom Post Types.
		add_action( 'init', [ CaseStudyCpt::class, 'register' ] );
		add_action( 'init', [ LeadMagnetCpt::class, 'register' ] );
		add_action( 'init', [ FaqCpt::class, 'register' ] );

		// REST endpoints.
		add_action( 'rest_api_init', [ RestRouter::class, 'register' ] );

		// Frontend widget.
		add_action( 'wp_enqueue_scripts', [ FrontendEnqueue::class, 'enqueue' ] );

		// Admin.
		if ( is_admin() ) {
			add_action( 'admin_menu', [ AdminMenu::class, 'register' ] );
			add_action( 'admin_init', [ Admin\SettingsPage::class, 'register_settings' ] );
			add_action( 'admin_enqueue_scripts', [ AdminAssets::class, 'enqueue' ] );

			// First-run setup wizard redirect.
			add_action( 'admin_init', [ Admin\Wizard::class, 'maybe_redirect' ] );
		}

		// Cron handlers.
		add_action( 'emi_ai_webhook_retry_cron', [ WebhookSender::class, 'process_retry_queue' ] );
		add_action( 'emi_ai_event_cleanup_cron', [ Analytics\EventLogger::class, 'cleanup_old_events' ] );

		// Block our CPTs from sitemaps.
		add_filter( 'wp_sitemaps_post_types', [ self::class, 'remove_cpts_from_sitemap' ] );
		add_filter( 'rank_math/sitemap/exclude_post_type', [ self::class, 'rank_math_exclude_cpt' ], 10, 2 );

		// Block our CPTs from search.
		add_filter( 'pre_get_posts', [ self::class, 'exclude_cpts_from_search' ] );

		// WP-CLI commands.
		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			\WP_CLI::add_command( 'emi-ai', CLI\Commands\Root::class );
		}
	}

	/**
	 * Register custom cron schedules used by the plugin.
	 */
	public static function register_cron_schedules( array $schedules ): array {
		if ( ! isset( $schedules['every_five_minutes'] ) ) {
			$schedules['every_five_minutes'] = [
				'interval' => 5 * MINUTE_IN_SECONDS,
				'display'  => __( 'Every 5 minutes', 'emi-ai-assistant' ),
			];
		}
		return $schedules;
	}

	/**
	 * Strip our admin-only CPTs from the WP core sitemap.
	 *
	 * @param array $post_types Indexed array of post-type objects keyed by name.
	 */
	public static function remove_cpts_from_sitemap( array $post_types ): array {
		foreach ( [ 'emi_case_study', 'emi_lead_magnet', 'emi_faq' ] as $cpt ) {
			unset( $post_types[ $cpt ] );
		}
		return $post_types;
	}

	/**
	 * Strip our CPTs from Rank Math sitemap.
	 */
	public static function rank_math_exclude_cpt( bool $exclude, string $post_type ): bool {
		if ( in_array( $post_type, [ 'emi_case_study', 'emi_lead_magnet', 'emi_faq' ], true ) ) {
			return true;
		}
		return $exclude;
	}

	/**
	 * Don't include our CPTs in WP search results.
	 */
	public static function exclude_cpts_from_search( \WP_Query $query ): void {
		if ( ! is_admin() && $query->is_search() && $query->is_main_query() ) {
			$post_types = (array) ( $query->get( 'post_type' ) ?: 'any' );
			$exclude    = [ 'emi_case_study', 'emi_lead_magnet', 'emi_faq' ];
			if ( 'any' === $post_types[0] ) {
				$post_types = array_diff( get_post_types( [ 'public' => true ] ), $exclude );
				$query->set( 'post_type', array_values( $post_types ) );
			} else {
				$query->set( 'post_type', array_values( array_diff( $post_types, $exclude ) ) );
			}
		}
	}
}
