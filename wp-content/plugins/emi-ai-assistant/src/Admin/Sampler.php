<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

use Emizentech\AiAssistant\CPT\CaseStudyCpt;
use Emizentech\AiAssistant\CPT\FaqCpt;
use Emizentech\AiAssistant\CPT\LeadMagnetCpt;

/**
 * Imports data/samples/*.json into the corresponding tables and CPTs.
 * Idempotent — uses slug + post title as dedupe keys.
 */
final class Sampler {

	public static function seed(): array {
		$report = [
			'services'     => self::seed_services(),
			'case_studies' => self::seed_case_studies(),
			'faqs'         => self::seed_faqs(),
			'lead_magnets' => self::seed_lead_magnets(),
		];
		return $report;
	}

	public static function remove(): array {
		return [
			'services'     => self::remove_services(),
			'case_studies' => self::remove_case_studies(),
			'faqs'         => self::remove_cpt_posts( FaqCpt::POST_TYPE ),
			'lead_magnets' => self::remove_cpt_posts( LeadMagnetCpt::POST_TYPE ),
		];
	}

	// ---------------- Services (custom table) ----------------

	private static function seed_services(): array {
		$file = EMI_AI_PATH . 'data/samples/services.json';
		if ( ! file_exists( $file ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'file_missing' ];
		}
		$rows = json_decode( (string) file_get_contents( $file ), true );
		if ( ! is_array( $rows ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'invalid_json' ];
		}

		global $wpdb;
		$table = $wpdb->prefix . 'emi_services';
		$inserted = 0;
		$skipped  = 0;

		foreach ( $rows as $r ) {
			$slug = sanitize_title( (string) ( $r['slug'] ?? '' ) );
			if ( ! $slug ) { $skipped++; continue; }

			$existing = $wpdb->get_var(
				$wpdb->prepare( "SELECT id FROM {$table} WHERE slug = %s", $slug )
			);
			if ( $existing ) { $skipped++; continue; }

			$wpdb->insert( $table, [
				'slug'           => $slug,
				'name'           => sanitize_text_field( (string) ( $r['name'] ?? '' ) ),
				'category'       => sanitize_text_field( (string) ( $r['category'] ?? '' ) ),
				'short_pitch'    => wp_kses_post( (string) ( $r['short_pitch'] ?? '' ) ),
				'synonyms'       => sanitize_text_field( (string) ( $r['synonyms'] ?? '' ) ),
				'landing_url'    => esc_url_raw( (string) ( $r['landing_url'] ?? '' ) ),
				'base_price_min' => (int) ( $r['base_price_min'] ?? 0 ),
				'base_price_max' => (int) ( $r['base_price_max'] ?? 0 ),
				'tier'           => in_array( $r['tier'] ?? '', [ 'starter', 'standard', 'enterprise' ], true ) ? $r['tier'] : 'standard',
				'enabled'        => 1,
				'menu_order'     => (int) ( $r['menu_order'] ?? 0 ),
			] );
			$inserted++;
		}

		return [ 'inserted' => $inserted, 'skipped' => $skipped ];
	}

	private static function remove_services(): array {
		global $wpdb;
		$deleted = $wpdb->query( "DELETE FROM {$wpdb->prefix}emi_services" );
		return [ 'deleted' => (int) $deleted ];
	}

	// ---------------- Case Studies (CPT + FULLTEXT mirror) ----------------

	private static function seed_case_studies(): array {
		$file = EMI_AI_PATH . 'data/samples/case-studies.json';
		if ( ! file_exists( $file ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'file_missing' ];
		}
		$rows = json_decode( (string) file_get_contents( $file ), true );
		if ( ! is_array( $rows ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'invalid_json' ];
		}

		$inserted = 0;
		$skipped  = 0;

		foreach ( $rows as $r ) {
			$slug = sanitize_title( (string) ( $r['slug'] ?? '' ) );
			if ( ! $slug ) { $skipped++; continue; }

			// Dedupe by slug (post_name) on the CPT.
			$existing = get_posts( [
				'post_type'   => CaseStudyCpt::POST_TYPE,
				'name'        => $slug,
				'post_status' => 'any',
				'numberposts' => 1,
			] );
			if ( $existing ) { $skipped++; continue; }

			$post_id = wp_insert_post( [
				'post_type'    => CaseStudyCpt::POST_TYPE,
				'post_title'   => sanitize_text_field( (string) ( $r['title'] ?? '' ) ),
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_excerpt' => wp_kses_post( (string) ( $r['summary'] ?? '' ) ),
				'post_content' => wp_kses_post( (string) ( $r['summary'] ?? '' ) ),
				'meta_input'   => [
					'_emi_region'      => sanitize_text_field( (string) ( $r['region']     ?? '' ) ),
					'_emi_tech_stack'  => sanitize_text_field( (string) ( $r['tech_stack'] ?? '' ) ),
					'_emi_metrics'     => (string) ( $r['metrics'] ?? '[]' ),
					'_emi_case_url'    => esc_url_raw( (string) ( $r['case_url'] ?? '' ) ),
					'_emi_excluded'    => 0,
				],
			], true );

			if ( is_wp_error( $post_id ) ) {
				$skipped++; continue;
			}

			// Assign industry as a term.
			if ( ! empty( $r['industry'] ) ) {
				wp_set_object_terms( (int) $post_id, sanitize_text_field( (string) $r['industry'] ), CaseStudyCpt::TAXONOMY );
			}
			// Assign tags.
			if ( ! empty( $r['tags'] ) ) {
				$tags = array_map( 'trim', explode( ',', (string) $r['tags'] ) );
				wp_set_post_tags( (int) $post_id, $tags );
			}

			// Trigger FULLTEXT mirror.
			CaseStudyCpt::sync_to_index( (int) $post_id, get_post( $post_id ) );
			$inserted++;
		}

		return [ 'inserted' => $inserted, 'skipped' => $skipped ];
	}

