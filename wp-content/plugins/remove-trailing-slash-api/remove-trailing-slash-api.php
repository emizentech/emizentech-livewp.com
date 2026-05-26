<?php
/**
 * Plugin Name: Remove Trailing Slash from .html URLs in REST API
 * Description: Cleans up trailing slashes on .html links in REST API post responses.
 * Version: 1.0
 * Author: Amit Samsukha
 */

add_filter('rest_prepare_post', 'rts_clean_html_urls_in_rest', 10, 3);

function rts_clean_html_urls_in_rest($response, $post, $request) {
    $data = $response->get_data();
    
    if (isset($data['content']['rendered'])) {
        $content = $data['content']['rendered'];
        // Remove trailing slash from .html URLs
        $content = preg_replace('#(https?://[^"\']+\.html)/#', '$1', $content);
        $data['content']['rendered'] = $content;
    }

    $response->set_data($data);
    return $response;
}
