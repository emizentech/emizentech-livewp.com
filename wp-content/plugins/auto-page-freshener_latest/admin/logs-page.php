<?php
/**
 * Author: Amit Samsukha
 */



function apf_render_logs_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'apf_logs';

    $logs = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC LIMIT 100");

    ?>
    <div class="wrap">
        <h1>Auto Page Freshener Logs</h1>
        <table class="widefat striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page URL</th>
                    <th>Status</th>
                    <th>Message</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($logs): ?>
                    <?php foreach ($logs as $log): ?>
                        <tr>
                            <td><?php echo $log->id; ?></td>
                            <td><a href="<?php echo esc_url($log->page_url); ?>" target="_blank"><?php echo esc_html($log->page_url); ?></a></td>
                            <td>
                                <?php echo $log->status === 'success' ? '✅ Success' : '❌ Failed'; ?>
                            </td>
                            <td><?php echo esc_html($log->message); ?></td>
                            <td><?php echo esc_html($log->created_at); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="5">No logs available yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

// Create logs table on plugin activation
register_activation_hook(__FILE__, 'apf_create_logs_table');
function apf_create_logs_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "apf_logs";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        page_url VARCHAR(2083),
        status VARCHAR(20),
        message TEXT,
        created_at DATETIME,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
