<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin\ListTables;

use Emizentech\AiAssistant\Admin\Menu;

/**
 * Minimal Services management UI — full WP_List_Table CRUD lands in Phase 2.
 */
final class ServicesPage {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		global $wpdb;
		$rows = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}emi_services ORDER BY menu_order ASC, name ASC", ARRAY_A );

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Services catalog', 'emi-ai-assistant' ); ?></h1>
			<p><?php esc_html_e( 'These services power the recommender flow. Phase 2 ships full CRUD; for now seed via wp-cli or the Flow Editor JSON.', 'emi-ai-assistant' ); ?></p>

			<table class="widefat striped">
				<thead><tr>
					<th><?php esc_html_e( 'Slug', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'Name', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'Tier', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'URL', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'Enabled', 'emi-ai-assistant' ); ?></th>
				</tr></thead>
				<tbody>
					<?php foreach ( $rows ?: [] as $r ) : ?>
						<tr>
							<td><code><?php echo esc_html( $r['slug'] ); ?></code></td>
							<td><?php echo esc_html( $r['name'] ); ?></td>
							<td><?php echo esc_html( $r['tier'] ); ?></td>
							<td><a href="<?php echo esc_url( $r['landing_url'] ); ?>" target="_blank"><?php echo esc_html( $r['landing_url'] ); ?></a></td>
							<td><?php echo ! empty( $r['enabled'] ) ? '✅' : '❌'; ?></td>
						</tr>
					<?php endforeach; ?>
					<?php if ( empty( $rows ) ) : ?>
						<tr><td colspan="5"><?php esc_html_e( 'No services yet — seed sample data via Tools or wp emi-ai seed --sample.', 'emi-ai-assistant' ); ?></td></tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<?php
	}
}
