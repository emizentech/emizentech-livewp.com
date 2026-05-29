<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Privacy;

/**
 * Detects CookieYes (and other common consent banners) and produces a gating
 * signal for the widget — JS won't mount until consent is granted.
 */
final class ConsentGate {

	public static function detect(): array {
		$settings = (array) get_option( 'emi_ai_settings_privacy', [] );
		$enabled  = ! empty( $settings['cookieyes_integration'] );

		$detected = [
			'cookieyes' => is_plugin_active( 'cookie-law-info/cookie-law-info.php' )
				|| function_exists( 'wp_get_cookie_law_info' ),
		];

		return [
			'mode'             => $enabled && $detected['cookieyes'] ? 'cookieyes' : 'implicit',
			'detected'         => $detected,
			'cookie_name'      => 'cookielawinfo-checkbox-functional',
			'expected_value'   => 'yes',
		];
	}
}
