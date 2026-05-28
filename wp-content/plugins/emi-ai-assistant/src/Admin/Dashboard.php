<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class Dashboard {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) {
			wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );
		}

		$stats   = self::stats();
		$general = (array) get_option( 'emi_ai_settings_general', [] );
		$mode    = $general['plugin_mode'] ?? 'sandbox';

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Emi AI Assistant — Dashboard', 'emi-ai-assistant' ); ?></h1>

			<div class="emi-ai-mode-strip mode-<?php echo esc_attr( $mode ); ?>">
				<strong><?php esc_html_e( 'Plugin mode:', 'emi-ai-assistant' ); ?></strong>
				<form method="post" action="" style="display:inline">
					<?php wp_nonce_field( 'emi_ai_mode_change' ); ?>
					<input type="hidden" name="emi_ai_action" value="set_mode" />
					<select name="plugin_mode" onchange="this.form.submit()">
						<option value="disabled" <?php selected( $mode, 'disabled' ); ?>><?php esc_html_e( 'Disabled', 'emi-ai-assistant' ); ?></option>
						<option value="sandbox"  <?php selected( $mode, 'sandbox'  ); ?>><?php esc_html_e( 'Sandbox (admins only)', 'emi-ai-assistant' ); ?></option>
						<option value="live"     <?php selected( $mode, 'live'     ); ?>><?php esc_html_e( 'Live', 'emi-ai-assistant' ); ?></option>
					</select>
				</form>
			</div>

			<div class="emi-ai-kpi-grid">
				<?php foreach ( $stats['kpis'] as $kpi ) : ?>
					<div class="emi-ai-kpi">
						<div class="label"><?php echo esc_html( $kpi['label'] ); ?></div>
						<div class="value"><?php echo esc_html( $kpi['value'] ); ?></div>
						<div class="period"><?php echo esc_html( $kpi['period'] ); ?></div>
					</div>
				<?php endforeach; ?>
			</div>

			<h2><?php esc_html_e( 'Quick actions', 'emi-ai-assistant' ); ?></h2>
			<p>
				<a class="button button-primary" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-wizard' ) ); ?>"><?php esc_html_e( 'Run Setup Wizard', 'emi-ai-assistant' ); ?></a>
				<a class="button" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-integrations' ) ); ?>"><?php esc_html_e( 'Configure integrations', 'emi-ai-assistant' ); ?></a>
				<a class="button" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-triggers' ) ); ?>"><?php esc_html_e( 'Edit triggers + branding', 'emi-ai-assistant' ); ?></a>
				<a class="button" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-diagnostics' ) ); ?>"><?php esc_html_e( 'Run diagnostics', 'emi-ai-assistant' ); ?></a>
			</p>

			<h2><?php esc_html_e( 'Recent events', 'emi-ai-assistant' ); ?></h2>
			<table class="widefat striped">
				<thead><tr>
					<th><?php esc_html_e( 'When', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'Event', 'emi-ai-assistant' ); ?></th>
					<th><?php esc_html_e( 'Props', 'emi-ai-assistant' ); ?></th>
				</tr></thead>
				<tbody>
					<?php foreach ( $stats['recent_events'] as $row ) : ?>
						<tr>
							<td><?php echo esc_html( $row['created_at'] ); ?></td>
							<td><code><?php echo esc_html( $row['event'] ); ?></code></td>
							<td><pre style="margin:0;font-size:11px;max-width:480px;overflow:auto;"><?php echo esc_html( $row['props'] ); ?></pre></td>
						</tr>
					<?php endforeach; ?>
					<?php if ( empty( $stats['recent_events'] ) ) : ?>
						<tr><td colspan="3"><?php esc_html_e( 'No events yet. Open the widget on the front end to start collecting analytics.', 'emi-ai-assistant' ); ?></td></tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<?php

		// Handle mode toggle.
		if ( isset( $_POST['emi_ai_action'] ) && $_POST['emi_ai_action'] === 'set_mode' ) {
			check_admin_referer( 'emi_ai_mode_change' );
			$new            = sanitize_key( (string) ( $_POST['plugin_mode'] ?? 'sandbox' ) );
			$general['plugin_mode'] = in_array( $new, [ 'disabled', 'sandbox', 'live' ], true ) ? $new : 'sandbox';
			update_option( 'emi_ai_settings_general', $general );
			echo '<script>location.href = location.href.replace(/\?.*$/, "?page=emi-ai");</script>';
			exit;
		}
	}

	private static function stats(): array {
		global $wpdb;
		$table = $wpdb->prefix . 'emi_events';
		$since = gmdate( 'Y-m-d H:i:s', time() - 7 * DAY_IN_SECONDS );

		$counts = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT event, COUNT(*) AS n FROM {$table} WHERE created_at >= %s GROUP BY event",
				$since
			),
			OBJECT_K
		);

		$kpi = static fn( string $event, string $label ): array => [
			'label'  => $label,
			'value'  => (int) ( $counts[ $event ]->n ?? 0 ),
			'period' => __( 'last 7 days', 'emi-ai-assistant' ),
		];

		$kpis = [
			$kpi( 'widget_loaded',  __( 'Widget loads', 'emi-ai-assistant' ) ),
			$kpi( 'widget_opened',  __( 'Conversations', 'emi-ai-assistant' ) ),
			$kpi( 'lead_captured',  __( 'Leads captured', 'emi-ai-assistant' ) ),
			$kpi( 'meeting_booked', __( 'Meetings booked', 'emi-ai-assistant' ) ),
		];

		$recent = $wpdb->get_results(
			"SELECT created_at, event, props FROM {$table} ORDER BY id DESC LIMIT 20",
			ARRAY_A
		);

		return [ 'kpis' => $kpis, 'recent_events' => $recent ?: [] ];
	}
}
