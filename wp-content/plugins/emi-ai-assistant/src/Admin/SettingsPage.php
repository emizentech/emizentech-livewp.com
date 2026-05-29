<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class SettingsPage {

	private const TABS = [
		'general'    => 'General',
		'ai'         => 'AI (Optional)',
		'languages'  => 'Languages',
		'privacy'    => 'Privacy',
		'visibility' => 'Visibility',
		'advanced'   => 'Advanced',
	];

	public static function register_settings(): void {
		$options = [
			'emi_ai_settings_general',
			'emi_ai_ai_settings',
			'emi_ai_settings_languages',
			'emi_ai_settings_privacy',
			'emi_ai_settings_visibility',
			'emi_ai_settings_advanced',
		];
		foreach ( $options as $opt ) {
			register_setting( 'emi_ai_settings_group', $opt, [
				'type'              => 'array',
				'sanitize_callback' => [ self::class, 'sanitize_blob' ],
				'show_in_rest'      => false,
			] );
		}
	}

	public static function sanitize_blob( $value ): array {
		return is_array( $value ) ? array_map(
			static fn( $v ) => is_string( $v ) ? sanitize_text_field( $v ) : $v,
			$value
		) : [];
	}

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) {
			wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );
		}

		$active = sanitize_key( (string) ( $_GET['tab'] ?? 'general' ) );
		if ( ! isset( self::TABS[ $active ] ) ) {
			$active = 'general';
		}

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Emi AI — Settings', 'emi-ai-assistant' ); ?></h1>

			<h2 class="nav-tab-wrapper">
				<?php foreach ( self::TABS as $slug => $label ) : ?>
					<a class="nav-tab <?php echo $active === $slug ? 'nav-tab-active' : ''; ?>"
					   href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-settings&tab=' . $slug ) ); ?>">
						<?php echo esc_html( $label ); ?>
					</a>
				<?php endforeach; ?>
			</h2>

			<form method="post" action="options.php">
				<?php
				settings_fields( 'emi_ai_settings_group' );
				self::render_tab( $active );
				submit_button();
				?>
			</form>
		</div>
		<?php
	}

	private static function render_tab( string $tab ): void {
		switch ( $tab ) {
			case 'general':    self::tab_general();    return;
			case 'ai':         self::tab_ai();         return;
			case 'languages':  self::tab_languages();  return;
			case 'privacy':    self::tab_privacy();    return;
			case 'visibility': self::tab_visibility(); return;
			case 'advanced':   self::tab_advanced();   return;
		}
	}

	private static function tab_general(): void {
		$opt = (array) get_option( 'emi_ai_settings_general', [] );
		?>
		<table class="form-table" role="presentation">
			<tr>
				<th><label for="agent_name"><?php esc_html_e( 'Agent name', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="text" id="agent_name" name="emi_ai_settings_general[agent_name]" value="<?php echo esc_attr( $opt['agent_name'] ?? 'Emi' ); ?>" class="regular-text" /></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Widget position', 'emi-ai-assistant' ); ?></th>
				<td>
					<label><input type="radio" name="emi_ai_settings_general[widget_position]" value="bottom-right" <?php checked( $opt['widget_position'] ?? 'bottom-right', 'bottom-right' ); ?>> <?php esc_html_e( 'Bottom-right', 'emi-ai-assistant' ); ?></label> &nbsp;
					<label><input type="radio" name="emi_ai_settings_general[widget_position]" value="bottom-left" <?php checked( $opt['widget_position'] ?? '', 'bottom-left' ); ?>> <?php esc_html_e( 'Bottom-left', 'emi-ai-assistant' ); ?></label>
				</td>
			</tr>
			<tr>
				<th><label for="fab_delay_ms"><?php esc_html_e( 'FAB show delay (ms)', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="number" id="fab_delay_ms" name="emi_ai_settings_general[fab_delay_ms]" value="<?php echo esc_attr( (string) ( $opt['fab_delay_ms'] ?? 1500 ) ); ?>" min="0" max="60000" step="100" /></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Footer attribution', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_settings_general[footer_attribution]" value="1" <?php checked( ! empty( $opt['footer_attribution'] ) ); ?>> <?php esc_html_e( 'Show "Powered by Emizentech AI" in the chat footer', 'emi-ai-assistant' ); ?></label></td>
			</tr>
		</table>
		<?php
	}

	private static function tab_ai(): void {
		$opt = (array) get_option( 'emi_ai_ai_settings', [] );
		?>
		<p class="description"><?php esc_html_e( 'The plugin works without any AI by default. These optional flags enable Claude Haiku 4.5 for natural-language case search and personalised welcome messages.', 'emi-ai-assistant' ); ?></p>
		<table class="form-table" role="presentation">
			<tr>
				<th><?php esc_html_e( 'Enable AI add-ons', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_ai_settings[enabled]" value="1" <?php checked( ! empty( $opt['enabled'] ) ); ?>> <?php esc_html_e( 'Enable optional AI features', 'emi-ai-assistant' ); ?></label></td>
			</tr>
			<tr>
				<th><label for="anthropic_api_key"><?php esc_html_e( 'Anthropic API key', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="password" id="anthropic_api_key" name="emi_ai_ai_settings[anthropic_api_key]" value="<?php echo esc_attr( (string) ( $opt['anthropic_api_key'] ?? '' ) ); ?>" class="regular-text" autocomplete="new-password" /></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Free-text case search (NLU)', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_ai_settings[enable_nlu]" value="1" <?php checked( ! empty( $opt['enable_nlu'] ) ); ?>> <?php esc_html_e( 'Use Haiku to classify free-text case search queries', 'emi-ai-assistant' ); ?></label></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Personalised welcome', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_ai_settings[enable_dynamic_welcome]" value="1" <?php checked( ! empty( $opt['enable_dynamic_welcome'] ) ); ?>> <?php esc_html_e( 'Generate a one-line personalised welcome per visitor', 'emi-ai-assistant' ); ?></label></td>
			</tr>
		</table>
		<?php
	}

	private static function tab_languages(): void {
		$opt   = (array) get_option( 'emi_ai_settings_languages', [] );
		$avail = [ 'en' => 'English', 'ar' => 'العربية (Arabic)', 'es' => 'Español', 'fr' => 'Français' ];
		?>
		<table class="form-table" role="presentation">
			<tr>
				<th><?php esc_html_e( 'Enabled languages', 'emi-ai-assistant' ); ?></th>
				<td>
					<?php foreach ( $avail as $code => $label ) : ?>
						<label style="margin-right:14px"><input type="checkbox" name="emi_ai_settings_languages[enabled][]" value="<?php echo esc_attr( $code ); ?>" <?php checked( in_array( $code, (array) ( $opt['enabled'] ?? [ 'en' ] ), true ) ); ?>> <?php echo esc_html( $label ); ?></label>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<th><label for="lang_default"><?php esc_html_e( 'Default language', 'emi-ai-assistant' ); ?></label></th>
				<td>
					<select id="lang_default" name="emi_ai_settings_languages[default]">
						<?php foreach ( $avail as $code => $label ) : ?>
							<option value="<?php echo esc_attr( $code ); ?>" <?php selected( $opt['default'] ?? 'en', $code ); ?>><?php echo esc_html( $label ); ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Auto-detect from browser', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_settings_languages[auto_detect]" value="1" <?php checked( ! empty( $opt['auto_detect'] ) ); ?>> <?php esc_html_e( 'Pick the visitor\'s language from navigator.language', 'emi-ai-assistant' ); ?></label></td>
			</tr>
		</table>
		<?php
	}

	private static function tab_privacy(): void {
		$opt = (array) get_option( 'emi_ai_settings_privacy', [] );
		?>
		<table class="form-table" role="presentation">
			<tr>
				<th><label for="retention_days"><?php esc_html_e( 'Event retention (days)', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="number" id="retention_days" name="emi_ai_settings_privacy[retention_days]" value="<?php echo esc_attr( (string) ( $opt['retention_days'] ?? 90 ) ); ?>" min="7" max="730" /></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Anonymise IPs', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_settings_privacy[anonymize_ip]" value="1" <?php checked( ! empty( $opt['anonymize_ip'] ) ); ?>> <?php esc_html_e( 'Hash IP addresses before storing (SHA-256 + per-install salt)', 'emi-ai-assistant' ); ?></label></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'PII redaction', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_settings_privacy[pii_redaction]" value="1" <?php checked( ! empty( $opt['pii_redaction'] ) ); ?>> <?php esc_html_e( 'Scrub card numbers / SSNs / Aadhaar from free-text inputs', 'emi-ai-assistant' ); ?></label></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'CookieYes integration', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_settings_privacy[cookieyes_integration]" value="1" <?php checked( ! empty( $opt['cookieyes_integration'] ) ); ?>> <?php esc_html_e( 'Gate widget mount on CookieYes functional consent', 'emi-ai-assistant' ); ?></label></td>
			</tr>
			<tr>
				<th><label for="dsr_contact_email"><?php esc_html_e( 'DSR contact email', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="email" id="dsr_contact_email" name="emi_ai_settings_privacy[dsr_contact_email]" value="<?php echo esc_attr( (string) ( $opt['dsr_contact_email'] ?? get_option( 'admin_email' ) ) ); ?>" class="regular-text" /></td>
			</tr>
		</table>
		<?php
	}

	private static function tab_visibility(): void {
		$opt = (array) get_option( 'emi_ai_settings_visibility', [] );
		?>
		<table class="form-table" role="presentation">
			<tr>
				<th><?php esc_html_e( 'Show on', 'emi-ai-assistant' ); ?></th>
				<td>
					<?php foreach ( [ 'all' => 'All pages', 'pages' => 'WP Pages only', 'posts' => 'Blog posts only' ] as $val => $label ) : ?>
						<label style="margin-right:14px"><input type="radio" name="emi_ai_settings_visibility[show_on]" value="<?php echo esc_attr( $val ); ?>" <?php checked( $opt['show_on'] ?? 'all', $val ); ?>> <?php esc_html_e( $label, 'emi-ai-assistant' ); ?></label>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<th><label for="url_include"><?php esc_html_e( 'URL include patterns', 'emi-ai-assistant' ); ?></label></th>
				<td><textarea id="url_include" name="emi_ai_settings_visibility[url_include]" rows="4" class="large-text code" placeholder="/services/&#10;/hire-*"><?php echo esc_textarea( (string) ( $opt['url_include'] ?? '' ) ); ?></textarea><p class="description"><?php esc_html_e( 'One pattern per line. Supports * and ? wildcards. Leave blank to show everywhere (except excludes).', 'emi-ai-assistant' ); ?></p></td>
			</tr>
			<tr>
				<th><label for="url_exclude"><?php esc_html_e( 'URL exclude patterns', 'emi-ai-assistant' ); ?></label></th>
				<td><textarea id="url_exclude" name="emi_ai_settings_visibility[url_exclude]" rows="4" class="large-text code"><?php echo esc_textarea( (string) ( $opt['url_exclude'] ?? '' ) ); ?></textarea></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Logged-in users', 'emi-ai-assistant' ); ?></th>
				<td>
					<?php foreach ( [ 'show' => 'Show the widget', 'hide' => 'Hide the widget' ] as $val => $label ) : ?>
						<label style="margin-right:14px"><input type="radio" name="emi_ai_settings_visibility[logged_in_behavior]" value="<?php echo esc_attr( $val ); ?>" <?php checked( $opt['logged_in_behavior'] ?? 'show', $val ); ?>> <?php esc_html_e( $label, 'emi-ai-assistant' ); ?></label>
					<?php endforeach; ?>
				</td>
			</tr>
		</table>
		<?php
	}

	private static function tab_advanced(): void {
		$opt = (array) get_option( 'emi_ai_settings_advanced', [] );
		?>
		<table class="form-table" role="presentation">
			<tr>
				<th><?php esc_html_e( 'Cache backend (detected)', 'emi-ai-assistant' ); ?></th>
				<td><code><?php echo esc_html( \Emizentech\AiAssistant\Infra\Cache::active_backend() ); ?></code></td>
			</tr>
			<tr>
				<th><label for="rate_limit_per_ip_per_min"><?php esc_html_e( 'Per-IP rate limit (req/min)', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="number" id="rate_limit_per_ip_per_min" name="emi_ai_settings_advanced[rate_limit_per_ip_per_min]" value="<?php echo esc_attr( (string) ( $opt['rate_limit_per_ip_per_min'] ?? 30 ) ); ?>" min="1" max="600" /></td>
			</tr>
			<tr>
				<th><label for="debug_log_level"><?php esc_html_e( 'Debug log level', 'emi-ai-assistant' ); ?></label></th>
				<td>
					<select id="debug_log_level" name="emi_ai_settings_advanced[debug_log_level]">
						<?php foreach ( [ 'debug', 'info', 'warning', 'error' ] as $level ) : ?>
							<option value="<?php echo esc_attr( $level ); ?>" <?php selected( $opt['debug_log_level'] ?? 'warning', $level ); ?>><?php echo esc_html( $level ); ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Danger zone', 'emi-ai-assistant' ); ?></th>
				<td><label><input type="checkbox" name="emi_ai_settings_advanced[remove_data_on_uninstall]" value="1" <?php checked( ! empty( $opt['remove_data_on_uninstall'] ) ); ?>> <strong style="color:#a00"><?php esc_html_e( 'Remove all data on uninstall', 'emi-ai-assistant' ); ?></strong></label><p class="description"><?php esc_html_e( 'When the plugin is deleted from WP Admin, drop tables, options and uploaded files. Off by default — safer.', 'emi-ai-assistant' ); ?></p></td>
			</tr>
		</table>
		<?php
	}
}
