<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Flow\CaseStudyFinder;

final class CasesController {

	public static function args(): array {
		return [
			'q'        => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'industry' => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'region'   => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'tech'     => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'limit'    => [ 'type' => 'integer', 'required' => false, 'default' => 3 ],
		];
	}

	public static function search( \WP_REST_Request $req ): \WP_REST_Response {
		$cases = CaseStudyFinder::search( [
			'query'    => (string) $req->get_param( 'q' ),
			'industry' => (string) $req->get_param( 'industry' ),
			'region'   => (string) $req->get_param( 'region' ),
			'tech'     => (string) $req->get_param( 'tech' ),
			'limit'    => max( 1, min( 10, (int) $req->get_param( 'limit' ) ) ),
		] );
		return new \WP_REST_Response( [ 'count' => count( $cases ), 'cases' => $cases ], 200 );
	}
}
