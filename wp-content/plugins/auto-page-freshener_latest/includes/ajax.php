<?php
if (!defined('ABSPATH')) exit;

// Handle test SMTP email AJAX
add_action('wp_ajax_apf_send_test_smtp_email', function() {
    check_ajax_referer('apf_test_email_nonce');

    $email = sanitize_email($_POST['email']);

    if (!is_email($email)) {
        wp_send_json_error('Invalid email address.');
    }

    $subject = 'SMTP Test Email - Auto Page Freshener';
    $body = '<p>This is a <strong>test email</strong> sent from Auto Page Freshener plugin.</p>';
    $headers = ['Content-Type: text/html; charset=UTF-8'];

    $sent = wp_mail($email, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success('Test email sent successfully to ' . esc_html($email));
    } else {
        wp_send_json_error('Failed to send test email. Please check SMTP settings.');
    }
});


add_action('wp_ajax_apf_test_openai_api_key', function () {
    check_ajax_referer('apf_test_openai_nonce');

    $api_key = sanitize_text_field($_POST['api_key']);

    if (empty($api_key)) {
        wp_send_json_error('API key is required.');
    }

    $response = wp_remote_post('https://api.openai.com/v1/chat/completions', [
        'headers' => [
            'Authorization' => 'Bearer ' . $api_key,
            'Content-Type'  => 'application/json',
        ],
        'body' => json_encode([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => 'Say hello!'],
            ],
            'max_tokens' => 10,
        ]),
        'timeout' => 15,
    ]);

    if (is_wp_error($response)) {
        wp_send_json_error('Request failed: ' . $response->get_error_message());
    }

    $code = wp_remote_retrieve_response_code($response);
    $body = wp_remote_retrieve_body($response);

    if ($code === 200) {
        wp_send_json_success('API Key is valid and working!');
    } else {
        wp_send_json_error('Invalid API key or failed response from OpenAI.');
    }
});
