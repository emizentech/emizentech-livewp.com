<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

use Emizentech\AiAssistant\Analytics\EventLogger;
use Emizentech\AiAssistant\Infra\Cache;
use Emizentech\AiAssistant\Integration\WebhookSender;

final class ToolsPage {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		// Handle actions.
		if ( ! empty( $_POST['emi_ai_tool'] ) ) {
			check_admin_referer( 'emi_ai_tool' );
			$action = sanitize_key( (string) $_POST['emi_ai_tool'] );
			self::run_action( $action );
		}

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Emi AI — Tools', 'emi-ai-assistant' ); ?></h1>

			<?php self::tool_card( 'purge_cache', __( 'Purge cache', 'emi-ai-assistant' ), __( 'Flush the plugin cache group.', 'emi-ai-assistant' ) ); ?>
			<?php self::tool_card( 'cleanup_events', __( 'Cleanup old events', 'emi-ai-assistant' ), __( 'Remove analytics events older than retention period.', 'emi-ai-assistant' ) ); ?>
			<?php self::tool_card( 'reindex_cases', __( 'Reindex case studies', 'emi-ai-assistant' ), __( 'Rebuild FULLTEXT index from published case study posts.', 'emi-ai-assistant' ) ); ?>
			<?php self::tool_card( 'process_retry_queue', __( 'Process webhook retry queue', 'emi-ai-assistant' ), __( 'Manually trigger the retry-queue cron handler.', 'emi-ai-assistant' ) ); ?>
			<?php self::tool_card( 'rerun_wizard', __( 'Re-run setup wizard', 'emi-ai-assistant' ), __( 'Show the setup wizard again on the next admin pageview.', 'emi-ai-assistant' ) ); ?>

		</div>
		<?php
	}

	private static function tool_card( string $action, string $title, string $desc ): void {
		?>
		<div class="emi-ai-card" style="background:#fff;border:1px solid #ccd0d4;padding:14px 18px;margin:14px 0;border-radius:6px;">
			<h3 style="margin-top:0;"><?php echo esc_html( $title ); ?></h3>
			<p><?php echo esc_html( $desc ); ?></p>
			<form method="post" style="display:inline">
				<?php wp_nonce_field( 'emi_ai_tool' ); ?>
				<input type="hidden" name="emi_ai_tool" value="<?php echo esc_attr( $action ); ?>" />
				<button class="button"><?php esc_html_e( 'Run', 'emi-ai-assistant' ); ?></button>
			</form>
		</div>
		<?php
	}

	private static function run_action( string $action ): void {
		try {
			switch ( $action ) {
				case 'purge_cache':
					Cache::flush_group();
					self::notice( __( 'Cache purged.', 'emi-ai-assistant' ) );
					break;
				case 'cleanup_events':
					EventLogger::cleanup_old_events();
					self::notice( __( 'Old events cleaned up.', 'emi-ai-assistant' ) );
					break;
				case 'reindex_cases':
					$q     = new \WP_Query( [ 'post_type' => 'emi_case_study', 'posts_per_page' => -1, 'post_status' => 'publish', 'fields' => 'ids' ] );
					$count = 0;
					foreach ( $q->posts as $id ) {
						\Emizentech\AiAssistant\CPT\CaseStudyCpt::sync_to_index( (int) $id, get_post( $id ) );
						$count++;
					}
					self::notice( sprintf( __( 'Reindexed %d case studies.', 'emi-ai-assistant' ), $count ) );
					break;
				case 'process_retry_queue':
					WebhookSender::process_retry_queue();
					self::notice( __( 'Retry queue processed.', 'emi-ai-assistant' ) );
					break;
				case 'rerun_wizard':
					update_option( 'emi_ai_setup_redirect', 1 );
					self::notice( __( 'Wizard will show on the next admin pageview.', 'emi-ai-assistant' ) );
					break;
			}
		} catch ( \Throwable $e ) {
			self::notice( $e->getMessage(), 'error' );
		}
	}

	private static function notice( string $msg, string $type = 'success' ): void {
		printf(
			'<div class="notice notice-%s is-dismissible"><p>%s</p></div>',
			esc_attr( $type ),
			esc_html( $msg )
		);
	}
}
