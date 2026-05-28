<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class DiagnosticsPage {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		$req     = new \WP_REST_Request( 'GET', '/emi-ai/v1/diagnostics' );
		$checks  = (array) ( rest_do_request( $req )->get_data()['checks'] ?? [] );

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Diagnostics & Health', 'emi-ai-assistant' ); ?></h1>

			<table class="widefat striped">
				<thead><tr>
					<th><?php esc_html_e( 'Check', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'Status', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'Value', 'emi-ai-assistant' ); ?></th>
				</tr></thead>
				<tbody>
					<?php foreach ( $checks as $name => $info ) : ?>
						<tr>
							<td><code><?php echo esc_html( (string) $name ); ?></code></td>
							<td><?php echo ! empty( $info['ok'] ) ? '✅' : '❌'; ?></td>
							<td><?php echo esc_html( (string) ( $info['value'] ?? '' ) ); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<p style="margin-top:20px"><a class="button button-primary" href="<?php echo esc_url( add_query_arg( 'refresh', time() ) ); ?>"><?php esc_html_e( 'Re-run checks', 'emi-ai-assistant' ); ?></a></p>
		</div>
		<?php
	}
}
