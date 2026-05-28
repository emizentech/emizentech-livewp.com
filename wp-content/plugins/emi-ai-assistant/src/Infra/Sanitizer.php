<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Infra;

final class Sanitizer {

	public static function textarea( $value ): string {
		return sanitize_textarea_field( wp_unslash( (string) $value ) );
	}

	public static function hex_color( $value ): string {
		$value = trim( (string) $value );
		if ( preg_match( '/^#?([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $value, $m ) ) {
			return '#' . ltrim( $m[1], '#' );
		}
		return '';
	}

	public static function url_glob_list( $value ): string {
		$lines = preg_split( '/\r?\n/', (string) $value ) ?: [];
		$out   = [];
		foreach ( $lines as $line ) {
			$line = trim( $line );
			if ( $line === '' ) continue;
			$out[] = preg_replace( '~[^a-zA-Z0-9_/\-\*\?\.:#%&=]~', '', $line );
		}
		return implode( "\n", $out );
	}
}
