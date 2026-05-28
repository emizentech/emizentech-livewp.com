<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Frontend;

final class VisibilityRules {

	public static function is_allowed_on_current_request(): bool {
		$settings = (array) get_option( 'emi_ai_settings_visibility', [] );
		$current  = self::current_path();

		// Exclude patterns first — beat all includes.
		$excludes = self::pattern_lines( (string) ( $settings['url_exclude'] ?? '' ) );
		foreach ( $excludes as $pattern ) {
			if ( self::match( $current, $pattern ) ) {
				return false;
			}
		}

		// Logged-in behavior.
		if ( is_user_logged_in() ) {
			$behavior = $settings['logged_in_behavior'] ?? 'show';
			if ( $behavior === 'hide' ) return false;
		}

		// Show-on filter.
		$show_on = (string) ( $settings['show_on'] ?? 'all' );
		if ( $show_on !== 'all' ) {
			if ( $show_on === 'pages' && ! is_page() ) return false;
			if ( $show_on === 'posts' && ! is_singular( 'post' ) ) return false;
		}

		// Include patterns (if any are set, restrict to matches).
		$includes = self::pattern_lines( (string) ( $settings['url_include'] ?? '' ) );
		if ( ! empty( $includes ) ) {
			foreach ( $includes as $pattern ) {
				if ( self::match( $current, $pattern ) ) {
					return apply_filters( 'emi_ai_should_render', true, $current );
				}
			}
			return apply_filters( 'emi_ai_should_render', false, $current );
		}

		return apply_filters( 'emi_ai_should_render', true, $current );
	}

	private static function current_path(): string {
		return $_SERVER['REQUEST_URI'] ?? '/';
	}

	private static function pattern_lines( string $blob ): array {
		$out = [];
		foreach ( preg_split( '/\r?\n/', $blob ) ?: [] as $line ) {
			$line = trim( $line );
			if ( $line ) $out[] = $line;
		}
		return $out;
	}

	private static function match( string $haystack, string $pattern ): bool {
		// Glob support: *, ? — convert to a regex.
		if ( strpos( $pattern, '*' ) === false && strpos( $pattern, '?' ) === false ) {
			return stripos( $haystack, $pattern ) !== false;
		}
		$re = '#' . str_replace( [ '\\*', '\\?' ], [ '.*', '.' ], preg_quote( $pattern, '#' ) ) . '#i';
		return (bool) preg_match( $re, $haystack );
	}
}
