<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\CLI\Commands;

use Emizentech\AiAssistant\Analytics\EventLogger;
use Emizentech\AiAssistant\Infra\Cache;
use Emizentech\AiAssistant\Integration\WebhookSender;

/**
 * WP-CLI command group `wp emi-ai <subcommand>`.
 */
final class Root {

	/**
	 * Run the full health check.
	 *
	 * ## EXAMPLES
	 *     wp emi-ai health
	 */
	public function health( $args, $assoc ): void {
		$req = new \WP_REST_Request( 'GET', '/emi-ai/v1/diagnostics' );
		$res = rest_do_request( $req );
		\WP_CLI::log( wp_json_encode( $res->get_data(), JSON_PRETTY_PRINT ) );
	}

	/**
	 * Purge the plugin cache.
	 */
	public function cache( $args, $assoc ): void {
		$cmd = $args[0] ?? 'purge';
		if ( $cmd === 'purge' ) {
			Cache::flush_group();
			\WP_CLI::success( 'Cache purged' );
		} else {
			\WP_CLI::error( "Unknown subcommand: $cmd" );
		}
	}

	/**
	 * Rebuild the case-study FULLTEXT index from published CPT posts.
	 */
	public function reindex( $args, $assoc ): void {
		$query = new \WP_Query( [
			'post_type'      => 'emi_case_study',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'fields'         => 'ids',
		] );

		$count = 0;
		foreach ( $query->posts as $post_id ) {
			$post = get_post( $post_id );
			\Emizentech\AiAssistant\CPT\CaseStudyCpt::sync_to_index( $post_id, $post );
			$count++;
		}
		\WP_CLI::success( "Reindexed $count case studies" );
	}

	/**
	 * Cleanup old analytics events per retention setting.
	 */
	public function cleanup( $args, $assoc ): void {
		EventLogger::cleanup_old_events();
		\WP_CLI::success( 'Cleanup complete' );
	}

	/**
	 * Send a synthetic test payload to a configured webhook destination.
	 *
	 * <id>
	 * : The webhook destination ID.
	 */
	public function webhook( $args, $assoc ): void {
		$cmd = $args[0] ?? '';
		if ( $cmd !== 'send-test' || empty( $args[1] ) ) {
			\WP_CLI::error( 'Usage: wp emi-ai webhook send-test <destination_id>' );
		}
		$req = new \WP_REST_Request( 'POST', '/emi-ai/v1/webhook/' . $args[1] . '/test' );
		$res = rest_do_request( $req );
		\WP_CLI::log( wp_json_encode( $res->get_data(), JSON_PRETTY_PRINT ) );
	}

	/**
	 * Process the webhook retry queue once (manual trigger).
	 */
	public function retry( $args, $assoc ): void {
		WebhookSender::process_retry_queue();
		\WP_CLI::success( 'Retry queue processed' );
	}
}
