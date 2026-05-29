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
			'email'         => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_email' ],
			'name'          => [ 'type' => 'string', 'required' => false, 'sanitize_callback' => 'sanitize_text_field' ],
			'send_pdf'      => [ 'type' => 'boolean', 'required' => false, 'default' => false ],
		];
	}

	public static function handle( \WP_REST_Request $req ): \WP_REST_Response {
		$inputs = [
			'project_type'  => $req->get_param( 'project_type' ),
			'platforms'     => $req->get_param( 'platforms' ),
			'feature_count' => $req->get_param( 'feature_count' ),
		];

		$estimate = EstimateCalculator::run( $inputs );

		// Optional: queue a PDF email if visitor provided one.
		$pdf_queued = false;
		if ( $req->get_param( 'send_pdf' ) && is_email( $req->get_param( 'email' ) ) ) {
			\Emizentech\AiAssistant\Integration\EstimatePdf::queue( $estimate, array_merge( $inputs, [
				'email' => $req->get_param( 'email' ),
				'name'  => (string) $req->get_param( 'name' ),
			] ) );
			$pdf_queued = true;

			// Also fire lead webhook + log analytics event.
			\Emizentech\AiAssistant\Integration\WebhookSender::dispatch_event( 'estimator_completed', array_merge( $inputs, [
				'email'    => $req->get_param( 'email' ),
				'name'     => (string) $req->get_param( 'name' ),
				'estimate' => $estimate,
			] ) );
			\Emizentech\AiAssistant\Analytics\EventLogger::log( 'estimator_completed', [
				'project_type' => $inputs['project_type'],
				'platforms'    => $inputs['platforms'],
				'feature_count'=> $inputs['feature_count'],
				'low'          => (int) $estimate['low'],
				'high'         => (int) $estimate['high'],
			] );
		}

		return new \WP_REST_Response( array_merge( $estimate, [ 'pdf_queued' => $pdf_queued ] ), 200 );
	}
}
