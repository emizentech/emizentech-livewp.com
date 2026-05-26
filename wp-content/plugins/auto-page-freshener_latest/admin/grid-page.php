<?php
/**
 * Author: Amit Samsukha
 */

if (!defined('ABSPATH')) exit;



function apf_render_grid_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . "apf_tracked_pages";

    // 🗑️ Delete All Entries
    if (isset($_GET['apf_delete_all']) && current_user_can('manage_options') && check_admin_referer('apf_delete_all_nonce')) {
        $wpdb->query("DELETE FROM $table_name");
        echo '<div class="notice notice-success is-dismissible"><p>All entries deleted.</p></div>';
    }

    // 🗑️ Delete Single Row
    if (isset($_GET['apf_delete_id']) && check_admin_referer('apf_delete_row_' . $_GET['apf_delete_id'])) {
        $wpdb->delete($table_name, ['id' => (int)$_GET['apf_delete_id']]);
        echo '<div class="notice notice-success is-dismissible"><p>Row deleted successfully.</p></div>';
    }

    // ➕ Add New Page
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apf_add_page'])) {
        $url = esc_url_raw($_POST['page_url']);
        $selector = sanitize_text_field($_POST['css_selector']);
        $must_have = sanitize_text_field($_POST['must_have']);

        if (!empty($url)) {
            $wpdb->query(
                $wpdb->prepare(
                    "INSERT IGNORE INTO $table_name (page_url, css_selector, must_have_words, last_updated)
                     VALUES (%s, %s, %s, %s)",
                    $url, $selector, $must_have, current_time('mysql')
                )
            );
        }
    }

    // 🔁 Import All Pages
    if (isset($_GET['apf_import_all'])) {
        $pages = get_pages(['post_status' => 'publish']);
        foreach ($pages as $page) {
            $url = get_permalink($page->ID);
            $exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE page_url = %s", $url));
            if (!$exists) {
                $wpdb->insert($table_name, [
                    'page_url' => $url,
                    'css_selector' => '',
                    'must_have_words' => '',
                    'last_updated' => current_time('mysql')
                ]);
            }
        }
        echo '<div class="notice notice-success is-dismissible"><p>All published pages imported.</p></div>';
    }

    // ⚡ Manual Trigger
    if (isset($_GET['trigger_id'])) {
        require_once plugin_dir_path(__FILE__) . '../includes/updater.php';
        apf_process_single((int)$_GET['trigger_id']);
        echo '<div class="notice notice-success is-dismissible"><p>Triggered successfully.</p></div>';
    }

    // 📄 Fetch all rows
    $rows = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
    ?>
    <div class="wrap">
        <h1>Page Freshener Grid</h1>

        <form method="post">
            <h2>Add New Page</h2>
            <table class="form-table">
                <tbody>
                <tr>
                    <th>Page URL</th>
                    <td><input type="url" name="page_url" required size="80"></td>
                </tr>
                <tr>
                    <th>CSS Selector (ID only)</th>
                    <td><input type="text" name="css_selector" required placeholder="#main-content"></td>
                </tr>
                <tr>
                    <th>Must Have Words (max 200 chars)</th>
                    <td><input type="text" name="must_have" maxlength="200"></td>
                </tr>
                </tbody>
            </table>
            <p><input type="submit" name="apf_add_page" class="button-primary" value="Add Page"></p>
        </form>

        <p style="margin-top: 20px;">
            <a href="<?php echo wp_nonce_url(admin_url('admin.php?page=apf-admin&apf_import_all=1'), 'apf_import_nonce'); ?>" class="button-secondary">Import All Published Pages</a>
            <a href="<?php echo wp_nonce_url(admin_url('admin.php?page=apf-admin&apf_delete_all=1'), 'apf_delete_all_nonce'); ?>" class="button button-danger" style="color:red;">Remove All</a>
        </p>

        <h2>Tracked Pages</h2>
        <table class="widefat striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page URL</th>
                    <th>CSS Selector</th>
                    <th>Must Have Words</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rows): ?>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><a href="<?php echo esc_url($row->page_url); ?>" target="_blank"><?php echo esc_html($row->page_url); ?></a></td>
                            <td><?php echo esc_html($row->css_selector); ?></td>
                            <td><?php echo esc_html($row->must_have_words); ?></td>
                            <td><?php echo esc_html($row->last_updated); ?></td>
                            <td>
                                <a href="?page=apf-admin&trigger_id=<?php echo $row->id; ?>" class="button">Run Now</a>
                                <a href="<?php echo wp_nonce_url(admin_url('admin.php?page=apf-admin&apf_delete_id=' . $row->id), 'apf_delete_row_' . $row->id); ?>" class="button" style="color:red;">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6">No tracked pages found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

// 🔧 Create DB Table
function apf_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "apf_tracked_pages";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        page_url VARCHAR(2083) NOT NULL UNIQUE,
        css_selector VARCHAR(255),
        must_have_words VARCHAR(255),
        last_updated DATETIME,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

