<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class TriggerRulesPage {

	private const RULE_TYPES = [
		'page_load_delay'   => 'After N seconds on page',
		'exit_intent'       => 'When visitor tries to leave (exit-intent)',
		'button_click'      => 'When a CSS selector is clicked',
		'url_match'         => 'When the URL contains a pattern',
		'scroll_percent'    => 'When visitor scrolls past N% of page',
		'time_on_page'      => 'After N seconds of cumulative focused time',
		'returning_visitor' => 'For returning visitors (last visit > N days)',
		'utm_match'         => 'When utm_source / utm_campaign matches',
		'idle'              => 'After N seconds of inactivity',
	];

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		if ( isset( $_POST['emi_ai_triggers_save'] ) ) {
			check_admin_referer( 'emi_ai_triggers' );
			self::save( $_POST );
			echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'Saved.', 'emi-ai-assistant' ) . '</p></div>';
		}

		$triggers = (array) get_option( 'emi_ai_triggers', [] );
		$rules    = (array) ( $triggers['rules'] ?? [] );
		$branding = (array) get_option( 'emi_ai_branding', [] );

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Triggers & Branding', 'emi-ai-assistant' ); ?></h1>

			<form method="post">
				<?php wp_nonce_field( 'emi_ai_triggers' ); ?>
				<input type="hidden" name="emi_ai_triggers_save" value="1" />

				<h2><?php esc_html_e( 'When should the widget open?', 'emi-ai-assistant' ); ?></h2>
				<p class="description"><?php esc_html_e( 'Rules combine with OR. Higher priority wins if multiple fire at the same time.', 'emi-ai-assistant' ); ?></p>
				<?php foreach ( $rules as $i => $r ) : self::render_rule( $i, $r ); endforeach; ?>
				<?php self::render_rule( count( $rules ), self::empty_rule() ); ?>
				<?php self::render_rule( count( $rules ) + 1, self::empty_rule() ); ?>

				<h2 style="margin-top:40px"><?php esc_html_e( 'Branding', 'emi-ai-assistant' ); ?></h2>
				<table class="form-table" role="presentation">
					<?php foreach ( [
						'primary'   => __( 'Primary (FAB / CTAs)', 'emi-ai-assistant' ),
						'secondary' => __( 'Secondary (chat header)', 'emi-ai-assistant' ),
						'accent'    => __( 'Accent (links, chips)', 'emi-ai-assistant' ),
						'bg'        => __( 'Chat background', 'emi-ai-assistant' ),
						'text'      => __( 'Text', 'emi-ai-assistant' ),
						'line'      => __( 'Borders', 'emi-ai-assistant' ),
					] as $key => $label ) : ?>
						<tr>
							<th><label for="branding_<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label></th>
							<td><input type="text" id="branding_<?php echo esc_attr( $key ); ?>" class="emi-color-picker" name="emi_ai_branding[<?php echo esc_attr( $key ); ?>]" value="<?php echo esc_attr( $branding[ $key ] ?? '' ); ?>" /></td>
						</tr>
					<?php endforeach; ?>
					<tr>
						<th><label for="branding_radius"><?php esc_html_e( 'Border radius', 'emi-ai-assistant' ); ?></label></th>
						<td><input type="text" id="branding_radius" name="emi_ai_branding[radius]" value="<?php echo esc_attr( $branding['radius'] ?? '14px' ); ?>" placeholder="14px" /></td>
					</tr>
					<tr>
						<th><?php esc_html_e( 'Agent avatar', 'emi-ai-assistant' ); ?></th>
						<td>
							<input type="hidden" id="branding_avatar_id" name="emi_ai_branding[avatar_id]" value="<?php echo esc_attr( (string) ( $branding['avatar_id'] ?? 0 ) ); ?>" />
							<button type="button" class="button" id="emi-pick-avatar"><?php esc_html_e( 'Choose image', 'emi-ai-assistant' ); ?></button>
							<span id="emi-avatar-preview">
								<?php if ( ! empty( $branding['avatar_id'] ) ) : ?>
									<img src="<?php echo esc_url( (string) wp_get_attachment_image_url( (int) $branding['avatar_id'], 'thumbnail' ) ); ?>" alt="" style="height:32px;vertical-align:middle;margin-left:8px;border-radius:50%;" />
								<?php endif; ?>
							</span>
						</td>
					</tr>
				</table>

				<?php submit_button(); ?>
			</form>

			<script>
				jQuery(function($){
					$('.emi-color-picker').wpColorPicker();
					$('#emi-pick-avatar').on('click', function(e){
						e.preventDefault();
						const frame = wp.media({ title: 'Choose avatar', multiple: false, library: { type: 'image' } });
						frame.on('select', function(){
							const a = frame.state().get('selection').first().toJSON();
							$('#branding_avatar_id').val(a.id);
							$('#emi-avatar-preview').html('<img src="'+a.url+'" style="height:32px;vertical-align:middle;margin-left:8px;border-radius:50%;" />');
						});
						frame.open();
					});
				});
			</script>
		</div>
		<?php
	}

	private static function render_rule( int $i, array $r ): void {
		$type      = (string) ( $r['type'] ?? '' );
		$mode      = (string) ( $r['mode'] ?? 'qualifier' );
		$priority  = (int)    ( $r['priority'] ?? 10 );
		?>
		<div class="emi-ai-card" style="background:#fff;border:1px solid #ccd0d4;padding:12px 16px;margin:10px 0;border-radius:6px;">
			<label style="margin-right:14px;">
				<input type="checkbox" name="emi_ai_triggers[rules][<?php echo $i; ?>][enabled]" value="1" <?php checked( ! empty( $r['enabled'] ) ); ?>>
				<?php esc_html_e( 'Enabled', 'emi-ai-assistant' ); ?>
			</label>

			<select name="emi_ai_triggers[rules][<?php echo $i; ?>][type]" style="margin-right:8px;">
				<option value="">— select rule —</option>
				<?php foreach ( self::RULE_TYPES as $t => $label ) : ?>
					<option value="<?php echo esc_attr( $t ); ?>" <?php selected( $type, $t ); ?>><?php echo esc_html( $label ); ?></option>
				<?php endforeach; ?>
			</select>

			<?php esc_html_e( 'Mode:', 'emi-ai-assistant' ); ?>
			<select name="emi_ai_triggers[rules][<?php echo $i; ?>][mode]" style="margin-right:8px;">
				<?php foreach ( [ 'recommender', 'estimator', 'cases', 'qualifier', 'scheduler' ] as $m ) : ?>
					<option value="<?php echo esc_attr( $m ); ?>" <?php selected( $mode, $m ); ?>><?php echo esc_html( $m ); ?></option>
				<?php endforeach; ?>
			</select>

			<?php esc_html_e( 'Priority:', 'emi-ai-assistant' ); ?>
			<input type="number" name="emi_ai_triggers[rules][<?php echo $i; ?>][priority]" value="<?php echo esc_attr( (string) $priority ); ?>" min="1" max="100" style="width:60px;margin-right:8px" />

			<div style="margin-top:8px">
				<?php self::param_field( $i, $r ); ?>
			</div>
		</div>
		<?php
	}

	private static function param_field( int $i, array $r ): void {
		$type   = (string) ( $r['type'] ?? '' );
		$params = (array)  ( $r['params'] ?? [] );

		switch ( $type ) {
			case 'page_load_delay':
				?>
				<label><?php esc_html_e( 'Delay (seconds):', 'emi-ai-assistant' ); ?>
				<input type="number" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][delay_seconds]" value="<?php echo esc_attr( (string) ( $params['delay_seconds'] ?? 30 ) ); ?>" min="0" max="3600" /></label>
				<?php
				break;
			case 'button_click':
				?>
				<label><?php esc_html_e( 'CSS selector:', 'emi-ai-assistant' ); ?>
				<input type="text" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][selector]" value="<?php echo esc_attr( (string) ( $params['selector'] ?? '' ) ); ?>" class="regular-text" placeholder=".nav-cta, #get-quote" /></label>
				<?php
				break;
			case 'url_match':
				?>
				<label><?php esc_html_e( 'URL pattern (substring):', 'emi-ai-assistant' ); ?>
				<input type="text" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][url_pattern]" value="<?php echo esc_attr( (string) ( $params['url_pattern'] ?? '' ) ); ?>" class="regular-text" placeholder="/services/" /></label>
				<?php
				break;
			case 'scroll_percent':
				?>
				<label><?php esc_html_e( 'Scroll past (%):', 'emi-ai-assistant' ); ?>
				<input type="number" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][percent]" value="<?php echo esc_attr( (string) ( $params['percent'] ?? 50 ) ); ?>" min="1" max="100" /></label>
				<?php
				break;
			case 'time_on_page':
				?>
				<label><?php esc_html_e( 'Cumulative focused time (seconds):', 'emi-ai-assistant' ); ?>
				<input type="number" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][seconds]" value="<?php echo esc_attr( (string) ( $params['seconds'] ?? 60 ) ); ?>" min="5" max="3600" /></label>
				<?php
				break;
			case 'returning_visitor':
				?>
				<label><?php esc_html_e( 'Minimum days since last visit:', 'emi-ai-assistant' ); ?>
				<input type="number" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][min_days_since]" value="<?php echo esc_attr( (string) ( $params['min_days_since'] ?? 1 ) ); ?>" min="1" max="90" /></label>
				<?php
				break;
			case 'utm_match':
				?>
				<label><?php esc_html_e( 'utm_source equals:', 'emi-ai-assistant' ); ?>
				<input type="text" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][utm_source]" value="<?php echo esc_attr( (string) ( $params['utm_source'] ?? '' ) ); ?>" placeholder="google" /></label>
				&nbsp;
				<label><?php esc_html_e( 'utm_campaign equals:', 'emi-ai-assistant' ); ?>
				<input type="text" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][utm_campaign]" value="<?php echo esc_attr( (string) ( $params['utm_campaign'] ?? '' ) ); ?>" placeholder="paid_search" /></label>
				<?php
				break;
			case 'idle':
				?>
				<label><?php esc_html_e( 'Idle threshold (seconds):', 'emi-ai-assistant' ); ?>
				<input type="number" name="emi_ai_triggers[rules][<?php echo $i; ?>][params][seconds]" value="<?php echo esc_attr( (string) ( $params['seconds'] ?? 60 ) ); ?>" min="5" max="600" /></label>
				<?php
				break;
			case 'exit_intent':
				echo '<em>' . esc_html__( 'No params — fires automatically on mouseleave (desktop) / scroll-up (mobile).', 'emi-ai-assistant' ) . '</em>';
				break;
			case '':
				echo '<em>' . esc_html__( 'Pick a rule type above to configure params.', 'emi-ai-assistant' ) . '</em>';
				break;
		}
	}

	private static function save( array $post ): void {
		$raw_rules = (array) ( $post['emi_ai_triggers']['rules'] ?? [] );
		$rules     = [];
		foreach ( $raw_rules as $r ) {
			$type = sanitize_key( (string) ( $r['type'] ?? '' ) );
			if ( $type === '' ) continue;
			if ( ! array_key_exists( $type, self::RULE_TYPES ) ) continue;

			$mode     = sanitize_key( (string) ( $r['mode'] ?? 'qualifier' ) );
			$priority = max( 1, min( 100, (int) ( $r['priority'] ?? 10 ) ) );
			$params   = (array)( $r['params'] ?? [] );

			$clean_params = self::clean_params_for( $type, $params );

			$rules[] = [
				'type'    => $type,
				'mode'    => $mode,
				'enabled' => ! empty( $r['enabled'] ),
				'priority'=> $priority,
				'params'  => $clean_params,
			];
		}
		update_option( 'emi_ai_triggers', [ 'rules' => $rules ], false );

		// Branding.
		$raw_branding = (array) ( $post['emi_ai_branding'] ?? [] );
		$branding     = [];
		foreach ( [ 'primary', 'secondary', 'accent', 'bg', 'text', 'line' ] as $k ) {
			$branding[ $k ] = \Emizentech\AiAssistant\Infra\Sanitizer::hex_color( $raw_branding[ $k ] ?? '' ) ?: ( $branding[ $k ] ?? '' );
		}
		$branding['radius']    = sanitize_text_field( (string) ( $raw_branding['radius'] ?? '14px' ) );
		$branding['avatar_id'] = (int) ( $raw_branding['avatar_id'] ?? 0 );
		update_option( 'emi_ai_branding', $branding, false );
	}

	private static function clean_params_for( string $type, array $params ): array {
		switch ( $type ) {
			case 'page_load_delay':   return [ 'delay_seconds'  => max( 0, (int) ( $params['delay_seconds']  ?? 30 ) ) ];
			case 'button_click':      return [ 'selector'       => sanitize_text_field( (string) ( $params['selector'] ?? '' ) ) ];
			case 'url_match':         return [ 'url_pattern'    => sanitize_text_field( (string) ( $params['url_pattern'] ?? '' ) ) ];
			case 'scroll_percent':    return [ 'percent'        => max( 1, min( 100, (int) ( $params['percent'] ?? 50 ) ) ) ];
			case 'time_on_page':      return [ 'seconds'        => max( 5, min( 3600, (int) ( $params['seconds'] ?? 60 ) ) ) ];
			case 'returning_visitor': return [ 'min_days_since' => max( 1, min( 90, (int) ( $params['min_days_since'] ?? 1 ) ) ) ];
			case 'utm_match':         return [
				'utm_source'   => sanitize_text_field( (string) ( $params['utm_source']   ?? '' ) ),
				'utm_campaign' => sanitize_text_field( (string) ( $params['utm_campaign'] ?? '' ) ),
			];
			case 'idle':              return [ 'seconds' => max( 5, min( 600, (int) ( $params['seconds'] ?? 60 ) ) ) ];
			default:                  return [];
		}
	}

	private static function empty_rule(): array {
		return [ 'type' => '', 'mode' => 'qualifier', 'enabled' => false, 'priority' => 10, 'params' => [] ];
	}
}
