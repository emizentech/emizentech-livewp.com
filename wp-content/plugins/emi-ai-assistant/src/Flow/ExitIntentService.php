<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Flow;

use Emizentech\AiAssistant\CPT\LeadMagnetCpt;

/**
 * Resolves which lead magnet to show for a given page/visitor context.
 */
final class ExitIntentService {

	public static function pick_magnet( string $page_url, string $lang = 'en' ): array {
		$args = [
			'post_type'      => LeadMagnetCpt::POST_TYPE,
			'posts_per_page' => 20,
			'post_status'    => 'publish',
			'orderby'        => 'menu_order date',
			'order'          => 'ASC',
		];

		$query = new \WP_Query( $args );

		foreach ( $query->posts as $post ) {
			$eligibility = (string) get_post_meta( $post->ID, '_emi_eligibility', true );
			if ( self::is_eligible( $eligibility, $page_url, $lang ) ) {
				return self::shape( $post );
			}
		}

		// Fallback: first published magnet.
		if ( ! empty( $query->posts ) ) {
			return self::shape( $query->posts[0] );
		}

		// Default builtin magnet.
		return [
			'id'        => 0,
			'title'     => __( 'Wait — before you go!', 'emi-ai-assistant' ),
			'pitch'     => __( 'Grab a free 1-page Mobile App Launch Checklist tailored to your industry. We will email it instantly.', 'emi-ai-assistant' ),
			'cta_text'  => __( 'Send me the checklist ›', 'emi-ai-assistant' ),
			'asset_url' => '',
		];
	}

	private static function is_eligible( string $rules, string $page_url, string $lang ): bool {
		if ( ! $rules ) {
			return true;
		}
		// Simple rule format: "url_contains:services\nlang:en"
		foreach ( explode( "\n", $rules ) as $line ) {
			$line = trim( $line );
			if ( ! $line || strpos( $line, ':' ) === false ) {
				continue;
			}
			[ $key, $val ] = array_map( 'trim', explode( ':', $line, 2 ) );
			switch ( $key ) {
				case 'url_contains':
					if ( stripos( $page_url, $val ) === false ) return false;
					break;
				case 'lang':
					if ( $val !== $lang ) return false;
					break;
			}
		}
		return true;
	}

	private static function shape( \WP_Post $post ): array {
		return [
			'id'        => $post->ID,
			'title'     => $post->post_title,
			'pitch'     => (string) get_post_meta( $post->ID, '_emi_pitch', true ),
			'cta_text'  => (string) get_post_meta( $post->ID, '_emi_cta_text', true ) ?: __( 'Send it to me ›', 'emi-ai-assistant' ),
			'asset_url' => (string) get_post_meta( $post->ID, '_emi_asset_url', true ),
		];
	}
}
