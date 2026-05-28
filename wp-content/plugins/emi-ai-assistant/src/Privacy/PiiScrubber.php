<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Privacy;

/**
 * Strip credit-card numbers, SSNs, and other obviously sensitive patterns from
 * free-text inputs before they're stored, emailed or pushed to webhooks.
 */
final class PiiScrubber {

	public static function scrub( string $text ): string {
		if ( $text === '' ) {
			return '';
		}

		// Credit-card-ish numbers (13-19 digits with optional separators).
		$text = (string) preg_replace( '/\b(?:\d[ -]?){13,19}\b/', '[REDACTED-CC]', $text );

		// US SSN.
		$text = (string) preg_replace( '/\b\d{3}-\d{2}-\d{4}\b/', '[REDACTED-SSN]', $text );

		// Aadhaar-ish 12-digit Indian ID.
		$text = (string) preg_replace( '/\b\d{4}\s\d{4}\s\d{4}\b/', '[REDACTED-AADHAAR]', $text );

		return $text;
	}
}
