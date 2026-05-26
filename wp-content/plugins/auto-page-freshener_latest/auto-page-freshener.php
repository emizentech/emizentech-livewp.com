<?php
/*
Plugin Name: Auto Page Freshener
Description: Automatically rephrases or updates pages every 7 days using OpenAI and clears NitroPack cache.
Version: 1.0.0
Author: Amit Samsukha
*/

if (!defined('ABSPATH')) exit;

// 🔄 Activation: Schedule daily cron
register_activation_hook(__FILE__, function () {
    if (!wp_next_scheduled('apf_daily_cron_hook')) {
        wp_schedule_event(time(), 'daily', 'apf_daily_cron_hook');
    }

    // Also create database tables if needed
    require_once plugin_dir_path(__FILE__) . 'admin/grid-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/logs-page.php';
    apf_create_table();
    apf_create_logs_table();
});

// 🛑 Deactivation: Clear scheduled cron
register_deactivation_hook(__FILE__, function () {
    wp_clear_scheduled_hook('apf_daily_cron_hook');
});

// 🧠 Cron handler logic
if (!function_exists('apf_daily_cron_job')) {
	require_once plugin_dir_path(__FILE__) . 'includes/cron-handler.php';
}
add_action('apf_daily_cron_hook', 'apf_daily_cron_job');

// 🧩 Include all plugin components
require_once plugin_dir_path(__FILE__) . 'admin/grid-page.php';
require_once plugin_dir_path(__FILE__) . 'admin/logs-page.php';
require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
require_once plugin_dir_path(__FILE__) . 'includes/updater.php';
require_once plugin_dir_path(__FILE__) . 'includes/ajax.php';
require_once plugin_dir_path(__FILE__) . 'includes/mailer.php';

// 🧭 Admin Menu: Add Grid, Logs, Settings
add_action('admin_menu', function () {
	    if (!is_super_admin()) return;

    add_menu_page('Auto Page Freshener', 'Page Freshener', 'manage_options', 'apf-admin', 'apf_render_grid_page', 'dashicons-update', 26);
    add_submenu_page('apf-admin', 'Logs', 'Logs', 'manage_options', 'apf-logs', 'apf_render_logs_page');
    add_submenu_page('apf-admin', 'Settings', 'Settings', 'manage_options', 'apf-settings', 'apf_render_settings_page');
});




add_action('send_headers', function() {
    header_remove('x-hacker');
    header_remove('x-ac');
    header_remove('host-header');
});

