<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration\CalendarClient;

/**
 * Fallback "no calendar configured" client — generates placeholder slots and
 * delivers booking requests via the standard WebhookSender instead of a
 * calendar API.
 */
final class NullClient implements CalendarClientInterface {

	public function available_slots( string $timezone ): array {
		try {
			$tz  = new \DateTimeZone( $timezone ?: 'UTC' );
			$now = new \DateTimeImmutable( 'now', $tz );
		} catch ( \Throwable $e ) {
			$now = new \DateTimeImmutable();
			$tz  = new \DateTimeZone( 'UTC' );
		}

		$slots      = [];
		$candidates = [
			[ 'days' => 1, 'hour' => 11, 'min' => 0  ],
			[ 'days' => 1, 'hour' => 15, 'min' => 0  ],
			[ 'days' => 2, 'hour' => 10, 'min' => 0  ],
			[ 'days' => 2, 'hour' => 16, 'min' => 30 ],
		];
		foreach ( $candidates as $c ) {
			$dt = $now->modify( "+{$c['days']} day" )->setTime( $c['hour'], $c['min'] );
			$slots[] = [
				'label_day'  => $dt->format( 'D' ),
				'label_time' => $dt->format( 'g:i A T' ),
				'iso'        => $dt->format( 'c' ),
			];
		}
		return $slots;
	}

	public function book( string $email, string $slot_iso, string $topic = '' ): array {
		// "Booking" here just emits a webhook event — the sales team handles manually.
		return [
			'ok'          => true,
			'booking_id'  => wp_generate_uuid4(),
			'meeting_url' => '',
			'note'        => 'Manual confirmation — no calendar provider configured',
		];
	}
}
