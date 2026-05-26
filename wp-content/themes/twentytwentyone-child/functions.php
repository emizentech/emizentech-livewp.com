<?php
/* Child theme generated with WPS Child Theme Generator */

if (!function_exists('b7ectg_theme_enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles');

    function b7ectg_theme_enqueue_styles()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), '1.0.17');
        wp_enqueue_script('jquery');
    }
}

function remove_empty_p($content)
{
    if (get_post_type() == 'tech-board') {
        return $content;
    }
    $content = force_balance_tags($content);
    $content = preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
    $content = preg_replace('~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content);
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);

function emzt_conditionally_remove_wpautop()
{
    if (is_singular('tech-board')) {
        return;
    }
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
}
add_action('wp', 'emzt_conditionally_remove_wpautop');


function elementor_footer_script()
{
    ?>
    <script>
        function getCookie(c_name) {
            var i, x, y, ARRcookies = document.cookie.split(";");
            for (i = 0; i < ARRcookies.length; i++) {
                x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
                y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
                x = x.replace(/^\s+|\s+$/g, "");
                if (x == c_name) {
                    return unescape(y);
                }
            }
        }

        jQuery(document).ready(function ($) {
            if (document.referrer && !document.referrer.includes('emizentech.com')) {
                document.cookie = "referrer=" + document.referrer + "; path=/;";
            }

            let referer_url = getCookie("referrer") || document.referrer;

            // Set referrer field in all matching fields
            $('input[name="form_fields[referrer_url]"]').val(referer_url);

            // Set IP and User Agent in all matching fields
            const userIP = "<?php echo esc_js($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']); ?>";
            const userAgent = "<?php echo esc_js($_SERVER['HTTP_USER_AGENT']); ?>";

            $('input[name="form_fields[user_ip_address]"]').val(userIP);
            $('input[name="form_fields[user_agent_add]"]').val(userAgent);

            // Set UTM fields
            const urlParams = new URLSearchParams(window.location.search);
            const utmFields = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];

            $.each(utmFields, function (index, field) {
                const value = urlParams.get(field);
                if (value) {
                    $('input[name="form_fields[' + field + ']"]').val(value);
                }
            });
        });
    </script>
    <?php if (is_page_template('cost-calculator.php')) { ?>
        <script>
            jQuery(function ($) {

                /* ── CONFIG ── */
                var TOTAL = 8;
                var current = 1;
                var answers = {};

                var titles = [
                    "What is your industry?",
                    "What type of website do you need?",
                    "How many pages will your website have?",
                    "What features does your website need?",
                    "Expected number of monthly visitors?",
                    "Do you have UI design mockups?",
                    "Compliance & integrations",
                    "Almost done — let's send your estimate!"
                ];

                /* ────────────────────────────────
                RENDER PROGRESS DOTS
                ──────────────────────────────── */
                function renderDots() {
                    var html = '';
                    for (var i = 1; i <= TOTAL; i++) {
                        var cls = 'step-dot';
                        if (i < current) cls += ' done';
                        else if (i === current) cls += ' active';
                        html += '<span class="' + cls + '"></span>';
                    }
                    $('#stepDots').html(html);
                }

                /* ────────────────────────────────
                UPDATE HEADER, PROGRESS & BUTTONS
                ──────────────────────────────── */
                function updateUI() {
                    $('#stepLabel').text('Step ' + current + ' of ' + TOTAL);
                    $('#stepTitle').text(titles[current - 1]);

                    var pct = (current / TOTAL * 100).toFixed(1);
                    $('#progressBar').css('width', pct + '%').attr('aria-valuenow', current);

                    if (current > 1) {
                        $('#prevBtn').removeClass('d-none');
                    } else {
                        $('#prevBtn').addClass('d-none');
                    }

                    $('#nextBtn').attr('step', current);
                    if (current === TOTAL) {
                        $('#nextBtn').html('Get My Estimate <i class="fa fa-send">');
                    } else {
                        $('#nextBtn').html('Continue <i class="fa fa-chevron-right ms-1"></i>');
                        $('#nextBtn').attr('type', 'button');
                    }

                    renderDots();
                }

                /* ────────────────────────────────
                SHOW A SPECIFIC STEP
                ──────────────────────────────── */
                function showStep(n) {
                    if (n < 1 || n > TOTAL) return;

                    $('.step-pane').removeClass('active');
                    $('.step-pane[data-step="' + n + '"]').addClass('active');
                    current = n;
                    updateUI();
                }

                /* ────────────────────────────────
                VALIDATE CURRENT STEP
                ──────────────────────────────── */
                function validate() {
                    var $pane = $('.step-pane[data-step="' + current + '"]');
                    var type = $pane.data('type');
                    var $err = $('#err' + current);

                    if (type === 'single') {
                        if ($pane.find('.option-card.selected').length === 0) {
                            $err.addClass('show');
                            return false;
                        }
                    }

                    if (type === 'contact') {
                        var name = $('#fname').val().trim();
                        var email = $('#email').val().trim();
                        var phone = $('#phone').val().trim();
                        var emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                        if (!name || !emailOk || !phone) {
                            $err.addClass('show');
                            return false;
                        }
                    }

                    $err.removeClass('show');
                    return true;
                }

                /* ────────────────────────────────
                SAVE ANSWERS FOR CURRENT STEP
                ──────────────────────────────── */
                function save() {
                    var $pane = $('.step-pane[data-step="' + current + '"]');
                    var type = $pane.data('type');

                    if (type === 'single') {
                        answers[current] = $pane.find('.option-card.selected').data('value') || null;

                    } else if (type === 'multi') {
                        answers[current] = $pane.find('.cb-item.checked').map(function () {
                            return $(this).data('value');
                        }).get();

                    } else if (type === 'mixed') {
                        answers[current + '_compliance'] = $pane.find('.cb-item.checked').map(function () {
                            return $(this).data('value');
                        }).get();
                        answers[current + '_integration'] = $pane.find('.integration-card.selected').data('value') || null;

                    } else if (type === 'contact') {
                        answers.fname = $('#fname').val().trim();
                        answers.email = $('#email').val().trim();
                        answers.phone = $('#phone').val().trim();
                        answers.url = $('#siteurl').val().trim();
                        answers.notes = $('#notes').val().trim();
                    }

                    if (current == 2) {
                        selectWebsiteFeatures(answers[2]);
                    }

                    $("#industry").val(answers[1]);
                    $("#websiteType").val(answers[2]);
                    $("#pageCount").val(answers[3]);
                    $("#features").val(answers[4]);
                    $("#traffic").val(answers[5]);
                    $("#design").val(answers[6]);
                    $("#compliance").val(answers['7_compliance']);
                    $("#integrations").val(answers['7_integration']);
                }

                function selectWebsiteFeatures(websiteType) {

                    if (websiteType == "corporate") {
                        $('.cb-item').removeClass('checked');
                        $('.cb-item[data-value="contact_forms"]').addClass('checked');
                        $('.cb-item[data-value="mobile"]').addClass('checked');
                        $('.cb-item[data-value="social_sharing"]').addClass('checked');
                        $('.cb-item[data-value="analytics"]').addClass('checked');
                        $('.cb-item[data-value="seo"]').addClass('checked');
                    } else if (websiteType == "ecommerce") {
                        $('.cb-item').removeClass('checked');
                        $('.cb-item[data-value="shopping_cart"]').addClass('checked');
                        $('.cb-item[data-value="user_content"]').addClass('checked');
                        $('.cb-item[data-value="mobile"]').addClass('checked');
                        $('.cb-item[data-value="analytics"]').addClass('checked');
                        $('.cb-item[data-value="seo"]').addClass('checked');
                    } else if (websiteType == "portfolio") {
                        $('.cb-item').removeClass('checked');
                        $('.cb-item[data-value="contact_forms"]').addClass('checked');
                        $('.cb-item[data-value="mobile"]').addClass('checked');
                        $('.cb-item[data-value="social_sharing"]').addClass('checked');
                        $('.cb-item[data-value="seo"]').addClass('checked');
                    } else if (websiteType == "news") {
                        $('.cb-item').removeClass('checked');
                        $('.cb-item[data-value="cms"]').addClass('checked');
                        $('.cb-item[data-value="social_sharing"]').addClass('checked');
                        $('.cb-item[data-value="analytics"]').addClass('checked');
                        $('.cb-item[data-value="seo"]').addClass('checked');
                        $('.cb-item[data-value="mobile"]').addClass('checked');
                    } else if (websiteType == "education") {
                        $('.cb-item').removeClass('checked');
                        $('.cb-item[data-value="user_content"]').addClass('checked');
                        $('.cb-item[data-value="cms"]').addClass('checked');
                        $('.cb-item[data-value="mobile"]').addClass('checked');
                        $('.cb-item[data-value="analytics"]').addClass('checked');
                    } else if (websiteType == "directory") {
                        $('.cb-item').removeClass('checked');
                        $('.cb-item[data-value="user_content"]').addClass('checked');
                        $('.cb-item[data-value="mobile"]').addClass('checked');
                        $('.cb-item[data-value="analytics"]').addClass('checked');
                    } else if (websiteType == "other") {
                        $('.cb-item').removeClass('checked');
                        $('.cb-item[data-value="user_content"]').addClass('checked');
                        $('.cb-item[data-value="api_integration"]').addClass('checked');
                        $('.cb-item[data-value="cms"]').addClass('checked');
                        $('.cb-item[data-value="mobile"]').addClass('checked');
                    }

                }

                /* ────────────────────────────────
                NEXT BUTTON
                ──────────────────────────────── */
                $('#nextBtn').on('click', function () {
                    if (!validate()) return;
                    save();
                    if (current == 8) {
                        // console.log(answers);
                        $('#nextBtn').attr('type', 'submit');
                        $('#costCalculatorForm').submit();
                    } else {
                        showStep(current + 1);
                    }


                });

                /* ────────────────────────────────
                BACK BUTTON
                ──────────────────────────────── */
                $('#prevBtn').on('click', function () {
                    if (current > 1) showStep(current - 1);
                });

                /* ────────────────────────────────
                SINGLE-SELECT OPTION CARDS
                ──────────────────────────────── */
                $(document).on('click', '.step-pane[data-type="single"] .option-card', function () {
                    var $pane = $(this).closest('.step-pane');
                    $pane.find('.option-card').removeClass('selected');
                    $(this).addClass('selected');
                    $('#err' + $pane.data('step')).removeClass('show');
                });

                /* ────────────────────────────────
                INTEGRATION CARDS (mixed step 7)
                ──────────────────────────────── */
                $(document).on('click', '.integration-card', function () {
                    $('.integration-card').removeClass('selected');
                    $(this).addClass('selected');
                });

                /* ────────────────────────────────
                CHECKBOX ITEMS (multi-select)
                ──────────────────────────────── */
                $(document).on('click', '.cb-item', function () {
                    $(this).toggleClass('checked');
                });

                /* ────────────────────────────────
                INIT
                ──────────────────────────────── */
                updateUI();

            });
        </script>
    <?php } ?>
<?php
}
add_action('wp_footer', 'elementor_footer_script');

