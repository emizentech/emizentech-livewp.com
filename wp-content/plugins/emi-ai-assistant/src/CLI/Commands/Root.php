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

	/**
	 * Seed sample data from data/samples/*.json.
	 *
	 * ## EXAMPLES
	 *     wp emi-ai seed
	 */
	public function seed( $args, $assoc ): void {
		$report = \Emizentech\AiAssistant\Admin\Sampler::seed();
		\WP_CLI::log( wp_json_encode( $report, JSON_PRETTY_PRINT ) );
		\WP_CLI::success( 'Sample data seeded' );
	}

	/**
	 * GDPR DSR — anonymize or delete events for a visitor_id.
	 *
	 * ## OPTIONS
	 *
	 * <action>
	 * : One of: lookup, anonymize, delete.
	 *
	 * --visitor=<uuid>
	 * : The visitor_id to operate on.
	 *
	 * ## EXAMPLES
	 *     wp emi-ai dsr lookup    --visitor=b1f2c3d4-…
	 *     wp emi-ai dsr anonymize --visitor=b1f2c3d4-…
	 *     wp emi-ai dsr delete    --visitor=b1f2c3d4-…
	 */
	public function dsr( $args, $assoc ): void {
		$action  = $args[0] ?? '';
		$visitor = (string) ( $assoc['visitor'] ?? '' );
		if ( $visitor === '' ) {
			\WP_CLI::error( 'Pass --visitor=<uuid>' );
		}

		switch ( $action ) {
			case 'lookup':
				$result = \Emizentech\AiAssistant\Privacy\DsrService::lookup_by_visitor( $visitor );
				\WP_CLI::log( wp_json_encode( $result, JSON_PRETTY_PRINT ) );
				return;
			case 'anonymize':
				$result = \Emizentech\AiAssistant\Privacy\DsrService::process( $visitor, 'anonymize' );
				\WP_CLI::log( wp_json_encode( $result, JSON_PRETTY_PRINT ) );
				\WP_CLI::success( "Anonymized {$result['affected']} events" );
				return;
			case 'delete':
				$result = \Emizentech\AiAssistant\Privacy\DsrService::process( $visitor, 'delete' );
				\WP_CLI::log( wp_json_encode( $result, JSON_PRETTY_PRINT ) );
				\WP_CLI::success( "Deleted {$result['affected']} events" );
				return;
			default:
				\WP_CLI::error( "Unknown subcommand. Use: lookup, anonymize, delete." );
		}
	}
}
