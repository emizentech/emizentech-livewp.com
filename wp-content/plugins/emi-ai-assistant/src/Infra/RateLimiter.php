<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Infra;

/**
 * Transient-backed sliding-window rate limiter.
 */
final class RateLimiter {

	/**
	 * @param string $key       Bucket identifier (e.g. "lead:1.2.3.4").
	 * @param int    $limit     Max requests in the window.
	 * @param int    $window_s  Window length in seconds.
	 */
	public static function allow( string $key, int $limit, int $window_s ): bool {
		$bucket = 'emi_ai_rl_' . md5( $key );
		$now    = time();

		$entries = (array) get_transient( $bucket );
		$entries = array_filter( $entries, static fn( $t ) => $t > $now - $window_s );

		if ( count( $entries ) >= $limit ) {
			return false;
		}

		$entries[] = $now;
		set_transient( $bucket, $entries, $window_s );
		return true;
	}
}
