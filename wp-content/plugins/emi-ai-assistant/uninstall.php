<?php
/**
 * Uninstall handler — fires only when the user deletes the plugin from WP Admin.
 *
 * Respects the admin opt-in flag emi_ai_remove_data_on_uninstall (default: false).
 * Never silently destroys customer data.
 *
 * @package Emizentech\AiAssistant
 */

declare(strict_types=1);

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

$settings = get_option( 'emi_ai_settings_advanced', [] );
$remove   = ! empty( $settings['remove_data_on_uninstall'] );

if ( ! $remove ) {
	return;
}

global $wpdb;

// Drop plugin tables.
$tables = [ 'emi_services', 'emi_case_studies', 'emi_events' ];
foreach ( $tables as $name ) {
	$table = $wpdb->prefix . $name;
	$wpdb->query( "DROP TABLE IF EXISTS `{$table}`" ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
}

// Delete all plugin options.
$option_keys = $wpdb->get_col(
	"SELECT option_name FROM {$wpdb->options} WHERE option_name LIKE 'emi_ai_%'"
);
foreach ( $option_keys as $key ) {
	delete_option( $key );
}

// Delete all plugin transients.
$transient_keys = $wpdb->get_col(
	"SELECT option_name FROM {$wpdb->options} WHERE option_name LIKE '\\_transient\\_emi_ai_%' OR option_name LIKE '\\_transient\\_timeout\\_emi_ai_%'"
);
foreach ( $transient_keys as $key ) {
	delete_option( $key );
}

// Unschedule cron jobs.
foreach ( [ 'emi_ai_webhook_retry_cron', 'emi_ai_event_cleanup_cron' ] as $hook ) {
	$timestamp = wp_next_scheduled( $hook );
	while ( $timestamp ) {
		wp_unschedule_event( $timestamp, $hook );
		$timestamp = wp_next_scheduled( $hook );
	}
	wp_clear_scheduled_hook( $hook );
}

// Delete plugin CPT posts (emi_case_study, emi_lead_magnet, emi_faq) and their meta.
$cpts = [ 'emi_case_study', 'emi_lead_magnet', 'emi_faq' ];
foreach ( $cpts as $cpt ) {
	$ids = $wpdb->get_col(
		$wpdb->prepare(
			"SELECT ID FROM {$wpdb->posts} WHERE post_type = %s",
			$cpt
		)
	);
	foreach ( $ids as $id ) {
		wp_delete_post( (int) $id, true );
	}
}

// Remove our custom capability from all roles.
$roles = wp_roles()->role_objects;
foreach ( $roles as $role ) {
	$role->remove_cap( 'manage_emi_ai' );
}

// Delete uploaded plugin files (lead magnets, generated estimate PDFs).
$upload_dir = wp_upload_dir();
$plugin_dir = trailingslashit( $upload_dir['basedir'] ) . 'emi-ai/';
if ( is_dir( $plugin_dir ) ) {
	$it = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator( $plugin_dir, FilesystemIterator::SKIP_DOTS ),
		RecursiveIteratorIterator::CHILD_FIRST
	);
	foreach ( $it as $file ) {
		$file->isDir() ? rmdir( $file->getRealPath() ) : unlink( $file->getRealPath() );
	}
	@rmdir( $plugin_dir );
}
