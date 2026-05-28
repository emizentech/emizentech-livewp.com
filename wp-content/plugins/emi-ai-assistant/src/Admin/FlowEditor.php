<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

/**
 * Edit deterministic flow constants — recommender lookup map and estimator
 * BASE / PLATFORM / SCOPE constants. Phase 1 ships a JSON-textarea editor;
 * Phase 2 upgrades to a structured form with live preview.
 */
final class FlowEditor {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		if ( isset( $_POST['emi_ai_flow_save'] ) ) {
			check_admin_referer( 'emi_ai_flow' );
			self::save( $_POST );
			echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'Saved.', 'emi-ai-assistant' ) . '</p></div>';
		}

		$constants = \Emizentech\AiAssistant\Flow\EstimateCalculator::resolve_constants();
		$reco      = get_option( 'emi_ai_recommender_map', [] );

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Flow Editor', 'emi-ai-assistant' ); ?></h1>

			<form method="post">
				<?php wp_nonce_field( 'emi_ai_flow' ); ?>
				<input type="hidden" name="emi_ai_flow_save" value="1" />

				<h2><?php esc_html_e( 'Cost-estimator constants', 'emi-ai-assistant' ); ?></h2>
				<p><?php esc_html_e( 'Final estimate = BASE[type] × PLATFORM_MULT[platforms] × SCOPE_MULT[features]. Range is low … high (×1.55).', 'emi-ai-assistant' ); ?></p>
				<table class="form-table" role="presentation">
					<tr>
						<th><?php esc_html_e( 'BASE prices (USD)', 'emi-ai-assistant' ); ?></th>
						<td><textarea name="emi_ai_estimator[base]" rows="7" class="large-text code"><?php echo esc_textarea( (string) wp_json_encode( $constants['base'], JSON_PRETTY_PRINT ) ); ?></textarea></td>
					</tr>
					<tr>
						<th><?php esc_html_e( 'Platform multipliers', 'emi-ai-assistant' ); ?></th>
						<td><textarea name="emi_ai_estimator[platform]" rows="5" class="large-text code"><?php echo esc_textarea( (string) wp_json_encode( $constants['platform'], JSON_PRETTY_PRINT ) ); ?></textarea></td>
					</tr>
					<tr>
						<th><?php esc_html_e( 'Scope multipliers', 'emi-ai-assistant' ); ?></th>
						<td><textarea name="emi_ai_estimator[scope]" rows="5" class="large-text code"><?php echo esc_textarea( (string) wp_json_encode( $constants['scope'], JSON_PRETTY_PRINT ) ); ?></textarea></td>
					</tr>
				</table>

				<h2 style="margin-top:30px"><?php esc_html_e( 'Recommender map', 'emi-ai-assistant' ); ?></h2>
				<p><?php esc_html_e( 'JSON object: each key is a service-chip value; each value has { service, url, pitch, case_slug }.', 'emi-ai-assistant' ); ?></p>
				<textarea name="emi_ai_recommender_map" rows="14" class="large-text code"><?php echo esc_textarea( ! empty( $reco ) ? (string) wp_json_encode( $reco, JSON_PRETTY_PRINT ) : '' ); ?></textarea>

				<?php submit_button(); ?>
			</form>
		</div>
		<?php
	}

	private static function save( array $post ): void {
		$est = (array) ( $post['emi_ai_estimator'] ?? [] );
		$out = [];
		foreach ( [ 'base', 'platform', 'scope' ] as $k ) {
			$decoded = json_decode( (string) ( $est[ $k ] ?? '{}' ), true );
			if ( is_array( $decoded ) ) {
				$out[ $k ] = $decoded;
			}
		}
		update_option( 'emi_ai_estimator_constants', $out, false );

		$reco_raw = (string) ( $post['emi_ai_recommender_map'] ?? '' );
		if ( trim( $reco_raw ) !== '' ) {
			$decoded = json_decode( $reco_raw, true );
			if ( is_array( $decoded ) ) {
				update_option( 'emi_ai_recommender_map', $decoded, false );
			}
		}
	}
}