/* custom code by amit for form reset issue ends*/
add_filter('wpseo_schema_webpage', '__return_false');
// Register the widget area
function emizen_enquiry_form_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Enquiry Main Form Widget'),
        'id' => 'mainenqueiform',
        'before_widget' => '<div class="enquiryform-widget">',
        'after_widget' => '</div> <!-- end .enquiryform-widget -->',
        'before_title' => '<h4 class="enquiryform-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'emizen_enquiry_form_widgets_init');

// Create shortcode to display the widget area
function enquiry_form_widget_shortcode()
{
    ob_start();
    if (is_active_sidebar('mainenqueiform')) {
        dynamic_sidebar('mainenqueiform');
    }
    return ob_get_clean();
}
add_shortcode('enquiry_form_widget', 'enquiry_form_widget_shortcode');

// Register the widget area for Lead Service Page Form
function emizen_lead_service_form_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Lead Service Page Form Widget'),
        'id' => 'leadserviceform',
        'before_widget' => '<div class="leadserviceform-widget">',
        'after_widget' => '</div> <!-- end .leadserviceform-widget -->',
        'before_title' => '<h4 class="leadserviceform-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'emizen_lead_service_form_widgets_init');

// Create shortcode to display the Lead Service Page Form widget area
function lead_service_form_widget_shortcode()
{
    ob_start();
    if (is_active_sidebar('leadserviceform')) {
        dynamic_sidebar('leadserviceform');
    }
    return ob_get_clean();
}
add_shortcode('lead_service_form_widget', 'lead_service_form_widget_shortcode');


