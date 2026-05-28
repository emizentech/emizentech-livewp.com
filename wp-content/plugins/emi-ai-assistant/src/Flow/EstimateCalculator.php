<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Flow;

/**
 * Deterministic cost-estimate formula. Admin tunes constants via Flow Editor.
 * Per playbook §10.3.
 */
final class EstimateCalculator {

	private const BASE_DEFAULTS = [
		'food_delivery' => 45000,
		'ecommerce'     => 30000,
		'saas'          => 40000,
		'mobile_mvp'    => 25000,
		'custom_crm'    => 50000,
		'default'       => 30000,
	];

	private const PLATFORM_MULT_DEFAULTS = [
		'ios_android'      => 1.0,
		'web_only'         => 0.75,
		'ios_android_web'  => 1.35,
	];

	private const SCOPE_MULT_DEFAULTS = [
		'mvp'      => 1.0,
		'standard' => 1.6,
		'full'     => 2.3,
	];

	public static function run( array $in ): array {
		$constants = self::resolve_constants();

		$type     = self::norm_project_type( $in['project_type'] ?? '' );
		$platform = self::norm_platform( $in['platforms'] ?? '' );
		$scope    = self::norm_scope( $in['feature_count'] ?? '' );

		$base       = $constants['base'][ $type ]      ?? $constants['base']['default'];
		$plat_mult  = $constants['platform'][ $platform ] ?? 1.0;
		$scope_mult = $constants['scope'][ $scope ]      ?? 1.0;

		$low   = (int) ( round( ( $base * $plat_mult * $scope_mult ) / 1000 ) * 1000 );
		$high  = (int) ( round( $low * 1.55 / 1000 ) * 1000 );
		$weeks = (int) round( 8 * $plat_mult * $scope_mult );
		$team  = $scope_mult < 1.2 ? 3 : ( $scope_mult < 2 ? 5 : 7 );

		return [
			'low'      => $low,
			'high'     => $high,
			'weeks'    => $weeks,
			'team'     => $team,
			'currency' => 'USD',
		];
	}

	public static function resolve_constants(): array {
		$override = get_option( 'emi_ai_estimator_constants', [] );
		return [
			'base'     => $override['base']     ?? self::BASE_DEFAULTS,
			'platform' => $override['platform'] ?? self::PLATFORM_MULT_DEFAULTS,
			'scope'    => $override['scope']    ?? self::SCOPE_MULT_DEFAULTS,
		];
	}

	private static function norm_project_type( string $t ): string {
		$map = [
			'food delivery app' => 'food_delivery',
			'food_delivery'     => 'food_delivery',
			'e-commerce store'  => 'ecommerce',
			'ecommerce'         => 'ecommerce',
			'saas dashboard'    => 'saas',
			'saas'              => 'saas',
			'mobile app mvp'    => 'mobile_mvp',
			'mobile_mvp'        => 'mobile_mvp',
			'custom crm'        => 'custom_crm',
			'custom_crm'        => 'custom_crm',
		];
		$key = strtolower( str_replace( '-', '_', $t ) );
		return $map[ $key ] ?? 'default';
	}

	private static function norm_platform( string $p ): string {
		$map = [
			'ios + android'        => 'ios_android',
			'ios_android'          => 'ios_android',
			'web only'             => 'web_only',
			'web_only'             => 'web_only',
			'ios + android + web'  => 'ios_android_web',
			'ios_android_web'      => 'ios_android_web',
			'all three'            => 'ios_android_web',
		];
		$key = strtolower( str_replace( '-', '_', $p ) );
		return $map[ $key ] ?? 'ios_android';
	}

	private static function norm_scope( string $s ): string {
		if ( stripos( $s, 'mvp' ) !== false ) return 'mvp';
		if ( stripos( $s, 'standard' ) !== false ) return 'standard';
		if ( stripos( $s, 'full' ) !== false ) return 'full';
		return 'mvp';
	}
}
