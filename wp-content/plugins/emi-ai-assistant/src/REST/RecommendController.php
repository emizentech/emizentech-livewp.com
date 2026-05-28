<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Flow\ServiceRecommender;

final class RecommendController {

	public static function args(): array {
		return [
			'service'  => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'industry' => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'stage'    => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
		];
	}

	public static function handle( \WP_REST_Request $req ): \WP_REST_Response {
		$result = ServiceRecommender::recommend(
			(string) $req->get_param( 'service' ),
			(string) $req->get_param( 'industry' ),
			(string) $req->get_param( 'stage' )
		);
		return new \WP_REST_Response( $result, 200 );
	}
}