// Allow SVG uploads
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Sanitize SVG uploads
function sanitize_svg($file, $url, $type)
{
    if ($type === 'image/svg+xml') {
        $file['type'] = 'image/svg+xml';
    }
    return $file;
}
add_filter('wp_check_filetype_and_ext', 'sanitize_svg', 10, 3);

add_theme_support('rank-math-breadcrumbs');

remove_filter('the_content', 'convert_smilies', 20);

// Add hreflang for countries pages

function add_hreflang_tags_for_child_pages()
{
    if (is_page()) {
        global $post;

        $parent_id = wp_get_post_parent_id($post->ID);

        $target_parent_id_sa = 18702;
        $target_parent_id_au = 18950;

        $current_url = get_permalink($post->ID);

        if ($parent_id == $target_parent_id_sa) {
            echo '<link rel="alternate" hreflang="en-SA" href="' . esc_url($current_url) . '" />' . "\n";
            echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($current_url) . '" />' . "\n";
        }

        if ($parent_id == $target_parent_id_au) {
            echo '<link rel="alternate" hreflang="en-AU" href="' . esc_url($current_url) . '" />' . "\n";
            echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($current_url) . '" />' . "\n";
        }
    }
    ?>
    <!-- <script>
        // Remove default hreflang tags added by Yoast SEO
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("portfolio-slider").style.display = "block";
        });
    </script> -->
    <?php
}
add_action('wp_head', 'add_hreflang_tags_for_child_pages');

// Register "Tech Board" Custom Post Type
function emzt_create_post_type()
{
    $labels = array(
        'name' => 'Tech Boards',
        'singular_name' => 'Tech Board',
        'menu_name' => 'Tech Boards',
        'name_admin_bar' => 'Tech Board',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Tech Board',
        'new_item' => 'New Tech Board',
        'edit_item' => 'Edit Tech Board',
        'view_item' => 'View Tech Board',
        'all_items' => 'All Tech Boards',
        'search_items' => 'Search Tech Boards',
        'parent_item_colon' => 'Parent Tech Boards:',
        'not_found' => 'No tech boards found.',
        'not_found_in_trash' => 'No tech boards found in Trash.'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'tech-board',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'sticky'),
        'menu_icon' => 'dashicons-chart-line',
    );

    register_post_type('tech-board', $args);
}
add_action('init', 'emzt_create_post_type');

function add_html_to_tech_board_cpt()
{
    // Add rewrite rule for tech-board CPT with .html extension
    add_rewrite_rule(
        '^tech-board/([^/]+)\.html$',
        'index.php?tech-board=$matches[1]',
        'top'
    );

    // Filter the post type link to add .html extension
    add_filter('post_type_link', function ($post_link, $post) {
        if ($post->post_type === 'tech-board') {
            // Remove trailing slash and add .html
            $post_link = rtrim($post_link, '/') . '.html';
        }
        return $post_link;
    }, 10, 2);

    // Block access to URLs without .html extension
    add_action('template_redirect', function () {
        if (is_singular('tech-board')) {
            $request_uri = $_SERVER['REQUEST_URI'];
            $parsed_url = parse_url($request_uri);
            $path = $parsed_url['path'];

            // If the URL doesn't end with .html, show 404
            if (substr($path, -5) !== '.html') {
                global $wp_query;
                $wp_query->set_404();
                status_header(404);
                get_template_part(404);
                exit();
            }
        }
    });
}
add_action('init', 'add_html_to_tech_board_cpt');

add_filter('user_trailingslashit', function ($string, $type) {
    global $wp_rewrite;

    // Only target single posts
    if ($type === 'single') {

        // Get current post type
        $post_type = get_post_type();

         // Skip for ecommerce_page and press_room CPTs (keep trailing slash)
        if (in_array($post_type, ['ecommerce_page', 'press_room'])) {
            return trailingslashit($string);
        }

        // Remove trailing slash for others
        if ($wp_rewrite->using_permalinks() && $wp_rewrite->use_trailing_slashes == true) {
            return untrailingslashit($string);
        }
    }

    return $string;
}, 66, 2);


// Register Custom Taxonomy for Tech Board
function emzt_tech_board_taxonomy()
{
    $args = array(
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Tech Board Categories',
            'singular_name' => 'Tech Board Category',
        ),
        'show_ui' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'tech-board-category'),
    );

    register_taxonomy('tech_board_category', array('tech-board'), $args);
}
add_action('init', 'emzt_tech_board_taxonomy');

function emz_get_read_time($post_id)
{
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(wp_strip_all_tags($content));
    $minutes = ceil($word_count / 200); // average reading speed
    return $minutes;
}

// Archive Meta Title
add_filter('rank_math/frontend/title', function ($title) {
    if (is_post_type_archive('tech-board')) {
        return 'Latest Tech Updates & Practical Guides | Emizentech Tech Board';
    }
    return $title;
});

// Archive Meta Description
add_filter('rank_math/frontend/description', function ($description) {
    if (is_post_type_archive('tech-board')) {
        return 'Get the latest tech news, AI & ML trends, blockchain insights, and practical guides to solve your tech queries at Emizentech Tech Board.';
    }
    return $description;
});

// Optional: Open Graph Title
add_filter('rank_math/opengraph/title', function ($og_title) {
    if (is_post_type_archive('tech-board')) {
        return 'Latest Tech Updates & Practical Guides | Emizentech Tech Board';
    }
    return $og_title;
});

// Optional: Open Graph Description
add_filter('rank_math/opengraph/description', function ($og_desc) {
    if (is_post_type_archive('tech-board')) {
        return 'Get the latest tech news, AI & ML trends, blockchain insights, and practical guides to solve your tech queries at Emizentech Tech Board.';
    }
    return $og_desc;
});

// Add custom button to editor
function emz_add_tinymce_button($buttons)
{
    array_push($buttons, "emz_q_cstm_box");
    array_push($buttons, "emz_cstm_box");
    return $buttons;
}
add_filter("mce_buttons", "emz_add_tinymce_button");

