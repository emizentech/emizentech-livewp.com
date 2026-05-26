<?php
/**
 * Author: Amit Samsukha
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'updater.php';

function apf_daily_cron_job() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'apf_tracked_pages';

    $rows = $wpdb->get_results("SELECT * FROM $table_name");

    $summary = [];
    foreach ($rows as $row) {
        $result = apf_process_single($row->id, true);
        if ($result) {
            $summary[] = $result;
        }
    }

    if (!empty($summary)) {
        apf_send_cron_summary_email($summary);
    }
}

