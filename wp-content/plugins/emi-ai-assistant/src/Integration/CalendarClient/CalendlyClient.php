<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration\CalendarClient;

use Emizentech\AiAssistant\Infra\Logger;

final class CalendlyClient implements CalendarClientInterface {

	public function __construct(
		private string $personal_access_token,
		private string $event_type_uri
	) {}

	public function available_slots( string $timezone ): array {
		// For v1 we generate 4 next-business-day slots locally and expose them
		// for booking; Calendly API v2 availability requires an additional call
		// per slot which is expensive. The booking endpoint validates the slot.
		$slots = [];
		try {
			$tz  = new \DateTimeZone( $timezone );
			$now = new \DateTimeImmutable( 'now', $tz );

			$candidates = [
				[ 'days' => 1, 'hour' => 11, 'min' => 0 ],
				[ 'days' => 1, 'hour' => 15, 'min' => 0 ],
				[ 'days' => 2, 'hour' => 10, 'min' => 0 ],
				[ 'days' => 2, 'hour' => 16, 'min' => 30 ],
			];

			foreach ( $candidates as $c ) {
				$dt    = $now->modify( "+{$c['days']} day" )->setTime( $c['hour'], $c['min'] );
				$label = $dt->format( 'D' );
				$slots[] = [
					'label_day'  => $label,
					'label_time' => $dt->format( 'g:i A' ) . ' ' . $dt->format( 'T' ),
					'iso'        => $dt->format( 'c' ),
				];
			}
		} catch ( \Throwable $e ) {
			Logger::warning( 'calendly.slots.error', [ 'msg' => $e->getMessage() ] );
		}
		return $slots;
	}

	public function book( string $email, string $slot_iso, string $topic = '' ): array {
		if ( ! $this->personal_access_token || ! $this->event_type_uri ) {
			return [ 'ok' => false, 'error' => 'Calendly not configured' ];
		}

		$resp = wp_remote_post( 'https://api.calendly.com/scheduled_events', [
			'timeout' => 15,
			'headers' => [
				'Authorization' => 'Bearer ' . $this->personal_access_token,
				'Content-Type'  => 'application/json',
			],
			'body'    => wp_json_encode( [
				'event_type' => $this->event_type_uri,
				'start_time' => $slot_iso,
				'invitee'    => [
					'email' => $email,
					'name'  => '',
					'questions_and_answers' => [
						[ 'question' => 'Topic', 'answer' => $topic ],
					],
				],
			] ),
		] );

		if ( is_wp_error( $resp ) ) {
			return [ 'ok' => false, 'error' => $resp->get_error_message() ];
		}

		$code = (int) wp_remote_retrieve_response_code( $resp );
		$body = json_decode( (string) wp_remote_retrieve_body( $resp ), true ) ?: [];

		if ( $code >= 200 && $code < 300 ) {
			return [
				'ok'          => true,
				'booking_id'  => (string) ( $body['resource']['uri'] ?? '' ),
				'meeting_url' => (string) ( $body['resource']['location']['join_url'] ?? '' ),
			];
		}

		return [ 'ok' => false, 'error' => "Calendly returned HTTP {$code}" ];
	}
}