function emz_register_tinymce_plugin($plugin_array)
{
    $plugin_array['emz_q_cstm_box'] = get_stylesheet_directory_uri() . '/assets/js/emz-tinymce.js';
    $plugin_array['emz_cstm_box'] = get_stylesheet_directory_uri() . '/assets/js/emz-tinymce.js';
    return $plugin_array;
}
add_filter("mce_external_plugins", "emz_register_tinymce_plugin");

// Calculate reading time
function emzt_reading_time()
{
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $minutes = ceil($word_count / 200); // ~200 words per minute

    return $minutes . ' Mins Read';
}

// Frontend inline CSS
function emz_add_tinymce_css($mce_css)
{
    $custom_css = get_stylesheet_directory_uri() . '/assets/css/emz-editor.css';
    if (!empty($mce_css)) {
        $mce_css .= ',' . $custom_css;
    } else {
        $mce_css = $custom_css;
    }

    return $mce_css;
}
add_filter('mce_css', 'emz_add_tinymce_css');


add_action('wp_head', function () {
    echo '<style>
        .emz-cstm-box, .emz-q-cstm-box {
            border: 2px solid #d0edfd;
            box-shadow: none !important;
            border-radius: 0;
            position: relative;
            padding: 25px;
        }
        .emz-q-cstm-box:before{
            content: "";
            background-image: url(https://emizentech.com/blog/wp-content/uploads/sites/2/2025/09/ql-icon.svg);
            width: 44px;
            height: 44px;
            position: absolute;
            z-index: 1;
            top: -20px;
            right: -15px;
            background-size: 100%;
        }
    </style>';
});


add_action('init', function () {
    if (isset($_POST['newsletter_email'])) {

        $email = sanitize_email($_POST['newsletter_email']);
        if (!is_email($email))
            return;

        // 🔑 Your Resend API credentials
        $api_key = 're_Q4uTF7oQ_5EtAGYDCSoCpMVbueVuUCzdR'; // Full access key
        $audience_id = 'c3a72f3b-7895-4da4-829f-408f1198d30b'; // Your audience ID

        // ✅ Correct Resend endpoint for adding contacts
        $url = 'https://api.resend.com/audiences/' . $audience_id . '/contacts';

        $body = json_encode([
            'email' => $email,
            'unsubscribed' => false,
        ]);

        $response = wp_remote_post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $api_key,
                'Content-Type' => 'application/json',
            ],
            'body' => $body,
        ]);

        // ✅ Handle response
        if (!is_wp_error($response)) {
            $status_code = wp_remote_retrieve_response_code($response);
            if ($status_code == 200 || $status_code == 201) {
                wp_redirect(add_query_arg('subscribed', 'true', $_SERVER['HTTP_REFERER']));
                exit;
            } else {
                error_log('Resend API Response (' . $status_code . '): ' . wp_remote_retrieve_body($response));
            }
        } else {
            error_log('Resend API Error: ' . $response->get_error_message());
        }
    }
});


function emizen_add_editor_styles()
{
    add_editor_style('admin-editor.css');
}
add_action('admin_init', 'emizen_add_editor_styles');


