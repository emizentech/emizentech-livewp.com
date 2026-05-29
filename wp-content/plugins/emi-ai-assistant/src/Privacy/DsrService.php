<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Privacy;

use Emizentech\AiAssistant\Infra\Logger;

/**
 * GDPR / DPDP Data Subject Request handler.
 *
 * Since the plugin does NOT store leads / messages / sessions (those go
 * directly to external webhook + email), the only data we ever persist
 * about a visitor is rows in wp_emi_events keyed by an opaque visitor_id
 * (UUID generated client-side; IP is stored hashed).
 *
 * DSR operations therefore reduce to:
 *   - lookup by visitor_id (NOT by email — we don't store emails)
 *   - delete or anonymize the matching rows
 *   - emit a signed receipt PDF/JSON for audit
 */
final class DsrService {

	public const ACTION_DELETE    = 'delete';
	public const ACTION_ANONYMIZE = 'anonymize';

	public static function lookup_by_visitor( string $visitor_id ): array {
		global $wpdb;
		$rows = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT id, event, props, created_at FROM {$wpdb->prefix}emi_events WHERE visitor_id = %s ORDER BY id DESC LIMIT 200",
				$visitor_id
			),
			ARRAY_A
		);
		return [
			'visitor_id' => $visitor_id,
			'count'      => count( $rows ),
			'events'     => $rows,
		];
	}

	public static function process( string $visitor_id, string $action ): array {
		if ( ! in_array( $action, [ self::ACTION_DELETE, self::ACTION_ANONYMIZE ], true ) ) {
			return [ 'ok' => false, 'message' => 'Invalid action' ];
		}

		global $wpdb;
		$table = $wpdb->prefix . 'emi_events';

		$affected = 0;
		if ( $action === self::ACTION_DELETE ) {
			$affected = (int) $wpdb->query(
				$wpdb->prepare( "DELETE FROM {$table} WHERE visitor_id = %s", $visitor_id )
			);
		} else {
			$affected = (int) $wpdb->query(
				$wpdb->prepare(
					"UPDATE {$table} SET visitor_id = NULL, ip_hash = NULL WHERE visitor_id = %s",
					$visitor_id
				)
			);
		}

		$receipt = self::make_receipt( $visitor_id, $action, $affected );

		Logger::info( 'dsr.processed', [
			'visitor_id' => $visitor_id,
			'action'     => $action,
			'affected'   => $affected,
		] );

		// Persist the receipt JSON for audit (no PII contained).
		$upload = wp_upload_dir();
		$dir    = trailingslashit( $upload['basedir'] ) . 'emi-ai/dsr-receipts';
		if ( ! is_dir( $dir ) ) {
			wp_mkdir_p( $dir );
			@file_put_contents( $dir . '/.htaccess', "Deny from all\n" );
		}
		$file = $dir . '/receipt-' . gmdate( 'Ymd-His' ) . '-' . substr( $receipt['hash'], 0, 8 ) . '.json';
		@file_put_contents( $file, wp_json_encode( $receipt, JSON_PRETTY_PRINT ) );

		return [
			'ok'           => true,
			'affected'     => $affected,
			'action'       => $action,
			'receipt'      => $receipt,
			'receipt_path' => $file,
		];
	}

	private static function make_receipt( string $visitor_id, string $action, int $affected ): array {
		$body = [
			'visitor_id'      => $visitor_id,
			'action'          => $action,
			'rows_affected'   => $affected,
			'processed_at'    => gmdate( 'c' ),
			'site_url'        => home_url(),
			'plugin_version'  => EMI_AI_VERSION,
		];
		// Sign with a salt — admin can verify integrity later.
		$salt = wp_salt( 'secure_auth' );
		$body['hash'] = hash( 'sha256', wp_json_encode( $body ) . $salt );
		return $body;
	}
}
