<?php
/**
 * Plugin Name:       Emi AI Assistant
 * Plugin URI:        https://emizentech.com/
 * Description:       Knowledge-base-driven chat widget that replaces the Get-a-Quote form with a conversational lead-capture flow. Configurable triggers, branding, integrations and GA4/GTM events. Zero LLM tokens by default.
 * Version:           1.0.0
 * Requires at least: 6.4
 * Requires PHP:      8.1
 * Author:            EmizenTech Engineering
 * Author URI:        https://emizentech.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       emi-ai-assistant
 * Domain Path:       /languages
 *
 * @package Emizentech\AiAssistant
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'EMI_AI_VERSION', '1.0.0' );
define( 'EMI_AI_FILE', __FILE__ );
define( 'EMI_AI_PATH', plugin_dir_path( __FILE__ ) );
define( 'EMI_AI_URL', plugin_dir_url( __FILE__ ) );
define( 'EMI_AI_BASENAME', plugin_basename( __FILE__ ) );
define( 'EMI_AI_MIN_PHP', '8.1' );
define( 'EMI_AI_MIN_WP', '6.4' );

// Composer autoload (vendor/ ships in release ZIP).
if ( file_exists( EMI_AI_PATH . 'vendor/autoload.php' ) ) {
	require_once EMI_AI_PATH . 'vendor/autoload.php';
} else {
	// Local PSR-4 fallback for development before composer install.
	spl_autoload_register(
		static function ( string $class ): void {
			$prefix = 'Emizentech\\AiAssistant\\';
			if ( strpos( $class, $prefix ) !== 0 ) {
				return;
			}
			$relative = substr( $class, strlen( $prefix ) );
			$file     = EMI_AI_PATH . 'src/' . str_replace( '\\', '/', $relative ) . '.php';
			if ( is_readable( $file ) ) {
				require_once $file;
			}
		}
	);
}

// Activation / deactivation hooks.
register_activation_hook( __FILE__, [ \Emizentech\AiAssistant\Activator::class, 'activate' ] );
register_deactivation_hook( __FILE__, [ \Emizentech\AiAssistant\Deactivator::class, 'deactivate' ] );

// Boot the plugin after WordPress core has loaded.
add_action(
	'plugins_loaded',
	static function (): void {
		\Emizentech\AiAssistant\Plugin::boot();
	},
	5
);
