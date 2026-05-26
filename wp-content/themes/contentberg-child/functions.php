<?php
/**
 * ContentBerg Child Theme functions.php
 *
 * Please refer to contentberg/functions.php about framework setup.
 */

/**
 * Enqueue the CSS. Please note the CSS order is as follows:
 *
 *  - contentberg/style.css
 *  - contentberg/css/skin-XYZ.css
 *  - contentberg-child/style.css
 *  - Inline Custom CSS from Customize
 */
function my_ts_enqueue_parent() {

    wp_enqueue_style(
        'contentberg-core', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        Bunyad::options()->get_config('theme_version')
    );
}

function my_ts_enqueue_child() {
    wp_enqueue_style(
        'contentberg-child', 
        get_stylesheet_uri(),
        array(), 
        '2.4'
    );
}


// Enqueue parent CSS at priority 9 as skin and other CSS generates at priority 10
add_action('wp_enqueue_scripts', 'my_ts_enqueue_parent', 9);
// Change 11 to 100 to make it enqueue AFTER Custom CSS from Customize
add_action('wp_enqueue_scripts', 'my_ts_enqueue_child', 11);
// Disable parent CSS enqueue
add_filter('bunyad_enqueue_core_css', '__return_false');
/*Write here your own functions */
function wpb_widgets_init_footer() {
 
    register_sidebar( array(
        'name'          => 'Custom footer Section',
        'id'            => 'custom-footer-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
       
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init_footer' );


// Remove <link rel='shortlink' ... /> from the head
function emz_remove_shortlink() {
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
}
add_action( 'init', 'emz_remove_shortlink' );



// Register the widget area for Lead Service Page Form
function emizen_sidebar_form_widgets_init() {
  register_sidebar( array(
    'name' => esc_html__( 'sidebar Form Widget'),
    'id' => 'sidebar-10',
    'before_widget' => '<div class="leadserviceform-widget">',
    'after_widget' => '</div> <!-- end .leadserviceform-widget -->',
    'before_title' => '<h4 class="leadserviceform-title">',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'emizen_sidebar_form_widgets_init' );


add_filter( 'rank_math/sitemap/url', function( $output, $url ) {
 
    // Check for exact match without trailing slash
    if ( untrailingslashit( $url['loc'] ) === 'https://emizentech.com/blog' ) {
 
        // Force trailing slash
        $new_url = 'https://emizentech.com/blog/';
 
        // Replace <loc> tag in the output
        $output = preg_replace(
            '/<loc>.*<\/loc>/',
            '<loc>' . esc_url( $new_url ) . '</loc>',
            $output
        );
    }
 
    return $output;
}, 9999, 2 );



// Register the widget area for Lead Service Page Form
function emizen_table_sidebar_widgets_init() {
  register_sidebar( array(
    'name' => esc_html__( 'Table Social Sidebar Single Post'),
    'id' => 'table_social_sidebar',
    'before_widget' => '<div class="tbl-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="tble-title">',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'emizen_table_sidebar_widgets_init' );

// Register the widget area for Lead Service Page Form
function emizen_lead_service_form_widgets_init() {
  register_sidebar( array(
    'name' => esc_html__( 'Lead Service Page Form Widget'),
    'id' => 'leadserviceform',
    'before_widget' => '<div class="leadserviceform-widget">',
    'after_widget' => '</div> <!-- end .leadserviceform-widget -->',
    'before_title' => '<h4 class="leadserviceform-title">',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'emizen_lead_service_form_widgets_init' );

// Create shortcode to display the Lead Service Page Form widget area
function lead_service_form_widget_shortcode() {
  ob_start();
  if ( is_active_sidebar( 'leadserviceform' ) ) {
    dynamic_sidebar( 'leadserviceform' );
  }
  return ob_get_clean();
}
add_shortcode( 'lead_service_form_widget', 'lead_service_form_widget_shortcode' );


add_filter( 'rank_math/frontend/breadcrumb/items', function( $crumbs, $class ) {
    // Get the current site URL
    $current_site_url = get_site_url();
    
    // Check if the site URL is "https://emizentech.com/blog"
    if ( $current_site_url === 'https://emizentech.com/blog' ) {
        // Add "Home" link at the first position
        array_unshift( $crumbs, [ 'Home', 'https://emizentech.com/' ] );
    }
    
    return $crumbs;
}, 10, 2);


add_filter( 'rank_math/frontend/canonical', function( $canonical ) {
    if ( is_front_page() || is_home() ) {
        $canonical = trailingslashit( home_url() );
    }
    return $canonical;
});

add_filter( 'rank_math/frontend/next_rel_link', function( $url ) {
    // Remove the rel="next" tag only on homepage
    if ( is_front_page() || is_home() ) {
        return false;
    }
    return $url;
});



function emztk_modelpopuppost_widgets_init() {
  register_sidebar( array(
    'name' => esc_html__( 'Model Popup Widget Post'),
    'id' => 'model-popup-sidebar-from-post',
    'before_widget' => '<div class="modelpopup-widget-post">',
    'after_widget' => '</div> <!-- end .modelpopup-widget-post -->',
    'before_title' => '<h4 class="modelpopup-title-post">',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'emztk_modelpopuppost_widgets_init' );

// Custom Category Tabs Widget with Checkbox Category Selection
class Custom_Category_Tabs_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_category_tabs_widget', // Base ID
            __('Category Tabs with Latest Posts', 'text_domain'), // Name
            array('description' => __('Displays tabs for selected categories with the latest posts', 'text_domain')) // Args
        );
    }

    // Frontend display of the widget
    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Generate a unique ID for this widget instance
        $widget_id = $this->id;

        // Display widget title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Fetch selected categories
        $selected_categories = !empty($instance['categories']) ? $instance['categories'] : array();

        if (!empty($selected_categories)) {
            echo '<div id="category-tabs-' . esc_attr($widget_id) . '" class="category-tabs-widget">';
            echo '<ul class="tabs">';

            // Display tabs for selected categories
            foreach ($selected_categories as $category_id) {
                $category = get_category($category_id);
                if ($category) {
                    echo '<li><a href="#" class="tab" data-widget-id="' . esc_attr($widget_id) . '" data-category-id="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</a></li>';
                }
            }

            echo '</ul>';

            // Display posts for each selected category in hidden divs
            echo '<div class="tab-content">';
            foreach ($selected_categories as $category_id) {
                $category = get_category($category_id);
                if ($category) {
                    $latest_posts = new WP_Query(array(
                        'category__in' => array($category->term_id),
                        'posts_per_page' => 6,
                    ));

                    echo '<div class="category-posts" id="category-' . esc_attr($widget_id) . '-' . esc_attr($category->term_id) . '" style="display:none;">';
                    if ($latest_posts->have_posts()) {
                        while ($latest_posts->have_posts()) {
                            $latest_posts->the_post();

                            // Display post details (thumbnail, title, excerpt)
                            echo '<div class="cat_posts_colunm">';
                             if (has_post_thumbnail()) {
                                echo '<div class="post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'full') . '</div>';
                            }
                             // Display the post title with a link
                            echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';

                            // Display the post excerpt
                            echo '<div class="post-contentj">' . get_the_content() . '</div>';

                            // Display the category(ies) as a link
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<div class="post-catj">';
                                foreach ($categories as $category) {
                                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="post-category">' . esc_html($category->name) . '</a> ';
                                }
                                echo '</div>';
                            }
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No posts available in this category.</p>';
                    }
                    echo '</div>';
                    wp_reset_postdata();
                }
            }
            echo '</div>';
            echo '</div>';
        }

        echo $args['after_widget'];
    }

    // Widget backend form
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Category Tabs', 'text_domain');
        $selected_categories = !empty($instance['categories']) ? $instance['categories'] : array();

        // Fetch all categories
        $categories = get_categories(array(
            'orderby' => 'name',
            'order' => 'ASC',
        ));
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" 
                   type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('categories')); ?>"><?php esc_attr_e('Select Categories:', 'text_domain'); ?></label><br>
            <?php
            // Loop through categories and create checkboxes
            foreach ($categories as $category) {
                $checked = in_array($category->term_id, $selected_categories) ? 'checked' : '';
                echo '<input type="checkbox" id="' . esc_attr($this->get_field_id('categories') . '-' . $category->term_id) . '" 
                           name="' . esc_attr($this->get_field_name('categories')) . '[]" value="' . esc_attr($category->term_id) . '" ' . $checked . ' />
                      <label for="' . esc_attr($this->get_field_id('categories') . '-' . $category->term_id) . '">' . esc_html($category->name) . '</label><br>';
            }
            ?>
        </p>
        <?php
    }

    // Save widget settings
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['categories'] = (!empty($new_instance['categories'])) ? $new_instance['categories'] : array();
        return $instance;
    }
}

// Register the widget
function register_custom_category_tabs_widget() {
    register_widget('Custom_Category_Tabs_Widget');
}
add_action('widgets_init', 'register_custom_category_tabs_widget');

// Enqueue scripts and styles
function category_tabs_widget_scripts() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.category-tabs-widget').each(function() {
                var widgetId = $(this).attr('id');

                $('#' + widgetId + ' .tabs a').click(function(event) {
                    event.preventDefault();

                    var categoryId = $(this).data('category-id');
                    var widgetId = $(this).data('widget-id');

                    // Hide all category posts within this widget
                    $('#' + widgetId + ' .category-posts').hide();

                    // Show the selected category's posts
                    $('#category-' + widgetId + '-' + categoryId).show();

                    // Remove the active class from all tabs within this widget
                    $('#' + widgetId + ' .tabs a').removeClass('active');

                    // Add the active class to the clicked tab
                    $(this).addClass('active');
                });

                // Show the first category by default for this widget
                $('#' + widgetId + ' .tabs a:first').addClass('active');
                $('#' + widgetId + ' .category-posts:first').show();
            });
        });

    </script>
    <style>
        .category-tabs-widget .tabs { list-style: none; padding: 0; margin: 0; }
        .category-tabs-widget .tabs li { display: inline-block; margin-right: 10px; }
        .category-tabs-widget .tabs a { text-decoration: none; padding: 10px; background: #f1f1f1; border-radius: 4px; }
        .category-tabs-widget .tabs a.active { background: #0073aa; color: white; }
        .category-tabs-widget .tab-content .category-posts { display: none; }
    </style>
    <?php
}
add_action('wp_footer', 'category_tabs_widget_scripts');



// Register the Latest Posts Widget
function register_latest_posts_widget() {
    register_widget('Latest_Posts_Widget');
}
add_action('widgets_init', 'register_latest_posts_widget');

// Define the Latest Posts Widget Class
class Latest_Posts_Widget extends WP_Widget {

    // Set up widget options
    function __construct() {
        parent::__construct(
            'latest_posts_widget', // Base ID
            'Latest Posts Widget', // Name
            array('description' => __('Displays the latest posts with thumbnails and excerpts.', 'text_domain'))
        );
    }

    // Widget output in frontend
    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Widget title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Get the number of posts to display from the widget settings, default to 6
        $posts_per_page = !empty($instance['posts_per_page']) ? $instance['posts_per_page'] : 6;

        // Query latest posts
        $query = new WP_Query(array(
            'posts_per_page' => $posts_per_page, // Number of posts to display
            'post_status' => 'publish',
        ));

        if ($query->have_posts()) :
        ?>
            <div class="mainbloghome">
                <div class="latest_postsec">
                    <div class="latest-posts">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="post-item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                    <div class="post-content">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                        <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>" class="category-link">
                                            <?php echo get_the_category()[0]->name; ?>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php
        endif;

        wp_reset_postdata();

        echo $args['after_widget'];
    }

    // Backend settings for the widget
    public function form($instance) {
        $title = isset($instance['title']) ? $instance['title'] : __('Latest Posts', 'text_domain');
        $posts_per_page = isset($instance['posts_per_page']) ? $instance['posts_per_page'] : 6;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('posts_per_page'); ?>"><?php _e('Number of posts to display:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('posts_per_page'); ?>" name="<?php echo $this->get_field_name('posts_per_page'); ?>" type="number" value="<?php echo esc_attr($posts_per_page); ?>" min="1" />
        </p>
        <?php
    }

    // Saving the widget settings
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['posts_per_page'] = (int) $new_instance['posts_per_page']; // Sanitize the number of posts
        return $instance;
    }
}