// Add OG Type Meta Box
function emizen_add_og_type_metabox()
{
    add_meta_box(
        'emizen_og_type_box',
        'Custom Open Graph Type',
        'emizen_og_type_callback',
        ['page', 'post'],
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'emizen_add_og_type_metabox');

// Meta box HTML
function emizen_og_type_callback($post)
{
    $value = get_post_meta($post->ID, '_emizen_og_type', true);

    // nonce for security
    wp_nonce_field('emizen_og_type_save', 'emizen_og_type_nonce');
    ?>
    <label for="emizen_og_type">Select OG Type:</label>
    <select name="emizen_og_type" id="emizen_og_type" style="width:100%;">
        <option value="">Default</option>
        <option value="article" <?php selected($value, 'article'); ?>>article</option>
        <option value="website" <?php selected($value, 'website'); ?>>website</option>
        <option value="about us" <?php selected($value, 'about us'); ?>>about us</option>
        <option value="career" <?php selected($value, 'career'); ?>>career</option>
        <option value="case studies" <?php selected($value, 'case studies'); ?>>case studies</option>
        <option value="awards" <?php selected($value, 'awards'); ?>>awards</option>
        <option value="contact us" <?php selected($value, 'contact us'); ?>>contact us</option>
        <option value="portfolio" <?php selected($value, 'portfolio'); ?>>portfolio</option>
        <option value="partner" <?php selected($value, 'partner'); ?>>partner</option>
        <option value="whitepaper" <?php selected($value, 'whitepaper'); ?>>whitepaper</option>
        <option value="services" <?php selected($value, 'services'); ?>>services</option>
        <option value="industries" <?php selected($value, 'industries'); ?>>industries</option>
    </select>
    <?php
}
// Save OG Type
function emizen_save_og_type($post_id)
{

    // Ignore autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // Check nonce
    if (!isset($_POST['emizen_og_type_nonce']))
        return;
    if (!wp_verify_nonce($_POST['emizen_og_type_nonce'], 'emizen_og_type_save'))
        return;

    // Check permissions
    if (!current_user_can('edit_post', $post_id))
        return;

    // Save value
    if (isset($_POST['emizen_og_type'])) {
        update_post_meta($post_id, '_emizen_og_type', sanitize_text_field($_POST['emizen_og_type']));
    }
}
add_action('save_post', 'emizen_save_og_type');

add_filter('rank_math/opengraph/facebook/og_type', function ($type) {

    if (is_singular() && get_post_type() != 'tech-board') {
        $custom_type = get_post_meta(get_the_ID(), '_emizen_og_type', true);
        if (!empty($custom_type)) {
            return $custom_type; // force override
        } else {
            return 'services';
        }
    }

    return $type;
}, 9999); // HIGH PRIORITY

/**
 * Send email alert when WordPress login happens from NON-office IP
 * Cloudflare + proxy aware
 */

/**
 * Get real client IP address (Cloudflare + proxy aware)
 *
 * @return string
 */
function emizen_get_user_ip()
{

    $ip = '';

    // 1. Cloudflare (most reliable)
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {

        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];

        // 2. X-Forwarded-For (can contain multiple IPs)
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

        foreach ($ips as $ip_candidate) {
            $ip_candidate = trim($ip_candidate);

            if (filter_var($ip_candidate, FILTER_VALIDATE_IP)) {
                $ip = $ip_candidate;
                break;
            }
        }

        // 3. Other proxy header
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

        // 4. Fallback
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {

        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : '';
}

/**
 * Send login alert email for non-office IPs
 */
add_action('wp_login', 'emizen_login_ip_alert', 10, 2);

function emizen_login_ip_alert($user_login, $user)
{

    //  OFFICE IP(s)
    $office_ips = array(
        '14.99.117.230',
        '125.19.237.54',
        '122.184.140.6'
    );

    // Get user IP
    $user_ip = emizen_get_user_ip();

    if (empty($user_ip)) {
        $user_ip = 'IP Not Detected';
    }

    // Skip alert if office IP
    if (in_array($user_ip, $office_ips, true)) {
        return;
    }

    // Email details
    $to = 'info@emizentech.com';
    $subject = '⚠️ WordPress Login Alert – Non Office IP';

    $message = "Hello Team,\n\n";
    $message .= "A WordPress login detected from a NON-office IP.\n\n";
    $message .= "Username: {$user_login}\n";
    $message .= "Email: {$user->user_email}\n";
    $message .= "IP Address: {$user_ip}\n";
    $message .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n";
    $message .= "Date & Time: " . current_time('d M Y, h:i A') . "\n\n";
    $message .= "If this was not authorized, please take action immediately.\n\n";
    $message .= "— Emizentech Security\n";
    $message .= "https://emizentech.com";

    wp_mail($to, $subject, $message);
}

add_filter('the_content', 'custom_breadcrumbs_and_html', 9999);
function custom_breadcrumbs_and_html($content)
{
    global $post;

    $parent_title = get_post_meta($post->ID, '_ez_parent_title', true);
    $parent_link = get_post_meta($post->ID, '_ez_parent_link', true);
    $current_title = get_post_meta($post->ID, '_ez_current_title', true);

    $page_info = ez_get_page_info(get_the_ID());

    if(!empty($parent_title)){
        $p_title = $parent_title;
    } elseif(!empty($page_info['label'])) {
        $p_title = ucwords(str_replace('_', ' ', $page_info['label']));
    }else{
        $p_title = '';
    }
    
    if(!empty($parent_link)){
        $p_link = $parent_link;
    } elseif(!empty($page_info['link'])) {
        $p_link = $page_info['link'];
    }else{
        $p_link = '';
    }
    // $p_title = !empty($parent_title) ? $parent_title : $page_info['label'];
    // $p_link = !empty($parent_link) ? $parent_link : $page_info['link'];

    $slug = !empty($current_title) ? $current_title : get_post_field('post_name', $post->ID);

    if (!empty($p_title) && !empty($p_link) && !empty($slug)) {
        ob_start();

        ?>
        <script>
            jQuery(document).ready(function ($) {
                var brdcrm_html = '<ul class="cst-brdcrm px-0 d-flex breadcrumbs-header mb-0 justify-content-center justify-content-md-start text-center text-md-start <?php echo $page_info['label']; ?>">' +
                    '<li><a class="link" href="<?php echo home_url(); ?>">Home</a> /</li>' +
                    '<li class="pr-1"><a href="<?php echo $p_link; ?>"> <?php echo ucwords($p_title); ?></a> /</li>' +
                    '<li class="pr-1"><?php echo ucwords(str_replace('-', ' ', $slug)); ?></li>' +
                    '</ul>';
                $('.breadcrumbs').remove();
                if ($('.cst-brdcrm').length === 0) {
                    $('h1').before(brdcrm_html);
                }
            });
        </script>
        <style>
            ul.breadcrumbs {
                display: none !important;
            }

            ul.cst-brdcrm li,
            ul.cst-brdcrm li a {
                padding: 0 !important;
                font-size: 14px !important;
                background: #0000 !important;
                border: none !important;
                line-height: initial !important;
                margin-bottom: 20px;
            }

            ul.cst-brdcrm li a {
                text-decoration: underline;
                font-weight: 600 !important;
            }

            .white-sec ul.cst-brdcrm li,
            .white-sec ul.cst-brdcrm li a {
                color: #007db2 !important;
            }

            .blue-sec ul.cst-brdcrm li,
            .blue-sec ul.cst-brdcrm li a {
                color: #fff !important;
            }

            @media screen and (max-width: 520px) {

                ul.cst-brdcrm li,
                ul.cst-brdcrm li a {
                    font-size: 10px !important;
                }
            }

            /* ul.cst-brdcrm.hire_developer {
                        display: none !important;
                    } */
        </style>
        <?php
        $custom_html = ob_get_clean();
        return $custom_html . $content;
    }

    return $content;
}
;
add_action('admin_init', function () {
    register_setting(
        'ez_breadcrumbs_group',
        'ez_breadcrumbs_pages'
    );
});
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'toplevel_page_ez-breadcrumbs') {
        return;
    }
    wp_enqueue_style(
        'select2-css',
        'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
    );
    wp_enqueue_script(
        'select2-js',
        'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
        ['jquery'],
        null,
        true
    );
});
add_action('admin_menu', function () {

    add_menu_page(
        'EZ Breadcrumbs',          // Page title
        'EZ Breadcrumbs',          // Menu title
        'manage_options',          // Capability
        'ez-breadcrumbs',          // Menu slug
        'ez_breadcrumbs_admin_page', // Callback
        'dashicons-editor-ol',     // Icon
        25                         // Position
    );
});

