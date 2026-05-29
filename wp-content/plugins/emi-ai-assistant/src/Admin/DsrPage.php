<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

use Emizentech\AiAssistant\Privacy\DsrService;

final class DsrPage {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		$lookup = null;
		$result = null;

		// Lookup.
		if ( ! empty( $_POST['emi_ai_dsr_lookup'] ) ) {
			check_admin_referer( 'emi_ai_dsr' );
			$vid = sanitize_text_field( (string) ( $_POST['visitor_id'] ?? '' ) );
			if ( $vid ) $lookup = DsrService::lookup_by_visitor( $vid );
		}

		// Process.
		if ( ! empty( $_POST['emi_ai_dsr_process'] ) ) {
			check_admin_referer( 'emi_ai_dsr' );
			$vid    = sanitize_text_field( (string) ( $_POST['visitor_id'] ?? '' ) );
			$action = sanitize_key( (string) ( $_POST['dsr_action'] ?? 'delete' ) );
			if ( $vid ) $result = DsrService::process( $vid, $action );
		}

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'GDPR / DPDP — Data Subject Requests', 'emi-ai-assistant' ); ?></h1>

			<div style="background:#FFF7EF;border-left:4px solid #F26B1F;padding:12px 16px;margin:16px 0;border-radius:0 6px 6px 0;">
				<strong><?php esc_html_e( 'Scope', 'emi-ai-assistant' ); ?>:</strong>
				<?php esc_html_e( 'The plugin does NOT store leads, messages, or sessions — those are emitted to your configured webhook and email and discarded. The only personal-data trace we keep is anonymous analytics events in wp_emi_events, keyed by an opaque visitor_id cookie.', 'emi-ai-assistant' ); ?>
			</div>

			<h2><?php esc_html_e( '1. Look up by visitor_id', 'emi-ai-assistant' ); ?></h2>
			<p class="description"><?php esc_html_e( 'The visitor_id is a UUID set in localStorage[emi_visitor_id] on the visitor’s browser. Ask them to share it from their browser console: localStorage.getItem(\'emi_visitor_id\').', 'emi-ai-assistant' ); ?></p>

			<form method="post">
				<?php wp_nonce_field( 'emi_ai_dsr' ); ?>
				<input type="text" name="visitor_id" value="<?php echo esc_attr( $lookup['visitor_id'] ?? ( $_POST['visitor_id'] ?? '' ) ); ?>" placeholder="b1f2c3d4-1234-…" class="regular-text" required />
				<button class="button" name="emi_ai_dsr_lookup" value="1"><?php esc_html_e( 'Look up', 'emi-ai-assistant' ); ?></button>
			</form>

			<?php if ( $lookup !== null ) : ?>
				<h3 style="margin-top:24px"><?php
				/* translators: %d: count of events */
				printf( esc_html__( 'Found %d events for visitor %s', 'emi-ai-assistant' ), (int) $lookup['count'], esc_html( $lookup['visitor_id'] ) );
				?></h3>

				<?php if ( $lookup['count'] > 0 ) : ?>
					<table class="widefat striped">
						<thead><tr><th>ID</th><th><?php esc_html_e( 'Event', 'emi-ai-assistant' ); ?></th><th><?php esc_html_e( 'Props', 'emi-ai-assistant' ); ?></th><th><?php esc_html_e( 'When', 'emi-ai-assistant' ); ?></th></tr></thead>
						<tbody>
						<?php foreach ( $lookup['events'] as $row ) : ?>
							<tr>
								<td><?php echo (int) $row['id']; ?></td>
								<td><code><?php echo esc_html( $row['event'] ); ?></code></td>
								<td><code style="font-size:11px"><?php echo esc_html( $row['props'] ); ?></code></td>
								<td><?php echo esc_html( $row['created_at'] ); ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>

					<h3 style="margin-top:24px"><?php esc_html_e( '2. Process the request', 'emi-ai-assistant' ); ?></h3>
					<form method="post" onsubmit="return confirm(<?php echo wp_json_encode( __( 'Are you sure? This action is irreversible. A signed receipt PDF/JSON will be filed.', 'emi-ai-assistant' ) ); ?>);">
						<?php wp_nonce_field( 'emi_ai_dsr' ); ?>
						<input type="hidden" name="visitor_id" value="<?php echo esc_attr( $lookup['visitor_id'] ); ?>" />
						<p>
							<label><input type="radio" name="dsr_action" value="anonymize" checked> <?php esc_html_e( 'Anonymize — set visitor_id + ip_hash to NULL (preserves analytics counts)', 'emi-ai-assistant' ); ?></label><br/>
							<label><input type="radio" name="dsr_action" value="delete"> <?php esc_html_e( 'Hard delete — remove every row (loses analytics)', 'emi-ai-assistant' ); ?></label>
						</p>
						<button class="button button-primary" name="emi_ai_dsr_process" value="1"><?php esc_html_e( 'Process DSR request', 'emi-ai-assistant' ); ?></button>
					</form>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ( $result !== null ) : ?>
				<div class="notice notice-success" style="margin-top:24px">
					<h3 style="margin-top:0"><?php esc_html_e( 'DSR processed', 'emi-ai-assistant' ); ?></h3>
					<p>
						<?php printf(
							/* translators: 1: action name, 2: row count */
							esc_html__( 'Action: %1$s · Rows affected: %2$d', 'emi-ai-assistant' ),
							esc_html( $result['action'] ),
							(int) $result['affected']
						); ?>
					</p>
					<pre style="background:#f6f7f7;padding:10px;border-radius:4px;font-size:11px;"><?php echo esc_html( (string) wp_json_encode( $result['receipt'], JSON_PRETTY_PRINT ) ); ?></pre>
					<p><strong><?php esc_html_e( 'Receipt filed at:', 'emi-ai-assistant' ); ?></strong> <code><?php echo esc_html( $result['receipt_path'] ); ?></code></p>
				</div>
			<?php endif; ?>
		</div>
		<?php
	}
}
