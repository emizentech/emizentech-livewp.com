<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration;

/**
 * Mustache-lite template engine. Supports:
 *   {{key}}                — top-level lookup
 *   {{lead.email}}         — dot-path
 *   {{utm.source}}         — nested object
 *   {{settings.hubspot_token}}  — pulls from emi_ai_secret_vault (separate option for secrets)
 *   {{site.url}}, {{site.name}}, {{event.timestamp_iso}}
 *
 * Values are JSON-encoded-safe by default (so they fit cleanly inside JSON body templates).
 * Use {{{key}}} for raw, unescaped output.
 */
final class BodyTemplateEngine {

	public static function render( string $template, array $context ): string {
		if ( $template === '' || strpos( $template, '{{' ) === false ) {
			return $template;
		}

		$wrapped = self::wrap_context( $context );

		// Raw (triple-brace) replacements first.
		$template = preg_replace_callback(
			'/\{\{\{\s*([a-zA-Z0-9_.]+)\s*\}\}\}/',
			static fn( $m ) => (string) self::resolve( $wrapped, $m[1] ),
			$template
		);

		// Escaped (double-brace) replacements.
		$template = preg_replace_callback(
			'/\{\{\s*([a-zA-Z0-9_.]+)\s*\}\}/',
			static function ( $m ) use ( $wrapped ) {
				$val = self::resolve( $wrapped, $m[1] );
				return self::escape_for_json( $val );
			},
			$template
		);

		return $template;
	}

	private static function wrap_context( array $payload ): array {
		$secrets = (array) get_option( 'emi_ai_secret_vault', [] );
		return [
			'lead'     => $payload,
			'utm'      => (array) ( $payload['utm'] ?? [] ),
			'settings' => $secrets,
			'site'     => [
				'url'  => home_url( '/' ),
				'name' => get_bloginfo( 'name' ),
			],
			'event'    => [
				'name'          => $payload['event_name'] ?? 'lead_captured',
				'timestamp_iso' => gmdate( 'c' ),
				'unix'          => time(),
			],
		];
	}

	private static function resolve( array $ctx, string $path ): mixed {
		$node = $ctx;
		foreach ( explode( '.', $path ) as $seg ) {
			if ( is_array( $node ) && array_key_exists( $seg, $node ) ) {
				$node = $node[ $seg ];
			} else {
				return '';
			}
		}
		return $node;
	}

	private static function escape_for_json( mixed $value ): string {
		if ( is_scalar( $value ) ) {
			$encoded = json_encode( (string) $value );
			// Strip surrounding quotes from JSON-encoded string so the template
			// author controls whether to wrap with " in the surrounding JSON.
			return $encoded !== false ? trim( $encoded, '"' ) : '';
		}
		if ( is_array( $value ) || is_object( $value ) ) {
			return (string) json_encode( $value );
		}
		return '';
	}
}
