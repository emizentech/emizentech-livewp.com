<?php
/**
 * Plugin deactivation handler. Clears cron only — never destroys data.
 *
 * @package Emizentech\AiAssistant
 */

declare(strict_types=1);

namespace Emizentech\AiAssistant;

final class Deactivator {

	public static function deactivate(): void {
		// Unschedule all our cron events.
		foreach ( [ 'emi_ai_webhook_retry_cron', 'emi_ai_event_cleanup_cron' ] as $hook ) {
			$timestamp = wp_next_scheduled( $hook );
			while ( $timestamp ) {
				wp_unschedule_event( $timestamp, $hook );
				$timestamp = wp_next_scheduled( $hook );
			}
			wp_clear_scheduled_hook( $hook );
		}

		// Flush rewrite rules so our CPTs' permalink structure is cleared.
		flush_rewrite_rules( false );
	}
}
