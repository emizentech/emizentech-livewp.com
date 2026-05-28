<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Infra;

/**
 * Lightweight logger. Falls back to error_log() when Monolog isn't autoloaded
 * (e.g., during dev before composer install).
 */
final class Logger {

	private const LEVEL_RANK = [ 'debug' => 10, 'info' => 20, 'warning' => 30, 'error' => 40 ];

	public static function debug( string $event, array $context = [] ): void   { self::write( 'debug',   $event, $context ); }
	public static function info( string $event, array $context = [] ): void    { self::write( 'info',    $event, $context ); }
	public static function warning( string $event, array $context = [] ): void { self::write( 'warning', $event, $context ); }
	public static function error( string $event, array $context = [] ): void   { self::write( 'error',   $event, $context ); }

	private static function write( string $level, string $event, array $context ): void {
		$settings  = (array) get_option( 'emi_ai_settings_advanced', [] );
		$min_level = (string) ( $settings['debug_log_level'] ?? 'warning' );

		if ( ( self::LEVEL_RANK[ $level ] ?? 0 ) < ( self::LEVEL_RANK[ $min_level ] ?? 30 ) ) {
			return;
		}

		$line = sprintf(
			'[%s] [emi-ai] [%s] %s %s',
			gmdate( 'c' ),
			strtoupper( $level ),
			$event,
			$context ? wp_json_encode( $context ) : ''
		);

		// Try to write to wp-content/uploads/emi-ai-logs/
		$upload = wp_upload_dir();
		$dir    = trailingslashit( $upload['basedir'] ) . 'emi-ai-logs';
		if ( ! is_dir( $dir ) ) {
			@mkdir( $dir, 0755, true );
			@file_put_contents( $dir . '/.htaccess', "Deny from all\n" );
		}
		$file = $dir . '/' . gmdate( 'Y-m-d' ) . '.log';
		@file_put_contents( $file, $line . PHP_EOL, FILE_APPEND | LOCK_EX );

		// Mirror to PHP error log if debug.
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			error_log( $line );
		}
	}
}
