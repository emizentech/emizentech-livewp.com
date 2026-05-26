<?php
if (!defined('ABSPATH')) exit;



// Register settings on admin_init
function apf_register_settings() {
    register_setting('apf_settings_group', 'apf_openai_key');

    register_setting('apf_settings_group', 'apf_smtp_host');
    register_setting('apf_settings_group', 'apf_smtp_port');
    register_setting('apf_settings_group', 'apf_smtp_user');
    register_setting('apf_settings_group', 'apf_smtp_pass');
    register_setting('apf_settings_group', 'apf_smtp_secure');
    register_setting('apf_settings_group', 'apf_smtp_from_email');
    register_setting('apf_settings_group', 'apf_smtp_from_name');
}
add_action('admin_init', 'apf_register_settings');

// Render Settings Page
function apf_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>Auto Page Freshener - Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('apf_settings_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">OpenAI API Key</th>
                    <td>
                        <input type="text" name="apf_openai_key" id="apf_openai_key"
                               value="<?php echo esc_attr(get_option('apf_openai_key')); ?>" size="60" />
                        <br><br>
                        <button type="button" class="button" id="apf_test_openai_btn">Test API Key</button>
                        <p id="apf_openai_test_result" style="margin-top:10px;"></p>
                    </td>
                </tr>

                <tr><th colspan="2"><h3>SMTP Configuration</h3></th></tr>

                <tr valign="top"><th scope="row">SMTP Host</th>
                    <td><input type="text" name="apf_smtp_host" value="<?php echo esc_attr(get_option('apf_smtp_host')); ?>" size="50" /></td></tr>
                <tr valign="top"><th scope="row">SMTP Port</th>
                    <td><input type="text" name="apf_smtp_port" value="<?php echo esc_attr(get_option('apf_smtp_port')); ?>" size="10" /></td></tr>
                <tr valign="top"><th scope="row">SMTP Username</th>
                    <td><input type="text" name="apf_smtp_user" value="<?php echo esc_attr(get_option('apf_smtp_user')); ?>" size="50" /></td></tr>
                <tr valign="top"><th scope="row">SMTP Password</th>
                    <td><input type="password" name="apf_smtp_pass" value="<?php echo esc_attr(get_option('apf_smtp_pass')); ?>" size="50" /></td></tr>
                <tr valign="top"><th scope="row">SMTP Secure (tls/ssl)</th>
                    <td><input type="text" name="apf_smtp_secure" value="<?php echo esc_attr(get_option('apf_smtp_secure')); ?>" size="10" /></td></tr>
                <tr valign="top"><th scope="row">From Email</th>
                    <td><input type="text" name="apf_smtp_from_email" value="<?php echo esc_attr(get_option('apf_smtp_from_email')); ?>" size="50" /></td></tr>
                <tr valign="top"><th scope="row">From Name</th>
                    <td><input type="text" name="apf_smtp_from_name" value="<?php echo esc_attr(get_option('apf_smtp_from_name')); ?>" size="50" /></td></tr>

                <tr valign="top">
                    <th scope="row">Send Test Email</th>
                    <td>
                        <input type="email" id="apf_test_email" placeholder="Enter your email" />
                        <button type="button" class="button" id="apf_send_test_email">Send Test Email</button>
                        <p id="apf_test_email_status" style="margin-top:10px;"></p>
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>

    <script>
    jQuery(document).ready(function($) {
        $('#apf_send_test_email').on('click', function() {
            var email = $('#apf_test_email').val();
            var status = $('#apf_test_email_status');
            status.text('Sending...').css('color', '');

            $.post(ajaxurl, {
                action: 'apf_send_test_smtp_email',
                email: email,
                _ajax_nonce: '<?php echo wp_create_nonce("apf_test_email_nonce"); ?>'
            }, function(response) {
                if (response.success) {
                    status.css('color', 'green').text('✅ ' + response.data);
                } else {
                    status.css('color', 'red').text('❌ ' + response.data);
                }
            });
        });

        $('#apf_test_openai_btn').on('click', function() {
            const status = $('#apf_openai_test_result');
            const apiKey = $('#apf_openai_key').val();

            status.text('Testing...').css('color', '');

            $.post(ajaxurl, {
                action: 'apf_test_openai_api_key',
                api_key: apiKey,
                _ajax_nonce: '<?php echo wp_create_nonce("apf_test_openai_nonce"); ?>'
            }, function(response) {
                if (response.success) {
                    status.css('color', 'green').text('✅ ' + response.data);
                } else {
                    status.css('color', 'red').text('❌ ' + response.data);
                }
            });
        });
    });
    </script>
<?php
}