function ez_breadcrumbs_admin_page()
{

    if (isset($_POST['ez_breadcrumbs_save'])) {

        $data = $_POST['ez_breadcrumbs_pages'] ?? [];

        update_option('ez_breadcrumbs_pages', $data);

        echo '<div class="updated notice"><p>Settings saved.</p></div>';
    }

    $values = get_option('ez_breadcrumbs_pages', []);

    $pages = get_pages(['post_status' => 'publish']);

    $fields = [
        'company' => 'Company',
        'services' => 'Services',
        'technology' => 'Technology',
        'solution' => 'Solution',
        'industries' => 'Industries',
        'hire_developer' => 'Hire Developer'
    ];

    ?>

    <div class="wrap">
        <h1>EZ Breadcrumbs</h1>

        <form method="post">

            <table class="form-table">

                <?php foreach ($fields as $key => $label):

                    $selected = $values[$key]['pages'] ?? [];
                    $link = $values[$key]['link'] ?? '';

                    ?>

                    <tr>
                        <th scope="row"><?php echo esc_html($label); ?></th>

                        <td>

                            <select class="ez-select2" name="ez_breadcrumbs_pages[<?php echo $key; ?>][pages][]" multiple
                                style="width:400px;">

                                <?php foreach ($pages as $page): ?>

                                    <option value="<?php echo $page->ID; ?>" <?php if (in_array($page->ID, $selected))
                                           echo 'selected'; ?>>

                                        <?php echo esc_html($page->post_name); ?>

                                    </option>

                                <?php endforeach; ?>

                            </select>

                            <br><br>

                            <input type="text" name="ez_breadcrumbs_pages[<?php echo $key; ?>][link]"
                                value="<?php echo esc_attr($link); ?>" placeholder="Custom Link" style="width:400px;">

                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>

            <p>
                <button type="submit" name="ez_breadcrumbs_save" class="button button-primary">
                    Save Settings
                </button>
            </p>

        </form>
    </div>

    <script>
        jQuery(document).ready(function ($) {
            $('.ez-select2').select2({
                placeholder: "Select pages",
                width: 'resolve'
            });
        });
    </script>

    <?php
}

function ez_get_page_info($page_id)
{

    $data = get_option('ez_breadcrumbs_pages', []);

    $filtered = array_filter($data, function ($item) use ($page_id) {
        return in_array($page_id, (array) ($item['pages'] ?? []));
    });

    if (!$filtered) {
        return false;
    }

    $label = key($filtered);

    return [
        'label' => $label,
        'link' => $filtered[$label]['link'] ?? ''
    ];
}

add_filter('rank_math/opengraph/facebook/og_title', function ($title) {
    $seo = get_post_meta(get_the_ID(), 'rank_math_title', true);
    return $seo ? $seo : get_the_title();
});

add_filter('rank_math/opengraph/facebook/og_description', function ($desc) {
    $seo = get_post_meta(get_the_ID(), 'rank_math_description', true);
    return $seo ? $seo : get_bloginfo('description');
});

add_filter('rank_math/opengraph/twitter/twitter_title', function ($title) {
    $seo = get_post_meta(get_the_ID(), 'rank_math_title', true);
    return $seo ? $seo : get_the_title();
});

add_filter('rank_math/opengraph/twitter/twitter_description', function ($desc) {
    $seo = get_post_meta(get_the_ID(), 'rank_math_description', true);
    return $seo ? $seo : get_bloginfo('description');
});

remove_action('rank_math/head', 'rank_math/frontend/canonical', 20);

add_action('wp_head', function () {

    // Skip homepage
    if (is_front_page() || is_home()) {
        return;
    }

    global $wp;
    $url = home_url($wp->request);
    if (strpos($wp->request, '.html')) {
        echo '<link rel="canonical" href="' . esc_url($url) . '" />';
    } else {
        echo '<link rel="canonical" href="' . esc_url($url) . '/" />';
    }

}, 99);

add_filter('rank_math/frontend/description', function ($desc) {
    return get_post_meta(get_the_ID(), 'rank_math_description', true);
});

add_filter('pre_get_document_title', function ($title) {
    $seo = get_post_meta(get_the_ID(), 'rank_math_title', true);
    return $seo ? $seo : $title;
});

// update breadcrumb format

add_filter('saswp_modify_breadcrumb_output', 'modify_saswp_breadcrumb', 10, 1);

function modify_saswp_breadcrumb($breadcrumbs)
{

    $page_info = ez_get_page_info(get_the_ID());

    $parent_title = get_post_meta(get_the_ID(), '_ez_parent_title', true);
    $parent_link = get_post_meta(get_the_ID(), '_ez_parent_link', true);

    if(!empty($parent_title)){
        $p_title = $parent_title;
    } elseif(!empty($page_info['label'])) {
        $p_title = ucwords(str_replace('_', ' ', $page_info['label']));
    }else{
        $p_title = '';
    }
    
    if(!empty($parent_link)){
        $p_link = $parent_link;
    } elseif(!empty($page_info['link'])) {
        $p_link = $page_info['link'];
    }else{
        $p_link = '';
    }
    
    // $p_title = !empty($parent_title) ? $parent_title : ucwords(str_replace('_', ' ', $page_info['label']));
    // $p_link = !empty($parent_link) ? $parent_link : $page_info['link'];

    if (!isset($p_title) || !isset($p_link))
        return $breadcrumbs;

    $new_item = [
        '@type' => 'ListItem',
        'position' => 2,
        'item' => [
            '@id' => $p_link,
            'name' => $p_title,
        ]
    ];

    // Insert custom breadcrumb after Home
    array_splice($breadcrumbs['itemListElement'], 1, 0, [$new_item]);

    // Reset positions
    foreach ($breadcrumbs['itemListElement'] as $i => &$crumb) {
        $crumb['position'] = $i + 1;
    }

    return $breadcrumbs;
}

// Add breadcrumb fields into the pages

add_action('add_meta_boxes', function () {
    add_meta_box(
        'ez_breadcrumb_meta',
        'EZ Breadcrumb',
        'ez_breadcrumb_meta_callback',
        'page',
        'normal',
        'high'
    );
});

function ez_breadcrumb_meta_callback($post)
{

    // Security nonce
    wp_nonce_field('ez_breadcrumb_nonce_action', 'ez_breadcrumb_nonce');

    // Get saved values
    $parent_title = get_post_meta($post->ID, '_ez_parent_title', true);
    $parent_link = get_post_meta($post->ID, '_ez_parent_link', true);
    $current_title = get_post_meta($post->ID, '_ez_current_title', true);
    ?>

    <p>
        <label><strong>Parent Page Title</strong></label><br>
        <input type="text" name="ez_parent_title" value="<?php echo esc_attr($parent_title); ?>" style="width:100%;">
    </p>

    <p>
        <label><strong>Parent Page Link</strong></label><br>
        <input type="url" name="ez_parent_link" value="<?php echo esc_attr($parent_link); ?>" style="width:100%;">
    </p>

    <p>
        <label><strong>Current Page Title</strong></label><br>
        <input type="text" name="ez_current_title" value="<?php echo esc_attr($current_title); ?>" style="width:100%;">
    </p>

    <?php
}

