<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\CPT;

final class FaqCpt {

	public const POST_TYPE = 'emi_faq';
	public const TAXONOMY  = 'emi_topic';

	public static function register(): void {
		register_post_type( self::POST_TYPE, [
			'labels'              => [
				'name'          => __( 'FAQs', 'emi-ai-assistant' ),
				'singular_name' => __( 'FAQ', 'emi-ai-assistant' ),
				'add_new_item'  => __( 'Add New FAQ', 'emi-ai-assistant' ),
				'menu_name'     => __( 'FAQs', 'emi-ai-assistant' ),
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => 'emi-ai',
			'show_in_rest'        => true,
			'supports'            => [ 'title', 'editor', 'custom-fields' ],
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => false,
			'capability_type'     => 'post',
		] );

		register_taxonomy( self::TAXONOMY, self::POST_TYPE, [
			'labels'            => [
				'name'          => __( 'Topics', 'emi-ai-assistant' ),
				'singular_name' => __( 'Topic', 'emi-ai-assistant' ),
			],
			'hierarchical'      => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'public'            => false,
		] );

		register_post_meta( self::POST_TYPE, '_emi_languages', [
			'type'         => 'string',
			'single'       => true,
			'show_in_rest' => true,
			'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
		] );
		register_post_meta( self::POST_TYPE, '_emi_ai_allowed', [
			'type'         => 'boolean',
			'single'       => true,
			'show_in_rest' => true,
			'default'      => true,
			'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
		] );
	}
}
