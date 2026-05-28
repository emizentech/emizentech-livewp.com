<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Flow\EstimateCalculator;

final class EstimateController {

	public static function args(): array {
		return [
			'project_type'  => [ 'type' => 'string', 'required' => true, 'sanitize_callback' => 'sanitize_key' ],
			'platforms'     => [ 'type' => 'string', 'required' => true, 'sanitize_callback' => 'sanitize_key' ],
			'feature_count' => [ 'type' => 'string', 'required' => true, 'sanitize_callback' => 'sanitize_key' ],
		];
	}

	public static function handle( \WP_REST_Request $req ): \WP_REST_Response {
		$result = EstimateCalculator::run( [
			'project_type'  => $req->get_param( 'project_type' ),
			'platforms'     => $req->get_param( 'platforms' ),
			'feature_count' => $req->get_param( 'feature_count' ),
		] );
		return new \WP_REST_Response( $result, 200 );
	}
}