// Register the Category List Widget
function register_category_list_widget() {
    register_widget('Category_List_Widget');
}
add_action('widgets_init', 'register_category_list_widget');

// Define the Category List Widget Class
class Category_List_Widget extends WP_Widget {

    // Set up widget options
    function __construct() {
        parent::__construct(
            'category_list_widget', // Base ID
            'Category List Widget', // Name
            array('description' => __('Displays a list of selected categories with links.', 'text_domain'))
        );
    }

    // Widget output in frontend
    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Widget title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Get selected categories from widget settings
        $categories = !empty($instance['categories']) ? $instance['categories'] : array();

        if (!empty($categories)) :
            echo '<ul class="category-list">';
            foreach ($categories as $category_id) {
                $category = get_category($category_id);
                if ($category) {
                    echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                }
            }
            echo '</ul>';
        else :
            echo '<p>No categories selected.</p>';
        endif;

        echo $args['after_widget'];
    }

    // Backend settings for the widget
    public function form($instance) {
        $title = isset($instance['title']) ? $instance['title'] : __('Category List', 'text_domain');
        $selected_categories = isset($instance['categories']) ? $instance['categories'] : array();

        // Get all categories
        $categories = get_categories(array('hide_empty' => 0)); // Get all categories including empty ones
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('categories'); ?>"><?php _e('Select Categories:', 'text_domain'); ?></label><br>
            <?php
            foreach ($categories as $category) {
                $checked = in_array($category->term_id, $selected_categories) ? 'checked="checked"' : '';
                echo '<label><input type="checkbox" name="' . $this->get_field_name('categories') . '[]" value="' . esc_attr($category->term_id) . '" ' . $checked . ' /> ' . esc_html($category->name) . '</label><br>';
            }
            ?>
        </p>
        <?php
    }

    // Saving the widget settings
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['categories'] = !empty($new_instance['categories']) ? $new_instance['categories'] : array(); // Ensure it's an array
        return $instance;
    }
}