	private static function remove_case_studies(): array {
		global $wpdb;
		$ids = get_posts( [
			'post_type'   => CaseStudyCpt::POST_TYPE,
			'numberposts' => -1,
			'post_status' => 'any',
			'fields'      => 'ids',
		] );
		foreach ( $ids as $id ) {
			wp_delete_post( (int) $id, true );
		}
		// Truncate the FULLTEXT mirror.
		$wpdb->query( "DELETE FROM {$wpdb->prefix}emi_case_studies" );
		return [ 'deleted' => count( $ids ) ];
	}

	// ---------------- FAQs (CPT) ----------------

	private static function seed_faqs(): array {
		$file = EMI_AI_PATH . 'data/samples/faqs.json';
		if ( ! file_exists( $file ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'file_missing' ];
		}
		$rows = json_decode( (string) file_get_contents( $file ), true );
		if ( ! is_array( $rows ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'invalid_json' ];
		}

		$inserted = 0;
		$skipped  = 0;
		foreach ( $rows as $r ) {
			$title = sanitize_text_field( (string) ( $r['question'] ?? '' ) );
			if ( ! $title ) { $skipped++; continue; }

			$existing = get_page_by_title( $title, OBJECT, FaqCpt::POST_TYPE );
			if ( $existing ) { $skipped++; continue; }

			$post_id = wp_insert_post( [
				'post_type'    => FaqCpt::POST_TYPE,
				'post_title'   => $title,
				'post_content' => wp_kses_post( (string) ( $r['answer'] ?? '' ) ),
				'post_status'  => 'publish',
				'meta_input'   => [ '_emi_ai_allowed' => 1 ],
			], true );

			if ( ! is_wp_error( $post_id ) && ! empty( $r['topic'] ) ) {
				wp_set_object_terms( (int) $post_id, sanitize_text_field( (string) $r['topic'] ), FaqCpt::TAXONOMY );
				$inserted++;
			} else {
				$skipped++;
			}
		}
		return [ 'inserted' => $inserted, 'skipped' => $skipped ];
	}

	// ---------------- Lead Magnets (CPT) ----------------

	private static function seed_lead_magnets(): array {
		$file = EMI_AI_PATH . 'data/samples/lead-magnets.json';
		if ( ! file_exists( $file ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'file_missing' ];
		}
		$rows = json_decode( (string) file_get_contents( $file ), true );
		if ( ! is_array( $rows ) ) {
			return [ 'inserted' => 0, 'skipped' => 0, 'error' => 'invalid_json' ];
		}

		$inserted = 0;
		$skipped  = 0;
		foreach ( $rows as $r ) {
			$title = sanitize_text_field( (string) ( $r['title'] ?? '' ) );
			if ( ! $title ) { $skipped++; continue; }

			$existing = get_page_by_title( $title, OBJECT, LeadMagnetCpt::POST_TYPE );
			if ( $existing ) { $skipped++; continue; }

			$post_id = wp_insert_post( [
				'post_type'   => LeadMagnetCpt::POST_TYPE,
				'post_title'  => $title,
				'post_status' => 'publish',
				'meta_input'  => [
					'_emi_pitch'           => wp_kses_post( (string) ( $r['pitch'] ?? '' ) ),
					'_emi_cta_text'        => sanitize_text_field( (string) ( $r['cta_text'] ?? '' ) ),
					'_emi_asset_url'       => esc_url_raw( (string) ( $r['asset_url'] ?? '' ) ),
					'_emi_eligibility'     => sanitize_textarea_field( (string) ( $r['eligibility'] ?? '' ) ),
					'_emi_cap_per_visitor' => (int) ( $r['cap_per_visitor'] ?? 1 ),
					'_emi_variant_group'   => sanitize_text_field( (string) ( $r['variant_group'] ?? 'default' ) ),
				],
			], true );

			if ( ! is_wp_error( $post_id ) ) {
				$inserted++;
			} else {
				$skipped++;
			}
		}
		return [ 'inserted' => $inserted, 'skipped' => $skipped ];
	}

	private static function remove_cpt_posts( string $post_type ): array {
		$ids = get_posts( [
			'post_type'   => $post_type,
			'numberposts' => -1,
			'post_status' => 'any',
			'fields'      => 'ids',
		] );
		foreach ( $ids as $id ) {
			wp_delete_post( (int) $id, true );
		}
		return [ 'deleted' => count( $ids ) ];
	}
}
