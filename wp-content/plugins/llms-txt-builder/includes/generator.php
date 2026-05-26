<?php
class LLMS_Txt_Builder_Generator {

    public static function init() {
        // Manual regenerate action (could be called from admin UI)
        add_action('admin_post_llms_txt_regenerate', [__CLASS__, 'generate_llms_txt']);
        // Cron job for scheduled generation
        add_action('llms_txt_generate_cron', [__CLASS__, 'generate_llms_txt']);
    }



    /**
     * Main function to generate llms.txt
     */
    public static function generate_llms_txt() {
        // Get settings
        $content_types = get_option('llms_txt_content_types', ['post', 'page']);
        $exclude_urls  = preg_split('/\r\n|\r|\n/', trim(get_option('llms_txt_exclude_urls', '')));
        $exclude_urls  = array_filter(array_map('trim', $exclude_urls));
        $noindex       = get_option('llms_txt_noindex', 1);
        $max_words     = intval(get_option('llms_txt_max_words', 200));
        $blog_title    = get_option('llms_txt_blog_title', get_bloginfo('name'));
        $blog_summary  = get_option('llms_txt_blog_summary', get_bloginfo('description'));
        $blog_detail   = get_option('llms_txt_blog_detail_summary', '');

        // Get all URLs for selected content types
        $urls = LLMS_Txt_Builder_Sitemap::get_all_urls($content_types);

        // Prepare sections for Markdown
        $sections = [];
        foreach ($content_types as $type) {
            $sections[$type] = [];
        }

        // Process each URL
        foreach ($urls as $url) {
            // Exclude URLs
            if (in_array($url, $exclude_urls)) continue;

            // Get post ID from URL
            $post_id = url_to_postid($url);
            if (!$post_id) continue;

            // Exclude noindex if enabled
            if ($noindex && self::is_noindex($post_id)) continue;

            // Get post type
            $type = get_post_type($post_id);
            if (!in_array($type, $content_types)) continue;

            // Get title and content
            $title = get_the_title($post_id);
            $content = get_post_field('post_content', $post_id);

            // Get summary from cache or generate it
            $summary = LLMS_Txt_Builder_Cache::get_summary($post_id);
            if (!$summary) {
                $summary = LLMS_Txt_Builder_OpenAI::generate_summary($content, $max_words, $post_id);
                LLMS_Txt_Builder_Cache::set_summary($post_id, $summary);
            }

            // Add to section
            $sections[$type][] = [
                'title'   => $title,
                'url'     => $url,
                'summary' => $summary,
            ];
	  
	  
        }

        // Build Markdown content
        $md  = "# " . ($blog_title) . "\n\n";
        $md .= "> " . ($blog_summary) . "\n\n";
        if (!empty($blog_detail)) {
            $md .= ($blog_detail) . "\n\n";
        }

        foreach ($sections as $type => $items) {
            if (empty($items)) continue;
            $md .= "## " . ucfirst($type) . "\n\n";
            foreach ($items as $item) {
                $md .= "- [{$item['title']}]({$item['url']}): " . ($item['summary']) . "\n\n";
            }
            $md .= "\n";
            $md .= "\n";
        }

        // Write to /llms.txt in site root
	$root = rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
	$file = $root . 'llms.txt';

        file_put_contents($file, $md);
	update_option('llms_txt_last_generated_at', current_time('mysql')); // This is in WordPress timezone, MySQL format


        // Optionally, add admin notice or log generation
    }

    /**
     * Check if a post is set to noindex via SEO plugins.
     * @param int $post_id
     * @return bool
     */
    private static function is_noindex($post_id) {
        // Yoast SEO
        $yoast = get_post_meta($post_id, '_yoast_wpseo_meta-robots-noindex', true);
        if ($yoast === '1') return true;
        // Rank Math
        $rankmath = get_post_meta($post_id, 'rank_math_robots', true);
        if (is_array($rankmath) && in_array('noindex', $rankmath)) return true;
        if (is_string($rankmath) && strpos($rankmath, 'noindex') !== false) return true;
        // All in One SEO
        $aioseop = get_post_meta($post_id, '_aioseop_robots_meta', true);
        if (is_array($aioseop) && in_array('noindex', $aioseop)) return true;
        if (is_string($aioseop) && strpos($aioseop, 'noindex') !== false) return true;
        return false;
    }
}