// Register the Post Grid Widget
function register_post_grid_widget() {
    register_widget('Post_Grid_Widget');
}
add_action('widgets_init', 'register_post_grid_widget');

// Define the Post Grid Widget Class
class Post_Grid_Widget extends WP_Widget {

    // Set up widget options
    function __construct() {
        parent::__construct(
            'post_grid_widget', // Base ID
            'Post Grid Widget', // Name
            array('description' => __('Displays posts in a grid layout with thumbnails, title, content, categories, date, and author.', 'text_domain'))
        );
    }

    // Widget output in frontend
    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Widget title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Get selected post IDs from widget settings
        $post_ids = !empty($instance['post_ids']) ? $instance['post_ids'] : '';
        $post_ids_array = explode(',', $post_ids); // Split by comma to get an array of IDs

        // Query posts by IDs
        $args = array(
            'post__in' => $post_ids_array,
            'post_status' => 'publish',
            'posts_per_page' => count($post_ids_array), // Display only the selected posts
            'orderby' => 'post__in', // Maintain the order of IDs
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            echo '<div class="post-grid">';
            $count = 0; // Counter to control 4 posts per row
            while ($query->have_posts()) : $query->the_post();
                if ($count % 4 == 0 && $count != 0) echo '</div><div class="post-grid">'; // Start a new row after 4 posts
                ?>
                <div class="post-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    </a>    
                        <div class="post-content">
                            <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3></a> 
                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                            <div class="post-cat"><?php echo get_the_category_list(', '); ?></div>
                            <div class="post-meta">
                                <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span> | 
                                <span class="post-author"><?php the_author(); ?></span>
                            </div>
                        </div>
                    
                </div>
                <?php
                $count++;
            endwhile;
            echo '</div>';
        else :
            echo '<p>No posts found.</p>';
        endif;

        wp_reset_postdata();

        echo $args['after_widget'];
    }

