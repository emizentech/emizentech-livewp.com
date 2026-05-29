<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Privacy\DsrService;

final class DsrController {

	public static function lookup( \WP_REST_Request $req ): \WP_REST_Response {
		$visitor_id = sanitize_text_field( (string) $req->get_param( 'visitor_id' ) );
		if ( $visitor_id === '' ) {
			return new \WP_REST_Response( [ 'ok' => false, 'message' => 'visitor_id required' ], 400 );
		}
		return new \WP_REST_Response( DsrService::lookup_by_visitor( $visitor_id ), 200 );
	}

	public static function delete( \WP_REST_Request $req ): \WP_REST_Response {
		$visitor_id = sanitize_text_field( (string) $req->get_param( 'visitor_id' ) );
		$action     = sanitize_key( (string) ( $req->get_param( 'action' ) ?: 'delete' ) );
		if ( $visitor_id === '' ) {
			return new \WP_REST_Response( [ 'ok' => false, 'message' => 'visitor_id required' ], 400 );
		}
		return new \WP_REST_Response( DsrService::process( $visitor_id, $action ), 200 );
	}
}
