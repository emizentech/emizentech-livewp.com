<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Privacy;

/**
 * Strip credit-card numbers, SSNs, and other obviously sensitive patterns
 * from free-text inputs before they're stored, emailed, or pushed to
 * webhooks. Phase 3 expands the regex pack to cover EU + UK + India
 * national IDs commonly leaked in chat sessions.
 */
final class PiiScrubber {

	private const PATTERNS = [
		// Credit cards (13–19 digits with optional space/hyphen separators).
		'/\b(?:\d[ -]?){13,19}\b/'                  => '[REDACTED-CC]',

		// US SSN.
		'/\b\d{3}-\d{2}-\d{4}\b/'                   => '[REDACTED-SSN]',

		// Indian Aadhaar (4-4-4 with spaces).
		'/\b\d{4}\s\d{4}\s\d{4}\b/'                 => '[REDACTED-AADHAAR]',

		// Indian PAN (5 letters + 4 digits + letter).
		'/\b[A-Z]{5}\d{4}[A-Z]\b/'                  => '[REDACTED-PAN]',

		// UK National Insurance (AB123456C).
		'/\b[A-CEGHJ-PR-TW-Z][A-CEGHJ-NPR-TW-Z]\d{6}[A-DFM]\b/' => '[REDACTED-NI]',

		// German Steuer-ID (11 digits).
		'/\b\d{2}\s?\d{3}\s?\d{3}\s?\d{3}\b/'       => '[REDACTED-STEUERID]',

		// IBAN (broad: 2 letters + up to 32 alnum, no spaces).
		'/\b[A-Z]{2}\d{2}[A-Z0-9]{10,30}\b/'        => '[REDACTED-IBAN]',

		// EU VAT (broadly: 2 letters + 8–12 digits).
		'/\b[A-Z]{2}\d{8,12}\b/'                    => '[REDACTED-VAT]',
	];

	public static function scrub( string $text ): string {
		if ( $text === '' ) {
			return '';
		}
		foreach ( self::PATTERNS as $pattern => $replacement ) {
			$text = (string) preg_replace( $pattern, $replacement, $text );
		}
		return $text;
	}

	/**
	 * For tests / introspection. Returns the names of patterns currently active.
	 */
	public static function active_patterns(): array {
		return [ 'CC', 'SSN', 'AADHAAR', 'PAN', 'NI', 'STEUERID', 'IBAN', 'VAT' ];
	}
}
