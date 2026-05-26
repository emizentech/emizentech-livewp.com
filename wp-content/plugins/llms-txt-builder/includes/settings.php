<?php
class LLMS_Txt_Builder_Settings {
    public static function init() {
        add_action('admin_menu', [__CLASS__, 'add_menu']);
        add_action('admin_init', [__CLASS__, 'register_settings']);
	    add_action('admin_enqueue_scripts', [__CLASS__, 'enqueue_admin_assets']);

    }
    public static function add_menu() {
        add_options_page(
            'LLms.txt Builder',
            'LLms.txt Builder',
            'manage_options',
            'llms-txt-builder',
            [__CLASS__, 'settings_page']
        );
    }
public static function enqueue_admin_assets($hook) {
    // Only load on our plugin's settings page
    if ($hook !== 'settings_page_llms-txt-builder') {
        return;
    }
    wp_enqueue_style('llms-txt-builder-admin', plugin_dir_url(__FILE__) . 'admin-style.css', [] , "1.0.1" );
    wp_enqueue_script('llms-txt-builder-admin', plugin_dir_url(__FILE__) . 'admin.js', ['jquery'], "1.0.1", true);
    wp_localize_script('llms-txt-builder-admin', 'LLMSTxtBuilder', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('llms_txt_test_openai'),
    ]);
}

public static function register_settings() {
    // Blog title: single line text
    register_setting('llms_txt_builder', 'llms_txt_blog_title', [
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ]);

    // Blog summary: textarea
    register_setting('llms_txt_builder', 'llms_txt_blog_summary', [
        'type' => 'string',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => ''
    ]);

    // Blog detail summary: textarea
    register_setting('llms_txt_builder', 'llms_txt_blog_detail_summary', [
        'type' => 'string',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => ''
    ]);

    // OpenAI API key: single line text
    register_setting('llms_txt_builder', 'llms_txt_openai_key', [
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ]);

    // Content types: array of strings (checkboxes)
    register_setting('llms_txt_builder', 'llms_txt_content_types', [
        'type' => 'array',
        'sanitize_callback' => function($input) {
            return array_map('sanitize_text_field', (array)$input);
        },
        'default' => ['post', 'page']
    ]);

    // Exclude URLs: textarea (one URL per line)
    register_setting('llms_txt_builder', 'llms_txt_exclude_urls', [
        'type' => 'string',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => ''
    ]);

    // Exclude noindex: checkbox (boolean)
    register_setting('llms_txt_builder', 'llms_txt_noindex', [
        'type' => 'boolean',
        'sanitize_callback' => function($value) {
            return $value ? 1 : 0;
        },
        'default' => 1
    ]);

    // Max words per summary: integer
    register_setting('llms_txt_builder', 'llms_txt_max_words', [
        'type' => 'integer',
        'sanitize_callback' => 'absint',
        'default' => 200
    ]);

    // Update frequency: select (string)
    register_setting('llms_txt_builder', 'llms_txt_update_frequency', [
        'type' => 'string',
        'sanitize_callback' => function($input) {
            $allowed = ['daily', 'weekly', 'immediate'];
            return in_array($input, $allowed, true) ? $input : 'daily';
        },
        'default' => 'daily'
    ]);
}


public static function settings_page() {
    // Enqueue custom styles and JS for AJAX
    add_action('admin_enqueue_scripts', function() {
        wp_enqueue_style('llms-txt-builder-admin', plugin_dir_url(__FILE__) . 'admin-style.css', [] , "1.0.1");
        wp_enqueue_script('llms-txt-builder-admin', plugin_dir_url(__FILE__) . 'admin.js', ['jquery'], "1.0.1", true);
        wp_localize_script('llms-txt-builder-admin', 'LLMSTxtBuilder', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('llms_txt_test_openai'),
        ]);
    });

    $openai_key = esc_attr(get_option('llms_txt_openai_key'));
    $site_url = urlencode(get_site_url());
$emizentech_url = "https://emizentech.com/?utm_source=wordpress&utm_medium=llms_builder&utm_campaign=branding&utm_content={$site_url}";

    ?>
    <div class="wrap llms-txt-builder-settings">
<div style="display:flex;align-items:center;gap:20px;margin-bottom:32px;">
<a href="<?php echo esc_url($emizentech_url); ?>" target="_blank" style="display:inline-block;">

<img src="<?php echo esc_url(plugin_dir_url(__FILE__) . 'Logo_bl_210_w.svg'); ?>" alt="Emizen Tech" style="height:48px;">

</a>            <div>
		<h1 style="margin-bottom:0;">LLms.txt Builder <span style="font-size:0.6em;font-weight:normal;color:#888;">by 
