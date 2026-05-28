<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration\CalendarClient;

interface CalendarClientInterface {

	/**
	 * Return 4-6 available slots in the visitor's timezone.
	 *
	 * @return array<int, array{label_day:string,label_time:string,iso:string}>
	 */
	public function available_slots( string $timezone ): array;

	/**
	 * Book a slot. Returns [ok, booking_id, meeting_url, error].
	 *
	 * @return array{ok:bool,booking_id?:string,meeting_url?:string,error?:string}
	 */
	public function book( string $email, string $slot_iso, string $topic = '' ): array;
}
