<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

use Emizentech\AiAssistant\Flow\EstimateCalculator;

/**
 * Structured form editor for the deterministic flow constants:
 *  - Cost-estimator BASE / PLATFORM_MULT / SCOPE_MULT
 *  - Service-recommender map (service → URL + pitch + featured case slug)
 *
 * Replaces the JSON-textarea-only Phase 1 implementation.
 */
final class FlowEditor {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		if ( isset( $_POST['emi_ai_flow_save'] ) ) {
			check_admin_referer( 'emi_ai_flow' );
			self::save( $_POST );
			echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'Flow constants saved.', 'emi-ai-assistant' ) . '</p></div>';
		}

		$constants  = EstimateCalculator::resolve_constants();
		$reco       = (array) get_option( 'emi_ai_recommender_map', [] );

		// Demo computation: what would the formula produce for food_delivery + ios+android + mvp?
		$demo = EstimateCalculator::run( [
			'project_type'  => 'food_delivery',
			'platforms'     => 'ios_android',
			'feature_count' => 'mvp',
		] );

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Flow Editor', 'emi-ai-assistant' ); ?></h1>

			<form method="post">
				<?php wp_nonce_field( 'emi_ai_flow' ); ?>
				<input type="hidden" name="emi_ai_flow_save" value="1" />

				<h2><?php esc_html_e( 'Cost-estimator constants', 'emi-ai-assistant' ); ?></h2>
				<p class="description">
					<?php esc_html_e( 'Final price = BASE × PLATFORM × SCOPE. High end = low × 1.55. Weeks = 8 × PLATFORM × SCOPE.', 'emi-ai-assistant' ); ?>
				</p>

				<h3><?php esc_html_e( 'BASE prices (USD)', 'emi-ai-assistant' ); ?></h3>
				<table class="widefat striped" style="max-width:520px">
					<thead><tr><th><?php esc_html_e( 'Project type', 'emi-ai-assistant' ); ?></th><th><?php esc_html_e( 'USD', 'emi-ai-assistant' ); ?></th></tr></thead>
					<tbody>
					<?php foreach ( [ 'food_delivery' => 'Food delivery app', 'ecommerce' => 'E-commerce store', 'saas' => 'SaaS dashboard', 'mobile_mvp' => 'Mobile app MVP', 'custom_crm' => 'Custom CRM', 'default' => 'Default / other' ] as $key => $label ) : ?>
						<tr>
							<td><code><?php echo esc_html( $key ); ?></code> — <?php echo esc_html( $label ); ?></td>
							<td><input type="number" name="emi_ai_estimator[base][<?php echo esc_attr( $key ); ?>]" value="<?php echo esc_attr( (string) ( $constants['base'][ $key ] ?? 30000 ) ); ?>" min="0" step="1000" style="width:140px;" /></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<h3 style="margin-top:24px"><?php esc_html_e( 'Platform multipliers', 'emi-ai-assistant' ); ?></h3>
				<table class="widefat striped" style="max-width:520px">
					<thead><tr><th><?php esc_html_e( 'Platforms', 'emi-ai-assistant' ); ?></th><th><?php esc_html_e( 'Multiplier', 'emi-ai-assistant' ); ?></th></tr></thead>
					<tbody>
					<?php foreach ( [ 'ios_android' => 'iOS + Android', 'web_only' => 'Web only', 'ios_android_web' => 'iOS + Android + Web' ] as $key => $label ) : ?>
						<tr>
							<td><code><?php echo esc_html( $key ); ?></code> — <?php echo esc_html( $label ); ?></td>
							<td><input type="number" name="emi_ai_estimator[platform][<?php echo esc_attr( $key ); ?>]" value="<?php echo esc_attr( (string) ( $constants['platform'][ $key ] ?? 1.0 ) ); ?>" min="0.1" max="5" step="0.05" style="width:140px;" /></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<h3 style="margin-top:24px"><?php esc_html_e( 'Scope multipliers', 'emi-ai-assistant' ); ?></h3>
				<table class="widefat striped" style="max-width:520px">
					<thead><tr><th><?php esc_html_e( 'Scope', 'emi-ai-assistant' ); ?></th><th><?php esc_html_e( 'Multiplier', 'emi-ai-assistant' ); ?></th></tr></thead>
					<tbody>
					<?php foreach ( [ 'mvp' => 'MVP (5–8 features)', 'standard' => 'Standard (10–15)', 'full' => 'Full (20+)' ] as $key => $label ) : ?>
						<tr>
							<td><code><?php echo esc_html( $key ); ?></code> — <?php echo esc_html( $label ); ?></td>
							<td><input type="number" name="emi_ai_estimator[scope][<?php echo esc_attr( $key ); ?>]" value="<?php echo esc_attr( (string) ( $constants['scope'][ $key ] ?? 1.0 ) ); ?>" min="0.5" max="5" step="0.1" style="width:140px;" /></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<div style="background:#fff;border:1px solid #ccd0d4;border-left:4px solid #0FA3A3;padding:14px 18px;margin:18px 0;max-width:520px;border-radius:6px;">
					<strong><?php esc_html_e( 'Live preview', 'emi-ai-assistant' ); ?></strong> —
					<?php
					printf(
						/* translators: 1: low estimate, 2: high estimate, 3: weeks, 4: team size */
						esc_html__( 'food_delivery + iOS+Android + MVP → $%1$s – $%2$s · %3$d weeks · %4$d engineers', 'emi-ai-assistant' ),
						number_format( (int) $demo['low']  ),
						number_format( (int) $demo['high'] ),
						(int) $demo['weeks'],
						(int) $demo['team']
					);
					?>
				</div>

				<h2 style="margin-top:30px"><?php esc_html_e( 'Recommender map', 'emi-ai-assistant' ); ?></h2>
				<p class="description"><?php esc_html_e( 'Each row maps a service-chip value to a landing URL, pitch line, and featured case-study slug.', 'emi-ai-assistant' ); ?></p>

				<table class="widefat striped">
					<thead><tr>
						<th style="width:140px"><?php esc_html_e( 'Service key', 'emi-ai-assistant' ); ?></th>
						<th><?php esc_html_e( 'Display name', 'emi-ai-assistant' ); ?></th>
						<th><?php esc_html_e( 'Landing URL', 'emi-ai-assistant' ); ?></th>
						<th><?php esc_html_e( 'One-line pitch', 'emi-ai-assistant' ); ?></th>
						<th style="width:160px"><?php esc_html_e( 'Featured case slug', 'emi-ai-assistant' ); ?></th>
					</tr></thead>
					<tbody>
					<?php
					$default_keys = [ 'mobile_app', 'e-commerce', 'custom_software', 'ai_ml', 'salesforce' ];
					foreach ( $default_keys as $key ) :
						$cur = $reco[ $key ] ?? [];
					?>
						<tr>
							<td><code><?php echo esc_html( $key ); ?></code></td>
							<td><input type="text" name="emi_ai_reco[<?php echo esc_attr( $key ); ?>][service]" value="<?php echo esc_attr( (string) ( $cur['service'] ?? '' ) ); ?>" class="large-text" /></td>
							<td><input type="url"  name="emi_ai_reco[<?php echo esc_attr( $key ); ?>][url]"     value="<?php echo esc_attr( (string) ( $cur['url']     ?? '' ) ); ?>" class="large-text" /></td>
							<td><input type="text" name="emi_ai_reco[<?php echo esc_attr( $key ); ?>][pitch]"   value="<?php echo esc_attr( (string) ( $cur['pitch']   ?? '' ) ); ?>" class="large-text" /></td>
							<td><input type="text" name="emi_ai_reco[<?php echo esc_attr( $key ); ?>][case_slug]" value="<?php echo esc_attr( (string) ( $cur['case_slug'] ?? '' ) ); ?>" class="regular-text" /></td>
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
		// Estimator constants.
		$est_in  = (array) ( $post['emi_ai_estimator'] ?? [] );
		$out = [];
		if ( ! empty( $est_in['base'] ) && is_array( $est_in['base'] ) ) {
			$out['base'] = array_map( static fn( $v ) => max( 0, (int) $v ), $est_in['base'] );
		}
		if ( ! empty( $est_in['platform'] ) && is_array( $est_in['platform'] ) ) {
			$out['platform'] = array_map( static fn( $v ) => max( 0.1, min( 5.0, (float) $v ) ), $est_in['platform'] );
		}
		if ( ! empty( $est_in['scope'] ) && is_array( $est_in['scope'] ) ) {
			$out['scope'] = array_map( static fn( $v ) => max( 0.5, min( 5.0, (float) $v ) ), $est_in['scope'] );
		}
		update_option( 'emi_ai_estimator_constants', $out, false );

		// Recommender map.
		$reco_in = (array) ( $post['emi_ai_reco'] ?? [] );
		$reco_out = [];
		foreach ( $reco_in as $key => $row ) {
			$reco_out[ sanitize_key( $key ) ] = [
				'service'   => sanitize_text_field( (string) ( $row['service'] ?? '' ) ),
				'url'       => esc_url_raw( (string) ( $row['url'] ?? '' ) ),
				'pitch'     => sanitize_text_field( (string) ( $row['pitch'] ?? '' ) ),
				'case_slug' => sanitize_title( (string) ( $row['case_slug'] ?? '' ) ),
			];
		}
		update_option( 'emi_ai_recommender_map', $reco_out, false );
	}
}
