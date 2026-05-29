<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class EventsMappingPage {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		if ( isset( $_POST['emi_ai_events_save'] ) ) {
			check_admin_referer( 'emi_ai_events' );
			self::save( $_POST );
			echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'Events mapping saved.', 'emi-ai-assistant' ) . '</p></div>';
		}

		$mapping = (array) get_option( 'emi_ai_events_mapping', [] );
		$ga4     = (array) get_option( 'emi_ai_ga4', [] );

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'GA4 / GTM Events Mapping', 'emi-ai-assistant' ); ?></h1>
			<p><?php esc_html_e( 'Each logical event below maps to a GA4 event name. Events fire client-side via gtag() and dataLayer.push(), and (if Measurement Protocol credentials are configured) also server-side.', 'emi-ai-assistant' ); ?></p>

			<form method="post">
				<?php wp_nonce_field( 'emi_ai_events' ); ?>
				<input type="hidden" name="emi_ai_events_save" value="1" />

				<h2><?php esc_html_e( 'GA4 Measurement Protocol (optional)', 'emi-ai-assistant' ); ?></h2>
				<table class="form-table" role="presentation">
					<tr>
						<th><label for="ga4_measurement_id"><?php esc_html_e( 'Measurement ID', 'emi-ai-assistant' ); ?></label></th>
						<td><input type="text" id="ga4_measurement_id" name="emi_ai_ga4[measurement_id]" value="<?php echo esc_attr( (string) ( $ga4['measurement_id'] ?? '' ) ); ?>" placeholder="G-XXXXXXXXXX" class="regular-text" /></td>
					</tr>
					<tr>
						<th><label for="ga4_api_secret"><?php esc_html_e( 'API secret', 'emi-ai-assistant' ); ?></label></th>
						<td><input type="password" id="ga4_api_secret" name="emi_ai_ga4[api_secret]" value="<?php echo esc_attr( (string) ( $ga4['api_secret'] ?? '' ) ); ?>" class="regular-text" autocomplete="new-password" /></td>
					</tr>
					<tr>
						<th><?php esc_html_e( 'Push to GTM dataLayer', 'emi-ai-assistant' ); ?></th>
						<td><label><input type="checkbox" name="emi_ai_ga4[gtm_enabled]" value="1" <?php checked( ! empty( $ga4['gtm_enabled'] ) ); ?>> <?php esc_html_e( 'Fire window.dataLayer.push() for every event', 'emi-ai-assistant' ); ?></label></td>
					</tr>
				</table>

				<h2 style="margin-top:30px"><?php esc_html_e( 'Event mapping', 'emi-ai-assistant' ); ?></h2>
				<table class="widefat striped">
					<thead><tr>
						<th><?php esc_html_e( 'Logical event', 'emi-ai-assistant' ); ?></th>
						<th><?php esc_html_e( 'GA4 event name', 'emi-ai-assistant' ); ?></th>
						<th><?php esc_html_e( 'Conversion?', 'emi-ai-assistant' ); ?></th>
						<th><?php esc_html_e( 'Enabled', 'emi-ai-assistant' ); ?></th>
					</tr></thead>
					<tbody>
					<?php foreach ( $mapping as $key => $cfg ) : ?>
						<tr>
							<td><code><?php echo esc_html( $key ); ?></code></td>
							<td><input type="text" name="emi_ai_events_mapping[<?php echo esc_attr( $key ); ?>][ga4_name]" value="<?php echo esc_attr( (string) ( $cfg['ga4_name'] ?? '' ) ); ?>" class="regular-text" /></td>
							<td><label><input type="checkbox" name="emi_ai_events_mapping[<?php echo esc_attr( $key ); ?>][is_conversion]" value="1" <?php checked( ! empty( $cfg['is_conversion'] ) ); ?>></label></td>
							<td><label><input type="checkbox" name="emi_ai_events_mapping[<?php echo esc_attr( $key ); ?>][enabled]" value="1" <?php checked( ! empty( $cfg['enabled'] ) ); ?>></label></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<?php submit_button(); ?>
			</form>
		</div>
		<?php
	}

	private static function save( array $post ): void {
		$ga4 = (array) ( $post['emi_ai_ga4'] ?? [] );
		update_option( 'emi_ai_ga4', [
			'measurement_id' => sanitize_text_field( (string) ( $ga4['measurement_id'] ?? '' ) ),
			'api_secret'     => sanitize_text_field( (string) ( $ga4['api_secret'] ?? '' ) ),
			'gtm_enabled'    => ! empty( $ga4['gtm_enabled'] ),
		], false );

		$raw = (array) ( $post['emi_ai_events_mapping'] ?? [] );
		$out = [];
		foreach ( $raw as $key => $cfg ) {
			$out[ sanitize_key( $key ) ] = [
				'ga4_name'      => sanitize_text_field( (string) ( $cfg['ga4_name'] ?? '' ) ),
				'enabled'       => ! empty( $cfg['enabled'] ),
				'is_conversion' => ! empty( $cfg['is_conversion'] ),
			];
		}
		update_option( 'emi_ai_events_mapping', $out, false );
	}
}
