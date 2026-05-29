<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class Assets {

	public static function enqueue( string $hook ): void {
		// Only on our admin pages.
		if ( ! str_starts_with( (string) $hook, 'toplevel_page_emi-ai' )
			&& ! str_starts_with( (string) $hook, 'emi-ai_page_' )
			&& ! str_starts_with( (string) $hook, 'admin_page_emi-ai-wizard' )
		) {
			return;
		}

		wp_enqueue_style(
			'emi-ai-admin',
			EMI_AI_URL . 'assets/admin/admin.css',
			[ 'wp-components' ],
			EMI_AI_VERSION
		);

		wp_enqueue_script(
			'emi-ai-admin',
			EMI_AI_URL . 'assets/admin/admin.js',
			[ 'jquery', 'wp-components', 'wp-element', 'wp-api-fetch' ],
			EMI_AI_VERSION,
			true
		);

		wp_localize_script( 'emi-ai-admin', 'EmiAIAdmin', [
			'restUrl'  => esc_url_raw( rest_url( 'emi-ai/v1' ) ),
			'nonce'    => wp_create_nonce( 'wp_rest' ),
			'adminUrl' => admin_url(),
			'version'  => EMI_AI_VERSION,
		] );

		// Color picker for branding.
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );

		// Media library for avatar/asset pickers.
		wp_enqueue_media();
	}
}
