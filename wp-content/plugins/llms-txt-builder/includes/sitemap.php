<?php
class LLMS_Txt_Builder_Sitemap {

    /**
     * Get all public URLs from the site's XML sitemap, or fallback to WP_Query.
     * @return array Array of absolute URLs.
     */
    public static function get_all_urls($content_types = ['post', 'page']) {
        $urls = [];

        // 1. Try to parse the native WP sitemap.xml
        $sitemap_index_url = home_url('/wp-sitemap.xml');
        $xml = self::fetch_xml($sitemap_index_url);

        if ($xml && isset($xml->sitemap)) {
            // Loop through all sitemap sub-indexes
            foreach ($xml->sitemap as $sitemap) {
                if (isset($sitemap->loc)) {
                    $sub_sitemap_url = (string)$sitemap->loc;
                    // Only fetch sitemaps for selected content types
                    foreach ($content_types as $type) {
                        if (strpos($sub_sitemap_url, "wp-sitemap-posts-{$type}-") !== false) {
                            $sub_xml = self::fetch_xml($sub_sitemap_url);
                            if ($sub_xml && isset($sub_xml->url)) {
                                foreach ($sub_xml->url as $url_entry) {
                                    if (isset($url_entry->loc)) {
                                        $urls[] = (string)$url_entry->loc;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        // 2. Fallback: Query WP for all published posts/pages if sitemap is missing
        if (empty($urls)) {
            foreach ($content_types as $type) {
                $query = new WP_Query([
                    'post_type'      => $type,
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'fields'         => 'ids',
                    'no_found_rows'  => true,
                ]);
                if ($query->have_posts()) {
                    foreach ($query->posts as $post_id) {
                        $urls[] = get_permalink($post_id);
                    }
                }
            }
        }

        // 3. Remove duplicates and return
        $urls = array_unique($urls);
        sort($urls);
        return $urls;
    }

    /**
     * Fetch and parse XML from a URL.
     * @param string $url
     * @return SimpleXMLElement|null
     */
    private static function fetch_xml($url) {
        $response = wp_remote_get($url, ['timeout' => 10]);
        if (is_wp_error($response)) {
            return null;
        }
        $body = wp_remote_retrieve_body($response);
        if (empty($body)) {
            return null;
        }
        libxml_use_internal_errors(true);
        $xml = simplexml_load_string($body);
        if ($xml === false) {
            return null;
        }
        return $xml;
    }
}