<a href="<?php echo esc_url($emizentech_url); ?>" target="_blank" style="color:#888;text-decoration:underline;">
 EmizenTech</a></span></h1>
                <p style="margin:0;color:#666;">AI-Ready Content Indexing for WordPress</p>
            </div>
        </div>
        <form method="post" action="options.php">
            <?php settings_fields('llms_txt_builder'); ?>



            <div class="llms-section">

<?php
$last_generated = get_option('llms_txt_last_generated_at');
$llms_url = trailingslashit(get_site_url()) . 'llms.txt';
?>
<div  style="margin-bottom:24px;">
    <strong>Last Generated At:</strong>
    <?php echo $last_generated ? esc_html($last_generated) : 'Never'; ?>
    &nbsp;|&nbsp;
    <strong>View File:</strong>
    <a href="<?php echo esc_url($llms_url); ?>" target="_blank"><?php echo esc_html($llms_url); ?></a>
</div>

                <h2>General</h2>
                <table class="form-table">
                    <tr>
                        <th>Blog Title</th>
                        <td><input type="text" name="llms_txt_blog_title" value="<?php echo esc_attr(get_option('llms_txt_blog_title')); ?>" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th>Blog Summary</th>
                        <td><textarea name="llms_txt_blog_summary" rows="2" class="large-text"><?php echo esc_textarea(get_option('llms_txt_blog_summary')); ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Blog Detail Summary</th>
                        <td><textarea name="llms_txt_blog_detail_summary" rows="3" class="large-text"><?php echo esc_textarea(get_option('llms_txt_blog_detail_summary')); ?></textarea></td>
                    </tr>
                </table>
            </div>

            <div class="llms-section">
                <h2>OpenAI Integration</h2>
                <table class="form-table">
                    <tr>
                        <th>OpenAI API Key</th>
                        <td>
                            <input type="text" id="llms_txt_openai_key" name="llms_txt_openai_key" value="<?php echo esc_attr($openai_key); ?>" class="regular-text" autocomplete="off">
                            <button type="button" class="button" id="llms-txt-test-openai">Test Key</button>
                            <span id="llms-txt-test-openai-result" style="margin-left:10px;"></span>
                            <p class="description">Enter your OpenAI API key. <a href="https://platform.openai.com/account/api-keys" target="_blank">Get your key</a>.</p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="llms-section">
                <h2>Content Settings</h2>
                <table class="form-table">
                    <tr>
                        <th>Content Types</th>
                        <td>
                            <?php
                            $post_types = get_post_types(['public' => true], 'objects');
                            $selected = (array) get_option('llms_txt_content_types', ['post', 'page']);
                            foreach ($post_types as $type) {
                                echo '<label style="margin-right:15px;"><input type="checkbox" name="llms_txt_content_types[]" value="' . esc_attr($type->name) . '" ' . checked(in_array($type->name, $selected), true, false) . '> ' . esc_html($type->labels->singular_name) . '</label>';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Exclude URLs</th>
                        <td>
                            <textarea name="llms_txt_exclude_urls" rows="3" class="large-text"><?php echo esc_textarea(get_option('llms_txt_exclude_urls')); ?></textarea>
                            <br><small>One URL per line.</small>
                        </td>
                    </tr>
                    <tr>
                        <th>Exclude Noindex</th>
                        <td><input type="checkbox" name="llms_txt_noindex" value="1" <?php checked(get_option('llms_txt_noindex'), 1); ?>> <span class="description">Skip posts/pages marked as noindex by SEO plugins.</span></td>
                    </tr>
                </table>
            </div>

            <div class="llms-section">
                <h2>Advanced</h2>
                <table class="form-table">
                    <tr>
                        <th>Max Words per Summary</th>
                        <td><input type="number" name="llms_txt_max_words" value="<?php echo esc_attr(get_option('llms_txt_max_words', 200)); ?>" min="20" max="500"></td>
                    </tr>
                    <tr>
                        <th>Update Frequency</th>
                        <td>
                            <select name="llms_txt_update_frequency">
                                <option value="daily" <?php selected(get_option('llms_txt_update_frequency'), 'daily'); ?>>Daily</option>
                                <option value="weekly" <?php selected(get_option('llms_txt_update_frequency'), 'weekly'); ?>>Weekly</option>
                                <option value="immediate" <?php selected(get_option('llms_txt_update_frequency'), 'immediate'); ?>>Immediate</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <?php submit_button(); ?>
        </form>
    </div>
<!-- After your main settings form -->
<div class="llms-section" style="margin-top:24px;">
    <button type="button" class="button button-primary" id="llms-txt-manual-generate">
        <span class="dashicons dashicons-update"></span> Generate llms.txt Now
    </button>
    <span id="llms-txt-manual-generate-result" style="margin-left:10px;"></span>
</div>

    <?php
}

}


