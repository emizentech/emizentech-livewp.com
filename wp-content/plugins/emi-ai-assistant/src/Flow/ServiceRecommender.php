<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Flow;

/**
 * Deterministic recommender. Maps (service, industry) → recommended service page + featured case study.
 * Admin can override the lookup via emi_ai_recommender_map option.
 */
final class ServiceRecommender {

	public static function recommend( string $service, string $industry = '', string $stage = '' ): array {
		$map = self::resolve_map();

		$key = strtolower( $service );
		if ( ! isset( $map[ $key ] ) ) {
			$key = 'mobile_app'; // sensible default
		}

		$reco = $map[ $key ];

		// Optional industry-specific override.
		if ( $industry && ! empty( $reco['industry_overrides'][ strtolower( $industry ) ] ) ) {
			$reco = array_merge( $reco, $reco['industry_overrides'][ strtolower( $industry ) ] );
		}

		$case = self::fetch_case_study( $reco['case_slug'] ?? null );

		return [
			'service'   => $reco['service'],
			'page_url'  => $reco['url'],
			'pitch'     => $reco['pitch'],
			'case'      => $case,
			'cta_chips' => [
				__( '📅 Book a 20-min call', 'emi-ai-assistant' ),
				__( '📝 Get a detailed quote', 'emi-ai-assistant' ),
				__( '📂 See more like this', 'emi-ai-assistant' ),
			],
		];
	}

	private static function resolve_map(): array {
		$override = get_option( 'emi_ai_recommender_map', [] );
		return ! empty( $override ) ? $override : self::default_map();
	}

	private static function default_map(): array {
		return [
			'mobile_app'      => [
				'service'   => __( 'Mobile App Development (Flutter / Native iOS+Android)', 'emi-ai-assistant' ),
				'url'       => home_url( '/mobile-app-development.html' ),
				'pitch'     => __( 'Most D2C clients start with Flutter for speed.', 'emi-ai-assistant' ),
				'case_slug' => 'freshcart-d2c-skincare',
			],
			'e-commerce'      => [
				'service'   => __( 'Magento + Shopify eCommerce Development', 'emi-ai-assistant' ),
				'url'       => home_url( '/ecommerce-app-development.html' ),
				'pitch'     => __( 'For high-growth retailers, Adobe Commerce is our top pick.', 'emi-ai-assistant' ),
				'case_slug' => 'novawear-adobe-commerce',
			],
			'custom_software' => [
				'service'   => __( 'Custom Software Development', 'emi-ai-assistant' ),
				'url'       => home_url( '/software-development-services.html' ),
				'pitch'     => __( 'Custom-built — modular and scalable from day one.', 'emi-ai-assistant' ),
				'case_slug' => 'practiceos-doctor-saas',
			],
			'ai_ml'           => [
				'service'   => __( 'AI & Machine Learning Services', 'emi-ai-assistant' ),
				'url'       => home_url( '/ai-app-development-company.html' ),
				'pitch'     => __( 'Production-ready ML pipelines + dashboards.', 'emi-ai-assistant' ),
				'case_slug' => 'loanscore-credit-ai',
			],
			'salesforce'      => [
				'service'   => __( 'Salesforce Consulting & Implementation', 'emi-ai-assistant' ),
				'url'       => home_url( '/salesforce-services' ),
				'pitch'     => __( 'End-to-end Sales Cloud + Service Cloud rollouts.', 'emi-ai-assistant' ),
				'case_slug' => 'salesforge-rollout',
			],
		];
	}

	private static function fetch_case_study( ?string $slug ): array {
		if ( ! $slug ) {
			return [];
		}
		global $wpdb;
		$row = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT title, summary, metrics, case_url FROM {$wpdb->prefix}emi_case_studies WHERE slug = %s AND excluded = 0 LIMIT 1",
				$slug
			),
			ARRAY_A
		);
		if ( ! $row ) {
			return [];
		}
		$metrics = json_decode( (string) $row['metrics'], true ) ?: [];
		return [
			'title'   => $row['title'],
			'summary' => $row['summary'],
			'metrics' => $metrics,
			'url'     => $row['case_url'],
		];
	}
}
