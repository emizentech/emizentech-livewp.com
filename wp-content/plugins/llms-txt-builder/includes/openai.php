<?php
class LLMS_Txt_Builder_OpenAI {

    /**
     * Generate a summary using OpenAI API, or fallback to meta description.
     * @param string $content The content to summarize.
     * @param int $max_words Maximum words for the summary.
     * @param int $post_id Optional. If fallback is needed, get meta description for this post.
     * @return string Summary text.
     */
    public static function generate_summary($content, $max_words = 200, $post_id = 0) {
        $api_key = trim(get_option('llms_txt_openai_key'));
        if (!$api_key) {
            return self::get_meta_description($post_id, $content, $max_words);
        }

        // Prepare prompt for OpenAI
	$content = wp_strip_all_tags($content);
$prompt = 
    "Summarize the following page content in no more than {$max_words} words.\n\n" .
    "Guidelines:\n" .
    "- Do NOT include any HTML tags, special characters like \">\", \"<\", or encoded entities (&amp;, &lt;, etc.)\n" .
    "- Use only plain text for the summary with no blank spaces.\n" .
    "- Focus on the main value or purpose of the page.\n" .
    "- Output only one line in the required format, no extra commentary.\n\n" .
    "Content:\n" .
    $content;

        // OpenAI API endpoint and parameters
        $endpoint = 'https://api.openai.com/v1/completions';
        $model = 'gpt-3.5-turbo'; // Or use 'gpt-3.5-turbo-instruct' if available

        $data = [
            'model' => $model,
            'prompt' => $prompt,
            'max_tokens' => 200, // Approximate tokens
            'temperature' => 0.7,
            'n' => 1,
            'stop' => null,
        ];

        $args = [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer ' . $api_key,
            ],
            'body'    => json_encode($data),
            'timeout' => 30,
        ];

        $response = wp_remote_post($endpoint, $args);

        if (is_wp_error($response)) {
            return self::get_meta_description($post_id, $content, $max_words);
        }

        $body = wp_remote_retrieve_body($response);
        $result = json_decode($body, true);

        if (isset($result['choices'][0]['text'])) {
            return trim($result['choices'][0]['text']);
        }

        // Fallback to meta description if no valid OpenAI response
        return self::get_meta_description($post_id, $content, $max_words);
    }

    /**
     * Get meta description or fallback to trimmed content.
     * @param int $post_id
     * @param string $content
     * @param int $max_words
     * @return string
     */
    private static function get_meta_description($post_id, $content, $max_words) {
        $desc = '';
        if ($post_id && function_exists('get_post_meta')) {
            // Try Yoast SEO meta description
            $desc = get_post_meta($post_id, '_yoast_wpseo_metadesc', true);
            if (!$desc) {
                // Try RankMath meta description
                $desc = get_post_meta($post_id, 'rank_math_description', true);
            }
        }
        if (!$desc) {
            // Fallback: use trimmed content
            $desc = wp_trim_words(wp_strip_all_tags($content), $max_words, '...');
        }
        return $desc;
    }
}

