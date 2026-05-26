<?php
// Exit if accessed directly
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

// Get the global database access class
global $wpdb;

// Define table names (with prefix)
$pages_table = $wpdb->prefix . 'apf_tracked_pages';
$logs_table  = $wpdb->prefix . 'apf_logs';

// Drop both custom tables if they exist
$wpdb->query( "DROP TABLE IF EXISTS $pages_table" );
$wpdb->query( "DROP TABLE IF EXISTS $logs_table" );

// Optional: Delete plugin options (OpenAI key, SMTP settings, etc.)
delete_option( 'apf_openai_api_key' );
delete_option( 'apf_smtp_host' );
delete_option( 'apf_smtp_port' );
delete_option( 'apf_smtp_username' );
delete_option( 'apf_smtp_password' );
delete_option( 'apf_smtp_from_email' );
delete_option( 'apf_smtp_from_name' );
delete_option( 'apf_smtp_encryption' );
