<?php
/**
 * Plugin Name: Add .html Extension to Pages
 * Plugin URI: https://wordpress.org/plugins/add-html-extension-to-pages/
 * Description: A simple and easy way to add .html extension to WordPress pages. Supports per-page exclusion.
 * Version: 1.2.0
 * Author: Subodh Ghulaxe (Modified)
 * Author URI: http://www.subodhghulaxe.com
 */

if (!function_exists('add_action')) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit();
}

if (!class_exists('AHETP')) {

	class AHETP
	{
		private static $instance = false;

		public static function get_instance()
		{
			if (! self::$instance) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		function __construct()
		{
			add_action('init',                   array(&$this, 'init'), -1);
			add_filter('user_trailingslashit',   array(&$this, 'no_page_slash'), 66, 2);
			add_action('add_meta_boxes',         array(&$this, 'add_exclude_meta_box'));
			add_action('save_post',              array(&$this, 'save_exclude_meta'));
			add_filter('page_link',              array(&$this, 'maybe_remove_html_extension'), 10, 2);
			add_action('generate_rewrite_rules', array(&$this, 'add_plain_rewrite_rules'));
			add_action('template_redirect',      array(&$this, 'handle_excluded_page_request'));
		}

		public function init()
		{
			global $wp_rewrite;
			if (!strpos($wp_rewrite->get_page_permastruct(), '.html')) {
				$wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
			}
			add_filter('plugin_row_meta', array(&$this, 'donate_link'), 10, 2);
		}

		/**
		 * Inject plain rewrite rules for excluded pages BEFORE .html rules.
		 * This makes WordPress resolve them without .html.
		 */
		public function add_plain_rewrite_rules($wp_rewrite)
		{
			$excluded_pages = $this->get_excluded_pages();
			if (empty($excluded_pages)) return;

			$new_rules = array();

			foreach ($excluded_pages as $page) {
				$page_path = trim(str_replace(home_url(), '', get_permalink($page->ID)), '/');
				$page_path = str_replace('.html', '', $page_path);
				if (empty($page_path)) continue;
				// Match both /industry and /industry/ (trailing slash)
				$new_rules[$page_path . '/?$'] = 'index.php?page_id=' . $page->ID;
			}

			$wp_rewrite->rules = $new_rules + (array) $wp_rewrite->rules;
		}

		/**
		 * If someone visits /page.html but it's an excluded page, 301 redirect to /page
		 */
		public function handle_excluded_page_request()
		{
			global $wp;
			$request = $wp->request;
			if (substr($request, -5) !== '.html') return;

			$clean_path = substr($request, 0, -5);
			$page = get_page_by_path($clean_path);

			if ($page && $this->is_page_excluded($page->ID)) {
				wp_redirect(home_url('/' . $clean_path . '/'), 301);
				exit;
			}
		}

		public function add_exclude_meta_box()
		{
			add_meta_box(
				'ahetp_exclude_html',
				'HTML Extension Setting',
				array(&$this, 'render_exclude_meta_box'),
				'page',
				'side',
				'high'
			);
		}

		public function render_exclude_meta_box($post)
		{
			wp_nonce_field('ahetp_exclude_nonce_action', 'ahetp_exclude_nonce');
			$excluded = get_post_meta($post->ID, '_ahetp_exclude_html', true);
			?>
			<label style="display:flex;align-items:center;gap:8px;font-size:13px;cursor:pointer;">
				<input
					type="checkbox"
					name="ahetp_exclude_html"
					value="1"
					<?php checked($excluded, '1'); ?>
					style="width:16px;height:16px;"
				/>
				<span>Don't add <strong>.html</strong> to this page</span>
			</label>
			<p style="margin-top:8px;color:#666;font-size:12px;">
				When checked, this page uses the <strong>default permalink</strong> (no <code>.html</code>).
				Any old <code>.html</code> URL will auto-redirect to the clean URL.
			</p>
			<?php
		}

		public function save_exclude_meta($post_id)
		{
			if (
				!isset($_POST['ahetp_exclude_nonce']) ||
				!wp_verify_nonce($_POST['ahetp_exclude_nonce'], 'ahetp_exclude_nonce_action')
			) return;

			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
			if (!current_user_can('edit_page', $post_id)) return;

			if (!empty($_POST['ahetp_exclude_html']) && $_POST['ahetp_exclude_html'] == '1') {
				update_post_meta($post_id, '_ahetp_exclude_html', '1');
			} else {
				delete_post_meta($post_id, '_ahetp_exclude_html');
			}

			global $wp_rewrite;
			$wp_rewrite->flush_rules(true);
		}

		public function maybe_remove_html_extension($link, $post_id)
		{
			if ($this->is_page_excluded($post_id)) {
				$link = str_replace('.html', '', $link);
				// Restore trailing slash to match WordPress permalink settings
				$link = trailingslashit($link);
			}
			return $link;
		}

		private function is_page_excluded($post_id)
		{
			return get_post_meta($post_id, '_ahetp_exclude_html', true) === '1';
		}

		private function get_excluded_pages()
		{
			return get_posts(array(
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'posts_per_page' => -1,
				'meta_query'     => array(
					array(
						'key'   => '_ahetp_exclude_html',
						'value' => '1',
					),
				),
			));
		}

		public function no_page_slash($string, $type)
		{
			global $wp_rewrite;
			if ($wp_rewrite->using_permalinks() && $wp_rewrite->use_trailing_slashes == true && $type == 'page') {
				// Check if this URL belongs to an excluded page — if so, keep the trailing slash
				$clean = untrailingslashit(str_replace('.html', '', $string));
				$path   = trim(str_replace(home_url(), '', $clean), '/');
				$page   = get_page_by_path($path);
				if ($page && $this->is_page_excluded($page->ID)) {
					return trailingslashit($string); // restore trailing slash
				}
				return untrailingslashit($string);
			}
			return $string;
		}

		public static function activate()
		{
			global $wp_rewrite;
			if (!strpos($wp_rewrite->get_page_permastruct(), '.html')) {
				$wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
			}
			$wp_rewrite->flush_rules(true);
		}

		public static function deactivate()
		{
			global $wp_rewrite;
			$wp_rewrite->page_structure = str_replace(".html", "", $wp_rewrite->page_structure);
			$wp_rewrite->flush_rules(true);
		}

		public function donate_link($plugin_meta, $plugin_file)
		{
			if (plugin_basename(__FILE__) == $plugin_file)
				$plugin_meta[] = sprintf(
					'&hearts; <a href="%s" target="_blank">%s</a>',
					'https://www.patreon.com/subodhghulaxe',
					'Donate'
				);
			return $plugin_meta;
		}

	} // end class AHETP

	add_action('plugins_loaded', array('AHETP', 'get_instance'));
	register_activation_hook(__FILE__, array('AHETP', 'activate'));
	register_deactivation_hook(__FILE__, array('AHETP', 'deactivate'));

} // end class_exists
