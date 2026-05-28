<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin\MetaBoxes;

use Emizentech\AiAssistant\CPT\LeadMagnetCpt;

final class LeadMagnetMetaBoxes {

	public static function register(): void {
		add_action( 'add_meta_boxes_' . LeadMagnetCpt::POST_TYPE, [ self::class, 'add' ] );
		add_action( 'save_post_' . LeadMagnetCpt::POST_TYPE, [ self::class, 'save' ], 10, 2 );
	}

	public static function add(): void {
		add_meta_box(
			'emi_magnet_details',
			__( 'Lead-magnet details', 'emi-ai-assistant' ),
			[ self::class, 'render' ],
			LeadMagnetCpt::POST_TYPE,
			'normal',
			'high'
		);
	}

	public static function render( \WP_Post $post ): void {
		wp_nonce_field( 'emi_magnet_meta_save', 'emi_magnet_meta_nonce' );
		$pitch       = (string) get_post_meta( $post->ID, '_emi_pitch', true );
		$cta_text    = (string) get_post_meta( $post->ID, '_emi_cta_text', true );
		$asset_url   = (string) get_post_meta( $post->ID, '_emi_asset_url', true );
		$eligibility = (string) get_post_meta( $post->ID, '_emi_eligibility', true );
		$cap         = (int) get_post_meta( $post->ID, '_emi_cap_per_visitor', true );
		$variant     = (string) get_post_meta( $post->ID, '_emi_variant_group', true );
		?>
		<table class="form-table" role="presentation">
			<tr>
				<th><label for="emi_pitch"><?php esc_html_e( 'Pitch (shown in the exit modal)', 'emi-ai-assistant' ); ?></label></th>
				<td><textarea id="emi_pitch" name="_emi_pitch" rows="3" class="large-text" maxlength="500"><?php echo esc_textarea( $pitch ); ?></textarea><p class="description"><?php esc_html_e( 'A one- or two-sentence value proposition. Plain text, may contain HTML <b> tags.', 'emi-ai-assistant' ); ?></p></td>
			</tr>
			<tr>
				<th><label for="emi_cta"><?php esc_html_e( 'CTA button text', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="text" id="emi_cta" name="_emi_cta_text" value="<?php echo esc_attr( $cta_text ); ?>" class="regular-text" maxlength="40" placeholder="Send it to me ›" /></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Asset', 'emi-ai-assistant' ); ?></th>
				<td>
					<input type="text" id="emi_asset_url" name="_emi_asset_url" value="<?php echo esc_attr( $asset_url ); ?>" class="large-text" placeholder="https://…or use the picker" />
					<button type="button" class="button" onclick="emiPickAsset()"><?php esc_html_e( 'Choose from Media Library', 'emi-ai-assistant' ); ?></button>
					<p class="description"><?php esc_html_e( 'PDF, image or zip. Attached to the email sent on capture.', 'emi-ai-assistant' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><label for="emi_eligibility"><?php esc_html_e( 'Eligibility rules', 'emi-ai-assistant' ); ?></label></th>
				<td>
					<textarea id="emi_eligibility" name="_emi_eligibility" rows="3" class="large-text code"><?php echo esc_textarea( $eligibility ); ?></textarea>
					<p class="description">
						<?php esc_html_e( 'One per line. Supported keys:', 'emi-ai-assistant' ); ?>
						<code>url_contains:&lt;substring&gt;</code>,
						<code>lang:&lt;code&gt;</code>,
						<code>referrer_contains:&lt;substring&gt;</code>.
					</p>
				</td>
			</tr>
			<tr>
				<th><label for="emi_cap"><?php esc_html_e( 'Cap per visitor', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="number" id="emi_cap" name="_emi_cap_per_visitor" value="<?php echo esc_attr( (string) ( $cap ?: 1 ) ); ?>" min="1" max="10" /><p class="description"><?php esc_html_e( 'How many times we may offer this magnet to the same visitor (over 30 days).', 'emi-ai-assistant' ); ?></p></td>
			</tr>
			<tr>
				<th><label for="emi_variant"><?php esc_html_e( 'A/B variant group', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="text" id="emi_variant" name="_emi_variant_group" value="<?php echo esc_attr( $variant ?: 'default' ); ?>" class="regular-text" /><p class="description"><?php esc_html_e( 'Magnets sharing a group are randomly chosen between (50/50).', 'emi-ai-assistant' ); ?></p></td>
			</tr>
		</table>
		<script>
			function emiPickAsset(){
				const frame = wp.media({ title: 'Choose asset', multiple: false });
				frame.on('select', function(){
					const a = frame.state().get('selection').first().toJSON();
					document.getElementById('emi_asset_url').value = a.url;
				});
				frame.open();
			}
		</script>
		<?php
	}

	public static function save( int $post_id, \WP_Post $post ): void {
		if ( ! isset( $_POST['emi_magnet_meta_nonce'] ) || ! wp_verify_nonce( $_POST['emi_magnet_meta_nonce'], 'emi_magnet_meta_save' ) ) return;
		if ( wp_is_post_autosave( $post_id ) || wp_is_post_revision( $post_id ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		update_post_meta( $post_id, '_emi_pitch',           wp_kses_post( (string) ( $_POST['_emi_pitch'] ?? '' ) ) );
		update_post_meta( $post_id, '_emi_cta_text',        sanitize_text_field( (string) ( $_POST['_emi_cta_text'] ?? '' ) ) );
		update_post_meta( $post_id, '_emi_asset_url',       esc_url_raw( (string) ( $_POST['_emi_asset_url'] ?? '' ) ) );
		update_post_meta( $post_id, '_emi_eligibility',     sanitize_textarea_field( (string) ( $_POST['_emi_eligibility'] ?? '' ) ) );
		update_post_meta( $post_id, '_emi_cap_per_visitor', max( 1, min( 10, (int) ( $_POST['_emi_cap_per_visitor'] ?? 1 ) ) ) );
		update_post_meta( $post_id, '_emi_variant_group',   sanitize_text_field( (string) ( $_POST['_emi_variant_group'] ?? 'default' ) ) );
	}
}
