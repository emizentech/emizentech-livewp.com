<?php
/**
 * Author: Amit Samsukha
 */

if (!defined('ABSPATH')) exit;

function apf_process_single($row_id, $return_summary = false) {
    global $wpdb;

    $pages_table = $wpdb->prefix . 'apf_tracked_pages';
    $logs_table  = $wpdb->prefix . 'apf_logs';

    $row = $wpdb->get_row($wpdb->prepare("SELECT * FROM $pages_table WHERE id = %d", $row_id));
    if (!$row){
        apf_log_result('', 'fail', 'Page not found in table.');
        return;
    }

    $url = $row->page_url;
    $last_updated = strtotime($row->last_updated);
    $seven_days_ago = strtotime('-6 days');   

      // Only proceed if last updated more than 7 days ago
    if ($last_updated > $seven_days_ago) {
	 apf_log_result($url, 'fail', 'Page already updated in last 6 days');
	    return;
    }


    $post_id = url_to_postid($url);
    if (!$post_id) {
        apf_log_result($url, 'fail', 'Page not found by URL.');
        return;
    }

    $html = get_post_field('post_content', $post_id);
    if (!$html) {
        apf_log_result($url, 'fail', 'Post content is empty or unavailable.');
        return;
    }

    $updated = false;
    $message = '';

    if ($row->css_selector && strpos($row->css_selector, '#') === 0) {
	    $elementId = ltrim($row->css_selector, '#');
        preg_match('/<[^>]+id=["\']' . preg_quote($elementId, '/') . '["\'][^>]*>(.*?)<\/[^>]+>/is', $html, $matches);

        if (!empty($matches[1])) {
            $innerHTML = trim($matches[1]);

            // ✅ Allow all keyboard characters including quotes, only reject inner tags
            if (preg_match('/<[^>]+>/', $innerHTML)) {
                apf_log_result($url, 'fail', 'Selector content contains HTML tags.');
                return;
            }

     /*       if ($row->must_have_words && stripos($innerHTML, $row->must_have_words) === false) {
                apf_log_result($url, 'fail', 'Selector text does not contain required phrase.');
                return;
            }
      */

            $rephrased = apf_rephrase_text($innerHTML, $row->must_have_words);
            if ($rephrased) {
                $new_content = str_replace($innerHTML, $rephrased, $html);
                wp_update_post(['ID' => $post_id, 'post_content' => $new_content]);
                $updated = true;
                $message = 'Content rephrased successfully.';
		    $message = "Rephrased successfully.\n <br><strong>Old:</strong> \"$innerHTML\"<br />\n<strong>New:</strong> \"$rephrased\"";


 
		// Include NitroPack functions file
		require_once WP_PLUGIN_DIR . '/nitropack/functions.php';
		// Call the NitroPack cache invalidate function
		if (function_exists('nitropack_sdk_invalidate')) {
			nitropack_sdk_invalidate($url, NULL, $message);
			$message .= ", Nitro Cache Invalidated";
		}

            } else {
                apf_log_result($url, 'fail', 'OpenAI failed to return rephrased content.');
                return;
            }
        } else {
            $message = 'Selector not found. Updated date only.';
        }
    } else {
        $message = 'No valid selector. Updated date only.';
    }

    $wpdb->update($pages_table, ['last_updated' => current_time('mysql')], ['id' => $row_id]);
    do_action('nitropack_clear_url_cache', $url);

    $status = $updated ? 'success' : 'success';
    apf_log_result($url, $status, $message);
    apf_send_admin_email($url, $status, $message);

    if ($return_summary) {
        return [
            'url' => $url,
            'status' => $status,
            'message' => $message,
            'time' => current_time('mysql'),
        ];
    }
}

function apf_rephrase_text($text, $must_have_words = '') {
    $api_key = get_option('apf_openai_key');
    if (!$api_key) return false;

    $system_prompt = "Rephrase this text for SEO improvement, keeping original meaning.";
    if (!empty($must_have_words)) {
        $system_prompt .= " The response should contain this phrase: ". $must_have_words .".";
	$system_prompt .= "\n -- content must be Plagiarism free and easy to read";
    }

    $request_body = json_encode([
        "model" => "gpt-3.5-turbo",
        "messages" => [
            ["role" => "system", "content" => $system_prompt],
            ["role" => "user", "content" => $text]
        ],
        "temperature" => 0.7
    ]);

    $response = wp_remote_post("https://api.openai.com/v1/chat/completions", [
        'headers' => [
            'Authorization' => "Bearer $api_key",
            'Content-Type'  => 'application/json'
        ],
        'body' => $request_body,
        'timeout' => 20,
    ]);

    if (is_wp_error($response)) return false;

    $data = json_decode(wp_remote_retrieve_body($response), true);
    return $data['choices'][0]['message']['content'] ?? false;
}

function apf_log_result($url, $status, $message) {
    global $wpdb;
    $logs_table = $wpdb->prefix . 'apf_logs';
    $wpdb->insert($logs_table, [
        'page_url' => esc_url_raw($url),
        'status' => $status,
        'message' => sanitize_text_field($message),
        'created_at' => current_time('mysql')
    ]);
}


function apf_send_admin_email($url, $status, $message) {
    $admin_email = get_option('admin_email');
    $subject = "Auto Page Freshener - " . ucfirst($status);

    $text_color = ($status === 'success') ? '#2ecc71' : '#e74c3c';
    $row_style = ($status === 'success') ? 'background-color: #eafaf1;' : 'background-color: #fff3f3;';

    $body = '<html><body>';
    $body .= '<h2 style="color: #2c3e50;">🔔 Page Update Notification</h2>';
    $body .= '<table cellpadding="10" cellspacing="0" border="0" style="border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px;">';
    $body .= '<thead><tr style="background-color: #f4f4f4;">';
    $body .= '<th align="left" style="border-bottom: 1px solid #ddd;">Page URL</th>';
    $body .= '<th align="left" style="border-bottom: 1px solid #ddd;">Status</th>';
    $body .= '<th align="left" style="border-bottom: 1px solid #ddd;">Message</th>';
    $body .= '<th align="left" style="border-bottom: 1px solid #ddd;">Time</th>';
    $body .= '</tr></thead>';
    $body .= '<tbody>';
    $body .= '<tr style="' . $row_style . '">';
    $body .= '<td style="border-bottom: 1px solid #eee;"><a href="' . esc_url($url) . '" target="_blank">' . esc_html($url) . '</a></td>';
    $body .= '<td style="border-bottom: 1px solid #eee; color:' . $text_color . '; font-weight: bold;">' . strtoupper($status) . '</td>';
    $body .= '<td style="border-bottom: 1px solid #eee;">' . esc_html($message) . '</td>';
    $body .= '<td style="border-bottom: 1px solid #eee;">' . current_time('mysql') . '</td>';
    $body .= '</tr>';
    $body .= '</tbody></table>';
    $body .= '<br><p style="font-size: 12px; color: #888;">Sent by <strong>Auto Page Freshener</strong> plugin (by Amit Samsukha).</p>';
    $body .= '</body></html>';

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Auto Page Freshener <no-reply@' . $_SERVER['SERVER_NAME'] . '>'
    ];

    wp_mail($admin_email, $subject, $body, $headers);
}