add_action('save_post', function ($post_id) {

    // Check nonce
    if (
        !isset($_POST['ez_breadcrumb_nonce']) ||
        !wp_verify_nonce($_POST['ez_breadcrumb_nonce'], 'ez_breadcrumb_nonce_action')
    ) {
        return;
    }

    // Prevent autosave overwrite
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // Check permissions
    if (!current_user_can('edit_post', $post_id))
        return;

    // Only for pages
    if (get_post_type($post_id) !== 'page')
        return;

    // Sanitize & save
    if (isset($_POST['ez_parent_title'])) {
        update_post_meta($post_id, '_ez_parent_title', sanitize_text_field($_POST['ez_parent_title']));
    }

    if (isset($_POST['ez_parent_link'])) {
        update_post_meta($post_id, '_ez_parent_link', esc_url_raw($_POST['ez_parent_link']));
    }

    if (isset($_POST['ez_current_title'])) {
        update_post_meta($post_id, '_ez_current_title', sanitize_text_field($_POST['ez_current_title']));
    }

});



// Press Room Code

// Register Press Room CPT
add_action('init', function () {

    register_post_type('press_room', array(
        'labels' => array(
            'name' => 'Press Room',
            'singular_name' => 'Press Item',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Press Item',
            'edit_item' => 'Edit Press Item',
            'new_item' => 'New Press Item',
            'view_item' => 'View Press Item',
            'search_items' => 'Search Press Room',
            'not_found' => 'No Press Items Found',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'elementor', 'sticky'),


        'rewrite' => array(
            'slug' => 'press-room',
            'with_front' => false,
        ),
        'show_in_rest' => true,
    ));

});

// Register Press Categories
add_action('init', function () {

    register_taxonomy('press_category', 'press_room', array(
        'labels' => array(
            'name' => 'Press Room Categories',
            'singular_name' => 'Press Room Category',
            'search_items' => 'Search Categories',
            'all_items' => 'All Categories',
            'edit_item' => 'Edit Category',
            'add_new_item' => 'Add New Category',
        ),
        'hierarchical' => true, // ✅ like categories
        'public' => true,
        'show_admin_column' => true,
        'rewrite' => array(
            'slug' => 'press-room-category'
        ),
        'show_in_rest' => true,
    ));

});

add_filter('template_include', function ($template) {

    if (is_singular('press_room')) {

        $new_template = get_stylesheet_directory() . '/single-press_room.php';

        if (file_exists($new_template)) {
            return $new_template;
        }
    }

    return $template;
});

function load_more_press($request)
{
    $category = $_POST['category'];
    $offset = $_POST['offset'];
    $posts_per_page = $_POST['posts_per_page'];

    if ($category == 'all') {
        $args = array(
            'post_type' => 'press_room',
            'posts_per_page' => $posts_per_page,
            'orderby' => 'date',
            'order' => 'DESC',
            'offset' => $offset,
        );
    } else {
        $args = array(
            'post_type' => 'press_room',
            'posts_per_page' => $posts_per_page,
            'orderby' => 'date',
            'order' => 'DESC',
            'offset' => $offset,
            'tax_query' => array(
                array(
                    'taxonomy' => 'press_category',
                    'field' => 'slug',
                    'terms' => $category,
                ),
            ),
        );
    }

    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="col-md-4">
                <div class="press-card">
                    <?php the_post_thumbnail('medium_large', array('class' => 'press-img')); ?>
                    <div class="press-body">
                        <span class="badge-custom"><?php echo get_the_terms(get_the_ID(), 'press_category')[0]->name; ?></span>
                        <div class="press-title">
                            <?php the_title(); ?>
                        </div>
                        <div class="press-desc">
                            <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                        </div>
                        <div class="press-footer">
                            <span><?php echo get_the_date(); ?></span>
                            <span class="read-time">3 min read →</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    wp_reset_postdata();
    $response = ob_get_clean();
    echo $response;
    wp_die();
}
add_action('wp_ajax_load_more_press', 'load_more_press');
add_action('wp_ajax_nopriv_load_more_press', 'load_more_press');

// Add featured checkbox to press room post type
function add_featured_checkbox()
{
    add_meta_box(
        'featured-checkbox',
        'Featured',
        'featured_checkbox_callback',
        'press_room',
        'side'
    );
}
add_action('add_meta_boxes', 'add_featured_checkbox');

function featured_checkbox_callback($post)
{
    wp_nonce_field('save_featured', 'featured_nonce');
    $featured = get_post_meta($post->ID, 'is_featured', true);
    ?>
    <label>
        <input type="checkbox" name="is_featured" value="1" <?php checked($featured, '1'); ?> />
        Mark as Featured
    </label>
    <?php
}

