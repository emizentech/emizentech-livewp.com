<?php
/**
 * REST endpoint registration. Namespace: emi-ai/v1.
 *
 * @package Emizentech\AiAssistant
 */

declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

final class Router {

	public const NS = 'emi-ai/v1';

	public static function register(): void {
		register_rest_route(
			self::NS,
			'/recommend',
			[
				'methods'             => 'POST',
				'callback'            => [ RecommendController::class, 'handle' ],
				'permission_callback' => '__return_true',
				'args'                => RecommendController::args(),
			]
		);

		register_rest_route(
			self::NS,
			'/estimate',
			[
				'methods'             => 'POST',
				'callback'            => [ EstimateController::class, 'handle' ],
				'permission_callback' => '__return_true',
				'args'                => EstimateController::args(),
			]
		);

		register_rest_route(
			self::NS,
			'/cases/search',
			[
				'methods'             => 'GET',
				'callback'            => [ CasesController::class, 'search' ],
				'permission_callback' => '__return_true',
				'args'                => CasesController::args(),
			]
		);

		register_rest_route(
			self::NS,
			'/qualify',
			[
				'methods'             => 'POST',
				'callback'            => [ QualifyController::class, 'handle' ],
				'permission_callback' => '__return_true',
				'args'                => QualifyController::args(),
			]
		);

		register_rest_route(
			self::NS,
			'/lead',
			[
				'methods'             => 'POST',
				'callback'            => [ LeadController::class, 'capture' ],
				'permission_callback' => '__return_true',
				'args'                => LeadController::args(),
			]
		);

		register_rest_route(
			self::NS,
			'/schedule/slots',
			[
				'methods'             => 'POST',
				'callback'            => [ ScheduleController::class, 'slots' ],
				'permission_callback' => '__return_true',
			]
		);

		register_rest_route(
			self::NS,
			'/schedule/book',
			[
				'methods'             => 'POST',
				'callback'            => [ ScheduleController::class, 'book' ],
				'permission_callback' => '__return_true',
			]
		);

		register_rest_route(
			self::NS,
			'/i18n/(?P<lang>[a-z]{2})',
			[
				'methods'             => 'GET',
				'callback'            => [ I18nController::class, 'get' ],
				'permission_callback' => '__return_true',
			]
		);

		register_rest_route(
			self::NS,
			'/event',
			[
				'methods'             => 'POST',
				'callback'            => [ EventController::class, 'capture' ],
				'permission_callback' => '__return_true',
			]
		);

		// Exit-intent magnet pickup + capture.
		register_rest_route(
			self::NS,
			'/exit/magnet',
			[
				'methods'             => 'GET',
				'callback'            => [ ExitController::class, 'magnet' ],
				'permission_callback' => '__return_true',
			]
		);
		register_rest_route(
			self::NS,
			'/exit/capture',
			[
				'methods'             => 'POST',
				'callback'            => [ ExitController::class, 'capture' ],
				'permission_callback' => '__return_true',
			]
		);

		// GDPR DSR (admin-only).
		register_rest_route(
			self::NS,
			'/dsr/delete',
			[
				'methods'             => 'POST',
				'callback'            => [ DsrController::class, 'delete' ],
				'permission_callback' => static fn() => current_user_can( 'manage_emi_ai' ),
			]
		);
		register_rest_route(
			self::NS,
			'/dsr/lookup',
			[
				'methods'             => 'GET',
				'callback'            => [ DsrController::class, 'lookup' ],
				'permission_callback' => static fn() => current_user_can( 'manage_emi_ai' ),
			]
		);

		register_rest_route(
			self::NS,
			'/health',
			[
				'methods'             => 'GET',
				'callback'            => [ HealthController::class, 'check' ],
				'permission_callback' => '__return_true',
			]
		);

		// Authenticated admin routes.
		register_rest_route(
			self::NS,
			'/diagnostics',
			[
				'methods'             => 'GET',
				'callback'            => [ HealthController::class, 'diagnostics' ],
				'permission_callback' => static fn() => current_user_can( 'manage_emi_ai' ),
			]
		);

		register_rest_route(
			self::NS,
			'/webhook/(?P<id>[a-z0-9_-]+)/test',
			[
				'methods'             => 'POST',
				'callback'            => [ \Emizentech\AiAssistant\Integration\WebhookSender::class, 'rest_test' ],
				'permission_callback' => static fn() => current_user_can( 'manage_emi_ai' ),
			]
		);
	}

	/**
	 * Build a standard nonce/sanitisation wrapper for visitor REST calls.
	 */
	public static function check_nonce( \WP_REST_Request $req ): bool {
		$nonce = $req->get_header( 'X-WP-Nonce' );
		if ( ! $nonce ) {
			$nonce = (string) $req->get_param( '_wpnonce' );
		}
		return (bool) wp_verify_nonce( $nonce, 'wp_rest' );
	}
}
