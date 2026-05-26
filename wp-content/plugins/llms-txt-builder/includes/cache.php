<?php
class LLMS_Txt_Builder_Cache {

    /**
     * Get cached summary for a post, or false if not set.
     * @param int $post_id
     * @return string|false
     */
    public static function get_summary($post_id) {
        $summary = get_post_meta($post_id, '_llms_txt_summary', true);
        return $summary ? $summary : false;
    }

    /**
     * Store summary in post meta.
     * @param int $post_id
     * @param string $summary
     */
    public static function set_summary($post_id, $summary) {
        update_post_meta($post_id, '_llms_txt_summary', $summary);
    }

    /**
     * Invalidate (delete) cached summary for a post.
     * @param int $post_id
     */
    public static function invalidate_summary($post_id) {
        delete_post_meta($post_id, '_llms_txt_summary');
    }

    /**
     * Hook to post/page updates to refresh cache.
     */
    public static function setup_hooks() {
        // Invalidate cache on save, publish, or delete
        add_action('save_post', [__CLASS__, 'invalidate_summary'], 10, 1);
        add_action('deleted_post', [__CLASS__, 'invalidate_summary'], 10, 1);
        add_action('trashed_post', [__CLASS__, 'invalidate_summary'], 10, 1);
    }
}

// Initialize hooks on plugin load
LLMS_Txt_Builder_Cache::setup_hooks();

