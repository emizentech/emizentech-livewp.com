<?php
/**
 * Deterministic state machine for the Lead Qualifier flow.
 * Replaces the static "Get a Quote" form with a 4-step conversational capture.
 *
 * @package Emizentech\AiAssistant
 */

declare(strict_types=1);

namespace Emizentech\AiAssistant\Flow;

final class LeadQualifier {

	private const STEPS = [
		'name'   => [ 'label' => 'name',  'next' => 'email',  'prompt_key' => 'qualifier_q_email' ],
		'email'  => [ 'label' => 'email', 'next' => 'budget', 'prompt_key' => 'qualifier_q_budget' ],
		'budget' => [ 'label' => 'budget','next' => 'scope',  'prompt_key' => 'qualifier_q_scope' ],
		'scope'  => [ 'label' => 'scope', 'next' => 'done',   'prompt_key' => 'qualifier_complete' ],
	];

	/**
	 * Process one step of the qualifier flow. Returns the next-step instruction
	 * the frontend should render (next question, or completion signal).
	 *
	 * The frontend holds the lead state in sessionStorage; this endpoint exists
	 * so we can server-side-validate input and reshape the response without
	 * client trust.
	 *
	 * @param string $current_step One of 'name'|'email'|'budget'|'scope'.
	 * @param array  $data         Accumulated lead fields so far.
	 */
	public static function process( string $current_step, array $data ): array {
		if ( ! isset( self::STEPS[ $current_step ] ) ) {
			return [
				'ok'      => false,
				'code'    => 'EMI-1004',
				'message' => __( 'Unknown qualifier step', 'emi-ai-assistant' ),
			];
		}

		// Validate the just-submitted value (if any).
		$validation = self::validate( $current_step, $data );
		if ( ! $validation['ok'] ) {
			return [
				'ok'      => false,
				'step'    => $current_step,
				'message' => $validation['message'],
				'retry'   => true,
			];
		}

		$next = self::STEPS[ $current_step ]['next'];

		if ( $next === 'done' ) {
			return [
				'ok'           => true,
				'step'         => 'done',
				'complete'     => true,
				'capture_lead' => true,
				'data'         => $data,
			];
		}

		// Build the next-step UI payload.
		$payload = [
			'ok'   => true,
			'step' => $next,
		];

		switch ( $next ) {
			case 'email':
				$payload['prompt']   = sprintf(
					/* translators: %s: visitor name */
					__( 'Nice to meet you, <b>%s</b>! 👋 What\'s your <b>work email</b>?', 'emi-ai-assistant' ),
					esc_html( $data['name'] ?? '' )
				);
				$payload['input']    = 'text';
				$payload['placeholder'] = 'you@company.com';
				break;
			case 'budget':
				$payload['prompt'] = __( 'Thanks! Roughly <b>what budget</b> are you working with?', 'emi-ai-assistant' );
				$payload['chips']  = [ '< $10k', '$10k – $50k', '$50k – $150k', '$150k+' ];
				break;
			case 'scope':
				$payload['prompt']      = __( 'Got it. <b>What are you building?</b> (1 line is fine)', 'emi-ai-assistant' );
				$payload['input']       = 'textarea';
				$payload['placeholder'] = __( 'e.g., A native iOS app for property listings', 'emi-ai-assistant' );
				break;
		}

		return $payload;
	}

	/**
	 * Per-step server-side validation. Mirror of the client-side checks.
	 */
	private static function validate( string $step, array $data ): array {
		switch ( $step ) {
			case 'name':
				$name = trim( (string) ( $data['name'] ?? '' ) );
				if ( strlen( $name ) < 2 || strlen( $name ) > 80 ) {
					return [ 'ok' => false, 'message' => __( "Please share your full name.", 'emi-ai-assistant' ) ];
				}
				break;
			case 'email':
				if ( ! is_email( $data['email'] ?? '' ) ) {
					return [ 'ok' => false, 'message' => __( "That email doesn't look right — could you double-check?", 'emi-ai-assistant' ) ];
				}
				break;
			case 'budget':
				$allowed = [ '< $10k', '$10k – $50k', '$50k – $150k', '$150k+' ];
				if ( ! in_array( $data['budget'] ?? '', $allowed, true ) ) {
					return [ 'ok' => false, 'message' => __( 'Please pick a budget band.', 'emi-ai-assistant' ) ];
				}
				break;
			case 'scope':
				$scope = trim( (string) ( $data['scope'] ?? '' ) );
				if ( strlen( $scope ) < 3 || strlen( $scope ) > 1000 ) {
					return [ 'ok' => false, 'message' => __( 'A one-line description is fine.', 'emi-ai-assistant' ) ];
				}
				break;
		}
		return [ 'ok' => true ];
	}
}
