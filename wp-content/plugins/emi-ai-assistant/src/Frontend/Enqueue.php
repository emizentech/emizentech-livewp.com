<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Frontend;

use Emizentech\AiAssistant\Privacy\ConsentGate;

final class Enqueue {

	public static function enqueue(): void {
		if ( is_admin() ) return;
		if ( ! self::should_render() ) return;

		$ver = EMI_AI_VERSION;

		// Use built dist bundle if present, otherwise serve the source file
		// directly (works because widget.js is a plain ES module — perfect for dev).
		$dist_js  = EMI_AI_PATH . 'assets/dist/widget.js';
		$dist_css = EMI_AI_PATH . 'assets/dist/widget.css';

		$js_url  = file_exists( $dist_js )  ? EMI_AI_URL . 'assets/dist/widget.js'  : EMI_AI_URL . 'assets/js/widget.js';
		$css_url = file_exists( $dist_css ) ? EMI_AI_URL . 'assets/dist/widget.css' : EMI_AI_URL . 'assets/css/widget.css';

		wp_enqueue_style( 'emi-ai-widget', $css_url, [], $ver );

		wp_register_script( 'emi-ai-widget', $js_url, [], $ver, true );

		wp_localize_script( 'emi-ai-widget', 'EmiAIConfig', self::config() );

		// Mark as module so we can use ES imports.
		add_filter( 'script_loader_tag', static function ( $tag, $handle ) {
			if ( $handle === 'emi-ai-widget' ) {
				return str_replace( '<script ', '<script type="module" ', $tag );
			}
			return $tag;
		}, 10, 2 );

		wp_enqueue_script( 'emi-ai-widget' );
	}

	private static function should_render(): bool {
		$general = (array) get_option( 'emi_ai_settings_general', [] );
		$mode    = $general['plugin_mode'] ?? 'sandbox';

		if ( $mode === 'disabled' ) {
			return false;
		}

		if ( $mode === 'sandbox' ) {
			$preview = isset( $_GET['emi_admin_preview'] ) && current_user_can( 'manage_emi_ai' );
			if ( ! $preview ) return false;
		}

		return VisibilityRules::is_allowed_on_current_request();
	}

	private static function config(): array {
		$general    = (array) get_option( 'emi_ai_settings_general', [] );
		$branding   = (array) get_option( 'emi_ai_branding', [] );
		$languages  = (array) get_option( 'emi_ai_settings_languages', [] );
		$triggers   = (array) get_option( 'emi_ai_triggers', [] );
		$mapping    = (array) get_option( 'emi_ai_events_mapping', [] );
		$ga4        = (array) get_option( 'emi_ai_ga4', [] );
		$advanced   = (array) get_option( 'emi_ai_settings_advanced', [] );

		return [
			'restUrl'    => esc_url_raw( rest_url( 'emi-ai/v1' ) ),
			'nonce'      => wp_create_nonce( 'wp_rest' ),
			'version'    => EMI_AI_VERSION,
			'mode'       => $general['plugin_mode'] ?? 'sandbox',
			'agent'      => [
				'name'   => $general['agent_name'] ?? 'Emi',
				'avatar' => $branding['avatar_id'] ? wp_get_attachment_image_url( (int) $branding['avatar_id'], 'thumbnail' ) : '',
			],
			'branding'   => $branding,
			'languages'  => [
				'enabled' => (array) ( $languages['enabled'] ?? [ 'en' ] ),
				'default' => (string) ( $languages['default'] ?? 'en' ),
				'autoDetect' => (bool) ( $languages['auto_detect'] ?? true ),
			],
			'position'   => $general['widget_position'] ?? 'bottom-right',
			'fabDelayMs' => (int) ( $general['fab_delay_ms'] ?? 1500 ),
			'footerAttribution' => (bool) ( $general['footer_attribution'] ?? true ),
			'triggers'   => (array) ( $triggers['rules'] ?? [] ),
			'events'     => $mapping,
			'ga4'        => [
				'measurementId' => (string) ( $ga4['measurement_id'] ?? '' ),
				'gtmEnabled'    => (bool) ( $ga4['gtm_enabled'] ?? true ),
			],
			'rateLimits' => [
				'perIpPerMin' => (int) ( $advanced['rate_limit_per_ip_per_min'] ?? 30 ),
			],
			'consent'    => ConsentGate::detect(),
			'pageUrl'    => esc_url_raw( ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http' ) . '://' . ( $_SERVER['HTTP_HOST'] ?? '' ) . ( $_SERVER['REQUEST_URI'] ?? '' ) ),
		];
	}
}
