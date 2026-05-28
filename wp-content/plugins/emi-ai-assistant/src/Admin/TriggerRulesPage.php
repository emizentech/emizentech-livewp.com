<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class TriggerRulesPage {

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
				<?php foreach ( $rules as $i => $r ) : self::render_rule( $i, $r ); endforeach; ?>
				<?php self::render_rule( count( $rules ), self::empty_rule() ); ?>

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
		?>
		<div class="emi-ai-card" style="background:#fff;border:1px solid #ccd0d4;padding:12px 16px;margin:10px 0;border-radius:6px;">
			<label style="margin-right:14px;"><input type="checkbox" name="emi_ai_triggers[rules][<?php echo $i; ?>][enabled]" value="1" <?php checked( ! empty( $r['enabled'] ) ); ?>> <?php esc_html_e( 'Enabled', 'emi-ai-assistant' ); ?></label>
			<select name="emi_ai_triggers[rules][<?php echo $i; ?>][type]" style="margin-right:8px;">
				<?php foreach ( [
					'page_load_delay' => 'After N seconds on page',
					'exit_intent'     => 'When visitor tries to leave (exit-intent)',
					'button_click'    => 'When a CSS selector is clicked',
					'url_match'       => 'When the URL contains a pattern',
				] as $t => $label ) : ?>
					<option value="<?php echo esc_attr( $t ); ?>" <?php selected( $r['type'] ?? '', $t ); ?>><?php echo esc_html( $label ); ?></option>
				<?php endforeach; ?>
			</select>
			<?php esc_html_e( 'Open in mode:', 'emi-ai-assistant' ); ?>
			<select name="emi_ai_triggers[rules][<?php echo $i; ?>][mode]" style="margin-right:8px;">
				<?php foreach ( [ 'recommender', 'estimator', 'cases', 'qualifier', 'scheduler' ] as $m ) : ?>
					<option value="<?php echo esc_attr( $m ); ?>" <?php selected( $r['mode'] ?? 'qualifier', $m ); ?>><?php echo esc_html( $m ); ?></option>
				<?php endforeach; ?>
			</select>
			<?php esc_html_e( 'Param:', 'emi-ai-assistant' ); ?>
			<input type="text" name="emi_ai_triggers[rules][<?php echo $i; ?>][param]" value="<?php echo esc_attr( self::param_to_str( $r ) ); ?>" class="regular-text" placeholder="e.g. 30 (seconds) or .nav-cta (selector)" />
		</div>
		<?php
	}

	private static function param_to_str( array $r ): string {
		$params = (array) ( $r['params'] ?? [] );
		if ( ! empty( $params['delay_seconds'] ) ) return (string) $params['delay_seconds'];
		if ( ! empty( $params['selector'] )      ) return (string) $params['selector'];
		if ( ! empty( $params['url_pattern'] )   ) return (string) $params['url_pattern'];
		return '';
	}

	private static function save( array $post ): void {
		// Triggers.
		$raw_rules = (array) ( $post['emi_ai_triggers']['rules'] ?? [] );
		$rules     = [];
		foreach ( $raw_rules as $r ) {
			if ( empty( $r['type'] ) ) continue;
			$type   = sanitize_key( (string) $r['type'] );
			$mode   = sanitize_key( (string) ( $r['mode'] ?? 'qualifier' ) );
			$param  = sanitize_text_field( (string) ( $r['param'] ?? '' ) );
			$params = match ( $type ) {
				'page_load_delay' => [ 'delay_seconds' => max( 0, (int) $param ) ],
				'button_click'    => [ 'selector'      => $param ],
				'url_match'       => [ 'url_pattern'   => $param ],
				default           => [],
			};
			$rules[] = [
				'type'    => $type,
				'mode'    => $mode,
				'enabled' => ! empty( $r['enabled'] ),
				'priority'=> 10,
				'params'  => $params,
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

	private static function empty_rule(): array {
		return [ 'type' => '', 'mode' => 'qualifier', 'enabled' => false, 'params' => [] ];
	}
}
