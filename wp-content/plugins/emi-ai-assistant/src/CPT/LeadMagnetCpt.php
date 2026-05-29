<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\CPT;

final class LeadMagnetCpt {

	public const POST_TYPE = 'emi_lead_magnet';

	public static function register(): void {
		register_post_type( self::POST_TYPE, [
			'labels'              => [
				'name'          => __( 'Lead Magnets', 'emi-ai-assistant' ),
				'singular_name' => __( 'Lead Magnet', 'emi-ai-assistant' ),
				'add_new_item'  => __( 'Add New Lead Magnet', 'emi-ai-assistant' ),
				'menu_name'     => __( 'Lead Magnets', 'emi-ai-assistant' ),
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => 'emi-ai',
			'show_in_rest'        => true,
			'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => false,
			'capability_type'     => 'post',
		] );

		foreach ( [
			'_emi_pitch'         => 'string',
			'_emi_cta_text'      => 'string',
			'_emi_asset_url'     => 'string',
			'_emi_eligibility'   => 'string',
			'_emi_cap_per_visitor' => 'integer',
			'_emi_variant_group' => 'string',
		] as $meta_key => $type ) {
			register_post_meta( self::POST_TYPE, $meta_key, [
				'type'         => $type,
				'single'       => true,
				'show_in_rest' => true,
				'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
			] );
		}
	}
}
