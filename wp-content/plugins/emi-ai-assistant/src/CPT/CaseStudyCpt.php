<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\CPT;

final class CaseStudyCpt {

	public const POST_TYPE = 'emi_case_study';
	public const TAXONOMY  = 'emi_industry';

	public static function register(): void {
		register_post_type( self::POST_TYPE, [
			'labels'              => [
				'name'               => __( 'Case Studies', 'emi-ai-assistant' ),
				'singular_name'      => __( 'Case Study', 'emi-ai-assistant' ),
				'add_new'            => __( 'Add New', 'emi-ai-assistant' ),
				'add_new_item'       => __( 'Add New Case Study', 'emi-ai-assistant' ),
				'edit_item'          => __( 'Edit Case Study', 'emi-ai-assistant' ),
				'new_item'           => __( 'New Case Study', 'emi-ai-assistant' ),
				'view_item'          => __( 'View Case Study', 'emi-ai-assistant' ),
				'search_items'       => __( 'Search Case Studies', 'emi-ai-assistant' ),
				'not_found'          => __( 'No case studies found', 'emi-ai-assistant' ),
				'menu_name'          => __( 'Case Studies', 'emi-ai-assistant' ),
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => 'emi-ai',
			'show_in_rest'        => true,
			'rest_base'           => 'emi-case-studies',
			'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ],
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
		] );

		register_taxonomy( self::TAXONOMY, self::POST_TYPE, [
			'labels'            => [
				'name'              => __( 'Industries', 'emi-ai-assistant' ),
				'singular_name'     => __( 'Industry', 'emi-ai-assistant' ),
			],
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'public'            => false,
		] );

		register_post_meta( self::POST_TYPE, '_emi_region', [
			'type'         => 'string',
			'single'       => true,
			'show_in_rest' => true,
			'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
		] );
		register_post_meta( self::POST_TYPE, '_emi_tech_stack', [
			'type'         => 'string',
			'single'       => true,
			'show_in_rest' => true,
			'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
		] );
		register_post_meta( self::POST_TYPE, '_emi_metrics', [
			'type'         => 'string',
			'single'       => true,
			'show_in_rest' => true,
			'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
		] );
		register_post_meta( self::POST_TYPE, '_emi_case_url', [
			'type'         => 'string',
			'single'       => true,
			'show_in_rest' => true,
			'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
		] );
		register_post_meta( self::POST_TYPE, '_emi_excluded', [
			'type'         => 'boolean',
			'single'       => true,
			'show_in_rest' => true,
			'auth_callback' => static fn() => current_user_can( 'edit_posts' ),
		] );

		// Sync to FULLTEXT index on save.
		add_action( 'save_post_' . self::POST_TYPE, [ self::class, 'sync_to_index' ], 10, 2 );
		add_action( 'trashed_post', [ self::class, 'remove_from_index' ] );
	}

	public static function sync_to_index( int $post_id, \WP_Post $post ): void {
		if ( wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) ) {
			return;
		}
		if ( $post->post_status !== 'publish' ) {
			self::remove_from_index( $post_id );
			return;
		}

		global $wpdb;
		$table = $wpdb->prefix . 'emi_case_studies';

		$wpdb->replace(
			$table,
			[
				'post_id'      => $post_id,
				'slug'         => $post->post_name,
				'title'        => $post->post_title,
				'summary'      => wp_strip_all_tags( get_the_excerpt( $post_id ) ?: wp_trim_words( $post->post_content, 40, '…' ) ),
				'industry'     => self::primary_term_name( $post_id, self::TAXONOMY ),
				'region'       => (string) get_post_meta( $post_id, '_emi_region', true ),
				'tech_stack'   => (string) get_post_meta( $post_id, '_emi_tech_stack', true ),
				'tags'         => implode( ', ', wp_get_post_terms( $post_id, 'post_tag', [ 'fields' => 'names' ] ) ?: [] ),
				'metrics'      => (string) get_post_meta( $post_id, '_emi_metrics', true ),
				'case_url'     => (string) get_post_meta( $post_id, '_emi_case_url', true ),
				'excluded'     => (int) get_post_meta( $post_id, '_emi_excluded', true ),
				'published_at' => $post->post_date_gmt,
			]
		);
	}

	public static function remove_from_index( int $post_id ): void {
		if ( get_post_type( $post_id ) !== self::POST_TYPE ) {
			return;
		}
		global $wpdb;
		$wpdb->delete( $wpdb->prefix . 'emi_case_studies', [ 'post_id' => $post_id ] );
	}

	private static function primary_term_name( int $post_id, string $taxonomy ): string {
		$terms = wp_get_post_terms( $post_id, $taxonomy );
		if ( is_wp_error( $terms ) || empty( $terms ) ) {
			return '';
		}
		return $terms[0]->name;
	}
}
