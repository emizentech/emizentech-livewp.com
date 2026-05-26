<?php
/**
 * Plugin Name: LLms.txt Builder
 * Plugin URI: https://store.emizentech.com/llms-txt-builder
 * Description: Generates and manages a standards-compliant llms.txt file for LLMs with OpenAI summaries, sitemap integration, and caching.
 * Version: 1.0.1
 * Author: Amit Samsukha
 * Author URI: https://emizentech.com/
 * License: GPL2
 * Text Domain: llms-txt-builder
 */

if (!defined('ABSPATH')) exit;

define('LLMS_TXT_BUILDER_PATH', plugin_dir_path(__FILE__));
define('LLMS_TXT_BUILDER_URL', plugin_dir_url(__FILE__));

// Include core modules
require_once LLMS_TXT_BUILDER_PATH . 'includes/settings.php';
require_once LLMS_TXT_BUILDER_PATH . 'includes/generator.php';
require_once LLMS_TXT_BUILDER_PATH . 'includes/sitemap.php';
require_once LLMS_TXT_BUILDER_PATH . 'includes/openai.php';
require_once LLMS_TXT_BUILDER_PATH . 'includes/cache.php';

// Initialize plugin
add_action('plugins_loaded', function() {
    LLMS_Txt_Builder_Settings::init();
    LLMS_Txt_Builder_Generator::init();
});

// =========================
// WP-Cron Scheduling
// =========================

// Add weekly schedule if not present
add_filter('cron_schedules', function($schedules) {
    $schedules['weekly'] = [
        'interval' => 7 * 24 * 60 * 60,
        'display'  => __('Once Weekly', 'llms-txt-builder')
    ];
    return $schedules;
});

// On plugin activation, schedule cron event
register_activation_hook(__FILE__, function() {
    $frequency = get_option('llms_txt_update_frequency', 'daily');
    if (!in_array($frequency, ['daily', 'weekly', 'immediate'])) $frequency = 'daily';
    if (!wp_next_scheduled('llms_txt_generate_cron')) {
        wp_schedule_event(time(), $frequency === 'immediate' ? 'daily' : $frequency, 'llms_txt_generate_cron');
    }
});

// On plugin deactivation, remove cron event
register_deactivation_hook(__FILE__, function() {
    wp_clear_scheduled_hook('llms_txt_generate_cron');
});

// Update cron schedule when user changes frequency
add_action('update_option_llms_txt_update_frequency', function($old, $new) {
    wp_clear_scheduled_hook('llms_txt_generate_cron');
    $frequency = $new;
    if (!in_array($frequency, ['daily', 'weekly', 'immediate'])) $frequency = 'daily';
    if (!wp_next_scheduled('llms_txt_generate_cron')) {
        wp_schedule_event(time(), $frequency === 'immediate' ? 'daily' : $frequency, 'llms_txt_generate_cron');
    }
}, 10, 2);

// Hook generator to cron event
add_action('llms_txt_generate_cron', ['LLMS_Txt_Builder_Generator', 'generate_llms_txt']);

// =========================
// Admin Assets Enqueue
// =========================

add_action('admin_enqueue_scripts', function($hook) {
    if ($hook !== 'settings_page_llms-txt-builder') return;
    wp_enqueue_style('llms-txt-builder-admin', LLMS_TXT_BUILDER_URL.'includes/' . 'admin-style.css', [] , '1.0.1');
    wp_enqueue_script('llms-txt-builder-admin', LLMS_TXT_BUILDER_URL.'includes/' . 'admin.js', ['jquery'], '1.0.1', true);
    wp_localize_script('llms-txt-builder-admin', 'LLMSTxtBuilder', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('llms_txt_test_openai'),
    ]);
});


add_action('wp_ajax_llms_txt_test_openai', function() {
    check_ajax_referer('llms_txt_test_openai', 'nonce');
    $api_key = isset($_POST['key']) ? sanitize_text_field(wp_unslash($_POST['key'])) : '';

    if (!$api_key) {
        wp_send_json_error(['message' => 'No key provided.']);
    }

$url = 'https://api.openai.com/v1/chat/completions';

$post_fields = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'user', 'content' => 'Hello, who are you?']
    ],
    'temperature' => 0.7,
];

$args = [
    'headers' => [
        'Content-Type'  => 'application/json',
        'Authorization' => 'Bearer ' . $api_key,
    ],
    'body'    => wp_json_encode($post_fields),
    'timeout' => 20,
];

$response = wp_remote_post($url, $args);

if (is_wp_error($response)) {
    wp_send_json_error(['message' => 'Request failed.']);
}

$http_code = wp_remote_retrieve_response_code($response);

if ($http_code === 200) {
    wp_send_json_success();
} else {
    // Optionally, extract error message from the API response body
    $body = wp_remote_retrieve_body($response);
    $message = 'Invalid API key or insufficient permissions.';
    if ($body) {
        $decoded = json_decode($body, true);
        if (!empty($decoded['error']['message'])) {
            $message = $decoded['error']['message'];
        }
    }
    wp_send_json_error(['message' => $message]);
}



});


add_action('wp_ajax_llms_txt_manual_generate', function() {
    check_ajax_referer('llms_txt_test_openai', 'nonce');
    if (!current_user_can('manage_options')) {
        wp_send_json_error(['message' => 'Unauthorized']);
    }

    // Call your generator
    try {
        LLMS_Txt_Builder_Generator::generate_llms_txt();
        wp_send_json_success();
    } catch (Exception $e) {
        wp_send_json_error(['message' => $e->getMessage()]);
    }
});

