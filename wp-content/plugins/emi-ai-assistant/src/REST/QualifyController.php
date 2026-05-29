<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Flow\LeadQualifier;

final class QualifyController {

	public static function args(): array {
		return [
			'step' => [ 'type' => 'string', 'required' => true, 'sanitize_callback' => 'sanitize_key' ],
			'data' => [ 'type' => 'object', 'required' => false, 'default' => [] ],
		];
	}

	public static function handle( \WP_REST_Request $req ): \WP_REST_Response {
		$result = LeadQualifier::process(
			(string) $req->get_param( 'step' ),
			(array) $req->get_param( 'data' )
		);
		return new \WP_REST_Response( $result, $result['ok'] ? 200 : 400 );
	}
}
