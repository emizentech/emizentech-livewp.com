<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Infra;

/**
 * Cache abstraction: autodetects WP object cache (memcached/redis/etc.) and
 * falls back to transients. No Redis-specific code (Atomic does not support it).
 */
final class Cache {

	private const PREFIX = 'emi_ai_';

	public static function get( string $key ): mixed {
		$found = false;
		$value = wp_cache_get( self::PREFIX . $key, 'emi_ai', false, $found );
		if ( $found ) {
			return $value;
		}
		$transient = get_transient( self::PREFIX . $key );
		return $transient === false ? null : $transient;
	}

	public static function set( string $key, mixed $value, int $ttl = 300 ): void {
		wp_cache_set( self::PREFIX . $key, $value, 'emi_ai', $ttl );
		set_transient( self::PREFIX . $key, $value, $ttl );
	}

	public static function delete( string $key ): void {
		wp_cache_delete( self::PREFIX . $key, 'emi_ai' );
		delete_transient( self::PREFIX . $key );
	}

	public static function flush_group(): void {
		wp_cache_flush_group( 'emi_ai' );
	}

	public static function active_backend(): string {
		if ( wp_using_ext_object_cache() ) {
			return 'object_cache (' . ( defined( 'WP_CACHE_KEY_SALT' ) ? 'persistent' : 'unknown' ) . ')';
		}
		return 'transients';
	}
}
