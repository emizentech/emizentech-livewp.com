<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

use Emizentech\AiAssistant\Flow\SchedulerService;

final class ScheduleController {

	public static function slots( \WP_REST_Request $req ): \WP_REST_Response {
		$tz   = sanitize_text_field( (string) $req->get_param( 'timezone' ) );
		$city = sanitize_text_field( (string) $req->get_param( 'city' ) );

		$result = SchedulerService::available_slots( $tz, $city );
		return new \WP_REST_Response( $result, 200 );
	}

	public static function book( \WP_REST_Request $req ): \WP_REST_Response {
		$result = SchedulerService::book( [
			'email'     => sanitize_email( (string) $req->get_param( 'email' ) ),
			'slot_iso'  => sanitize_text_field( (string) $req->get_param( 'slot_iso' ) ),
			'name'      => sanitize_text_field( (string) $req->get_param( 'name' ) ),
			'topic'     => sanitize_text_field( (string) $req->get_param( 'topic' ) ),
		] );
		return new \WP_REST_Response( $result, $result['ok'] ? 200 : 400 );
	}
}