function save_featured_meta($post_id)
{
    if (!isset($_POST['featured_nonce']) || !wp_verify_nonce($_POST['featured_nonce'], 'save_featured')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    update_post_meta($post_id, 'is_featured', isset($_POST['is_featured']) ? '1' : '');
}
add_action('save_post', 'save_featured_meta');


// get post read time by post id
function get_post_read_time($post_id)
{
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Assuming 200 words per minute
    return $reading_time;
}

function emz_reading_time($post_id = null)
{
    $post_id = $post_id ? $post_id : get_the_ID();

    $content = get_post_field('post_content', $post_id);
    $content = strip_tags($content);

    $word_count = str_word_count($content);
    $reading_time = ceil($word_count / 200);

    return $reading_time;
}



// ── Press Room: Search ──────────────────────────────────────────────
add_action('wp_ajax_press_search', 'press_search_handler');
add_action('wp_ajax_nopriv_press_search', 'press_search_handler');

function press_search_handler()
{
    check_ajax_referer('press_search_nonce', 'nonce');

    $query = sanitize_text_field($_POST['query'] ?? '');
    $category = sanitize_text_field($_POST['category'] ?? 'all');

    if (strlen($query) < 3) {
        wp_send_json_error('Query too short');
    }

    $args = array(
        'post_type' => 'press_room',
        'posts_per_page' => -1,
        's' => $query,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    if ($category !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'press_category',
                'field' => 'slug',
                'terms' => $category,
            )
        );
    }

    $q = new WP_Query($args);

    if (!$q->have_posts()) {
        wp_send_json_success(array('html' => '', 'count' => 0));
    }

    ob_start();
    while ($q->have_posts()) {
        $q->the_post();
        $terms = get_the_terms(get_the_ID(), 'press_category');
        ?>
        <div class="col-md-4">
            <div class="press-card">
                <?php the_post_thumbnail('medium_large', ['class' => 'press-img img-fluid']); ?>
                <div class="press-body">
                    <span class="badge-custom">
                        <?php echo esc_html($terms ? $terms[0]->name : ''); ?>
                    </span>
                    <div class="press-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="press-desc">
                        <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                    </div>
                    <div class="press-footer">
                        <span><?php echo get_the_date(); ?></span>
                        <span class="read-time"><?php echo get_post_read_time(get_the_ID()); ?> min read →</span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();

    $html = ob_get_clean();
    wp_send_json_success(array('html' => $html, 'count' => $q->found_posts));
}


// ── Press Room: Load More (search-aware) ────────────────────────────
add_action('wp_ajax_press_load_more', 'press_load_more_handler');
add_action('wp_ajax_nopriv_press_load_more', 'press_load_more_handler');

function press_load_more_handler()
{
    check_ajax_referer('press_search_nonce', 'nonce');

    $category = sanitize_text_field($_POST['category'] ?? 'all');
    $offset = intval($_POST['offset'] ?? 6);
    $query = sanitize_text_field($_POST['query'] ?? '');

    $args = array(
        'post_type' => 'press_room',
        'posts_per_page' => 6,
        'offset' => $offset,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    if (!empty($query))
        $args['s'] = $query;

    if ($category !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'press_category',
                'field' => 'slug',
                'terms' => $category,
            )
        );
    }

    $q = new WP_Query($args);
    if (!$q->have_posts())
        wp_send_json_error();

    ob_start();
    while ($q->have_posts()) {
        $q->the_post();
        $terms = get_the_terms(get_the_ID(), 'press_category');
        ?>
        <div class="col-md-4">
            <div class="press-card">
                <?php the_post_thumbnail('medium_large', ['class' => 'press-img img-fluid']); ?>
                <div class="press-body">
                    <span class="badge-custom">
                        <?php echo esc_html($terms ? $terms[0]->name : ''); ?>
                    </span>
                    <div class="press-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="press-desc">
                        <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                    </div>
                    <div class="press-footer">
                        <span><?php echo get_the_date(); ?></span>
                        <span class="read-time"><?php echo get_post_read_time(get_the_ID()); ?> min read →</span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();

    wp_send_json_success(array('html' => ob_get_clean(), 'count' => $q->post_count));
}



// Register Ecommerce Pages CPT
add_action('init', function () {

    register_post_type('ecommerce_page', array(
        'labels' => array(
            'name' => 'Ecommerce Pages',
            'singular_name' => 'Ecommerce Page',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Ecommerce Page',
            'edit_item' => 'Edit Ecommerce Page',

        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail', 'elementor', 'page-attributes'),
        'rewrite' => array(
            'slug' => 'ecommerce',
            'with_front' => false,
            'hierarchical' => true
        ),
        'show_in_rest' => true,
    ));

});
add_filter('template_include', function ($template) {

    if (is_singular('ecommerce_page')) {

        $new_template = get_stylesheet_directory() . '/single-ecommerce_page.php';

        if (file_exists($new_template)) {
            return $new_template;
        }
    }

    return $template;
});


// Archive Meta Title
add_filter('pre_get_document_title', function ($title) {
    $rankmath_titles = get_option('rank-math-options-titles');
    $value = $rankmath_titles['pt_ecommerce_page_archive_title'] ?? '';
    if (is_post_type_archive('ecommerce_page') && !empty($value)) {
        return $value;
    }
    return $title;
}, 99);

// Archive Meta Description
add_filter('rank_math/frontend/description', function ($desc) {
    $rankmath_titles = get_option('rank-math-options-titles');
    $value = $rankmath_titles['pt_ecommerce_page_archive_description'] ?? '';
    if (is_post_type_archive('ecommerce_page') && !empty($value)) {
        return $value;
    }
    return $desc;
}, 99);

add_filter('rank_math/opengraph/facebook/og_title', function ($title) {
    $rankmath_titles = get_option('rank-math-options-titles');
    $value = $rankmath_titles['pt_ecommerce_page_archive_title'] ?? '';
    if (is_post_type_archive('ecommerce_page') && !empty($value)) {
        return $value;
    }
    return $title;
});

add_filter('rank_math/opengraph/facebook/og_description', function ($desc) {
    $rankmath_titles = get_option('rank-math-options-titles');
    $value = $rankmath_titles['pt_ecommerce_page_archive_description'] ?? '';
    if (is_post_type_archive('ecommerce_page') && !empty($value)) {
        return $value;
    }
    return $desc;
});

add_filter('rank_math/opengraph/twitter/twitter_title', function ($title) {
    $rankmath_titles = get_option('rank-math-options-titles');
    $value = $rankmath_titles['pt_ecommerce_page_archive_title'] ?? '';
    if (is_post_type_archive('ecommerce_page') && !empty($value)) {
        return $value;
    }
    return $title;
});

add_filter('rank_math/opengraph/twitter/twitter_description', function ($desc) {
    $rankmath_titles = get_option('rank-math-options-titles');
    $value = $rankmath_titles['pt_ecommerce_page_archive_description'] ?? '';
    if (is_post_type_archive('ecommerce_page') && !empty($value)) {
        return $value;
    }
    return $desc;
});




function set_gclid_hidden_field()
{
    ?>
    <script>
        jQuery(document).ready(function ($) {

            // Get URL Parameters
            const urlParams = new URLSearchParams(window.location.search);

            // Get GCLID
            const gclid = urlParams.get('gclid');

            if (gclid) {

                // Set Elementor hidden field value
                $('input[name="form_fields[gclid_field]"]').val(gclid);

                // Save in localStorage
                localStorage.setItem('gclid', gclid);

                //console.log('GCLID:', gclid);

            } else {

                // Use saved GCLID if available
                const savedGclid = localStorage.getItem('gclid');

                if (savedGclid) {

                    $('input[name="form_fields[gclid_field]"]').val(savedGclid);

                   // console.log('Saved GCLID:', savedGclid);
                }
            }

        });
    </script>
    <?php
}
add_action('wp_footer', 'set_gclid_hidden_field');

