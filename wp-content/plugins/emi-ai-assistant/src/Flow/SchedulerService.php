<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Flow;

use Emizentech\AiAssistant\Analytics\GA4EventBus;
use Emizentech\AiAssistant\Integration\CalendarClient\CalendlyClient;
use Emizentech\AiAssistant\Integration\CalendarClient\NullClient;
use Emizentech\AiAssistant\Integration\WebhookSender;

final class SchedulerService {

	public static function available_slots( string $timezone, string $city = '' ): array {
		$tz = $timezone ?: self::city_to_timezone( $city ) ?: 'UTC';

		$client = self::client();
		$slots  = $client->available_slots( $tz );

		return [
			'ok'       => true,
			'timezone' => $tz,
			'city'     => $city,
			'slots'    => $slots,
		];
	}

	public static function book( array $args ): array {
		if ( ! is_email( $args['email'] ?? '' ) ) {
			return [ 'ok' => false, 'message' => __( 'Invalid email.', 'emi-ai-assistant' ) ];
		}

		$client = self::client();
		$result = $client->book(
			$args['email'],
			$args['slot_iso'] ?? '',
			$args['topic'] ?? __( 'Consultation with Emizentech', 'emi-ai-assistant' )
		);

		if ( $result['ok'] ?? false ) {
			WebhookSender::dispatch_event( 'meeting_booked', array_merge( $args, $result ) );
			GA4EventBus::send_server_event( 'meeting_booked', $args );
		}

		return $result;
	}

	private static function client(): \Emizentech\AiAssistant\Integration\CalendarClient\CalendarClientInterface {
		$settings = (array) get_option( 'emi_ai_integrations', [] );
		$cal      = (array) ( $settings['calendar'] ?? [] );
		$provider = $cal['provider'] ?? 'none';

		if ( 'calendly' === $provider && ! empty( $cal['calendly_token'] ) ) {
			return new CalendlyClient( $cal['calendly_token'], $cal['calendly_event_type'] ?? '' );
		}

		return new NullClient();
	}

	private static function city_to_timezone( string $city ): string {
		$map = [
			'Dubai'     => 'Asia/Dubai',
			'London'    => 'Europe/London',
			'New York'  => 'America/New_York',
			'Singapore' => 'Asia/Singapore',
			'Mumbai'    => 'Asia/Kolkata',
			'Sydney'    => 'Australia/Sydney',
		];
		return $map[ $city ] ?? '';
	}
}
