<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin\MetaBoxes;

use Emizentech\AiAssistant\CPT\FaqCpt;

final class FaqMetaBoxes {

	public static function register(): void {
		add_action( 'add_meta_boxes_' . FaqCpt::POST_TYPE, [ self::class, 'add' ] );
		add_action( 'save_post_' . FaqCpt::POST_TYPE, [ self::class, 'save' ], 10, 2 );
	}

	public static function add(): void {
		add_meta_box( 'emi_faq_meta', __( 'FAQ details', 'emi-ai-assistant' ), [ self::class, 'render' ], FaqCpt::POST_TYPE, 'side' );
	}

	public static function render( \WP_Post $post ): void {
		wp_nonce_field( 'emi_faq_meta_save', 'emi_faq_meta_nonce' );
		$langs       = (string) get_post_meta( $post->ID, '_emi_languages', true ) ?: 'en';
		$ai_allowed  = (bool) get_post_meta( $post->ID, '_emi_ai_allowed', true );
		$enabled_langs = explode( ',', $langs );
		?>
		<p><strong><?php esc_html_e( 'Languages this FAQ covers', 'emi-ai-assistant' ); ?></strong></p>
		<?php foreach ( [ 'en' => 'English', 'ar' => 'Arabic', 'es' => 'Spanish', 'fr' => 'French' ] as $code => $label ) : ?>
			<label style="display:block">
				<input type="checkbox" name="_emi_languages[]" value="<?php echo esc_attr( $code ); ?>" <?php checked( in_array( $code, $enabled_langs, true ) ); ?>>
				<?php echo esc_html( $label ); ?>
			</label>
		<?php endforeach; ?>

		<p style="margin-top:14px">
			<label>
				<input type="checkbox" name="_emi_ai_allowed" value="1" <?php checked( $ai_allowed ); ?>>
				<?php esc_html_e( 'Allowed in chat suggestions', 'emi-ai-assistant' ); ?>
			</label>
		</p>
		<p class="description"><?php esc_html_e( 'When checked, the widget may show this FAQ as an inline answer.', 'emi-ai-assistant' ); ?></p>
		<?php
	}

	public static function save( int $post_id, \WP_Post $post ): void {
		if ( ! isset( $_POST['emi_faq_meta_nonce'] ) || ! wp_verify_nonce( $_POST['emi_faq_meta_nonce'], 'emi_faq_meta_save' ) ) return;
		if ( wp_is_post_autosave( $post_id ) || wp_is_post_revision( $post_id ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		$langs = array_filter( array_map( 'sanitize_key', (array) ( $_POST['_emi_languages'] ?? [] ) ) );
		update_post_meta( $post_id, '_emi_languages', implode( ',', $langs ) ?: 'en' );
		update_post_meta( $post_id, '_emi_ai_allowed', ! empty( $_POST['_emi_ai_allowed'] ) ? 1 : 0 );
	}
}