    // Backend settings for the widget
    public function form($instance) {
        $title = isset($instance['title']) ? $instance['title'] : __('Post Grid', 'text_domain');
        $post_ids = isset($instance['post_ids']) ? $instance['post_ids'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('post_ids'); ?>"><?php _e('Enter Post IDs (comma separated):', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('post_ids'); ?>" name="<?php echo $this->get_field_name('post_ids'); ?>" type="text" value="<?php echo esc_attr($post_ids); ?>" />
            <small><?php _e('Enter post IDs separated by commas (e.g., 1, 2, 3, 4).', 'text_domain'); ?></small>
        </p>
        <?php
    }

    // Saving the widget settings
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['post_ids'] = strip_tags($new_instance['post_ids']); // Save post IDs as a comma-separated string
        return $instance;
    }
}


// Allow SVG uploads
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Sanitize SVG uploads
function sanitize_svg($file, $url, $type) {
    if ($type === 'image/svg+xml') {
        $file['type'] = 'image/svg+xml';
    }
    return $file;
}
add_filter('wp_check_filetype_and_ext', 'sanitize_svg', 10, 3);

function elementor_footer_script() {
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
 
        jQuery(document).ready(function(jQuery) {
            if (document.referrer && !document.referrer.includes('emizentech.com')) {
                document.cookie = "referrer=" + document.referrer + "; path=/;";
            }
 
            let referer_url = getCookie("referrer") || document.referrer;
 
            // Set referrer field in all matching fields
            jQuery('input[name="form_fields[referrer_url]"]').val(referer_url);
 
            // Set IP and User Agent in all matching fields
            const userIP = "<?php echo esc_js($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']); ?>";
            const userAgent = "<?php echo esc_js($_SERVER['HTTP_USER_AGENT']); ?>";
 
            jQuery('input[name="form_fields[user_ip_address]"]').val(userIP);
            jQuery('input[name="form_fields[user_agent_add]"]').val(userAgent);
 
            // Set UTM fields
            const urlParams = new URLSearchParams(window.location.search);
            const utmFields = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
 
            jQuery.each(utmFields, function(index, field) {
                const value = urlParams.get(field);
                if (value) {
                    jQuery('input[name="form_fields[' + field + ']"]').val(value);
                }
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'elementor_footer_script');


// Blog Template override for single post layouts
function emz_left_side_box_add_meta_box()
{
    add_meta_box(
        'left_side_box',                // ID
        'Left Side Box',                // Title
        'emz_left_side_box_meta_box_html',  // Callback
        ['post', 'trending'],                         // Screen (post type: post, page, custom post type)
        'normal',                       // Context
        'default'                       // Priority
    );
}
add_action('add_meta_boxes', 'emz_left_side_box_add_meta_box');

function emz_left_side_box_meta_box_html($post)
{
    $title   = get_post_meta($post->ID, '_lsb_title', true);
    $content = get_post_meta($post->ID, '_lsb_content', true);
    $btn_txt = get_post_meta($post->ID, '_lsb_btn_text', true);
    $btn_url = get_post_meta($post->ID, '_lsb_btn_url', true);
    $tooltip = get_post_meta($post->ID, '_lsb_is_tooltip_on', true);

    wp_nonce_field('left_side_box_save', 'left_side_box_nonce');
?>
    <p>
        <label for="lsb_title"><strong>Title:</strong></label><br>
        <input type="text" name="lsb_title" id="lsb_title" value="<?php echo esc_attr($title); ?>" class="widefat">
    </p>
    <p>
        <label for="lsb_content"><strong>Content:</strong></label><br>
        <textarea name="lsb_content" id="lsb_content" rows="4" class="widefat"><?php echo esc_textarea($content); ?></textarea>
    </p>
    <p>
        <label for="lsb_btn_text"><strong>Button Text:</strong></label><br>
        <input type="text" name="lsb_btn_text" id="lsb_btn_text" value="<?php echo esc_attr($btn_txt); ?>" class="widefat">
    </p>
    <p>
        <label for="lsb_btn_url"><strong>Button URL:</strong></label><br>
        <input type="text" name="lsb_btn_url" id="lsb_btn_url" value="<?php echo esc_url($btn_url); ?>" class="widefat">
    </p>
    <p>
        <label for="_lsb_is_tooltip_on"><strong>Show Tooltip:</strong></label><br>
        <input type="checkbox" name="_lsb_is_tooltip_on" id="_lsb_is_tooltip_on" value="<?php echo $tooltip; ?>" <?php echo $tooltip; ?> class="widefat" />
        <script>
            jQuery(document).on('change', '#_lsb_is_tooltip_on', function() {
                var isChecked = jQuery(this).prop('checked');
                jQuery(this).val(isChecked ? 'checked' : 'unchecked');
            });
        </script>
    </p>
<?php
}
// save the fields box data
function emz_left_side_box_save_meta_box($post_id)
{
    if (
        !isset($_POST['left_side_box_nonce']) ||
        !wp_verify_nonce($_POST['left_side_box_nonce'], 'left_side_box_save')
    ) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    update_post_meta($post_id, '_lsb_title', sanitize_text_field($_POST['lsb_title'] ?? ''));
    update_post_meta($post_id, '_lsb_content', sanitize_textarea_field($_POST['lsb_content'] ?? ''));
    update_post_meta($post_id, '_lsb_btn_text', sanitize_text_field($_POST['lsb_btn_text'] ?? ''));
    update_post_meta($post_id, '_lsb_btn_url', esc_url_raw($_POST['lsb_btn_url'] ?? ''));
    update_post_meta($post_id, '_lsb_is_tooltip_on', sanitize_text_field($_POST['_lsb_is_tooltip_on'] ?? ''));
}
add_action('save_post', 'emz_left_side_box_save_meta_box');

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

