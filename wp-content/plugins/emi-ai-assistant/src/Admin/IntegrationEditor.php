<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

/**
 * Integrations page — admin builds webhook destinations and email recipients
 * with body templates. Supports multiple destinations per event type, with a
 * "Send test" action per row.
 */
final class IntegrationEditor {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) {
			wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );
		}

		// Handle form submission.
		if ( isset( $_POST['emi_ai_integrations_save'] ) ) {
			check_admin_referer( 'emi_ai_integrations' );
			self::save( $_POST );
			echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'Integrations saved.', 'emi-ai-assistant' ) . '</p></div>';
		}

		$opt        = (array) get_option( 'emi_ai_integrations', [] );
		$webhooks   = (array) ( $opt['webhooks'] ?? [] );
		$emails     = (array) ( $opt['emails']   ?? [] );

		// Always provide one empty row for quick adding.
		$webhooks[] = self::empty_webhook();
		$emails[]   = self::empty_email();

		?>
		<div class="wrap emi-ai-wrap">
			<h1><?php esc_html_e( 'Emi AI — Integrations', 'emi-ai-assistant' ); ?></h1>
			<p><?php esc_html_e( 'Leads and other events are delivered to the destinations you configure here. Each destination can listen for one or all event types.', 'emi-ai-assistant' ); ?></p>

			<form method="post">
				<?php wp_nonce_field( 'emi_ai_integrations' ); ?>
				<input type="hidden" name="emi_ai_integrations_save" value="1" />

				<h2><?php esc_html_e( 'Webhook destinations', 'emi-ai-assistant' ); ?></h2>
				<?php foreach ( $webhooks as $i => $w ) : self::webhook_card( $i, $w ); endforeach; ?>

				<p>
					<button type="button" class="button" onclick="emiAddWebhookRow()"><?php esc_html_e( '+ Add webhook destination', 'emi-ai-assistant' ); ?></button>
				</p>

				<h2 style="margin-top:30px"><?php esc_html_e( 'Email recipients', 'emi-ai-assistant' ); ?></h2>
				<?php foreach ( $emails as $i => $e ) : self::email_card( $i, $e ); endforeach; ?>

				<p>
					<button type="button" class="button" onclick="emiAddEmailRow()"><?php esc_html_e( '+ Add email recipient', 'emi-ai-assistant' ); ?></button>
				</p>

				<?php submit_button(); ?>
			</form>

			<script>
				function emiAddWebhookRow(){ alert('Save current, then refresh — Phase 1 ships static rows; React-driven repeater is Phase 2.'); }
				function emiAddEmailRow()  { alert('Save current, then refresh — Phase 1 ships static rows; React-driven repeater is Phase 2.'); }
			</script>
		</div>
		<?php
	}

	private static function webhook_card( int $i, array $w ): void {
		?>
		<div class="emi-ai-card" style="background:#fff;border:1px solid #ccd0d4;padding:14px 18px;margin:14px 0;border-radius:6px;">
			<input type="hidden" name="emi_ai_integrations[webhooks][<?php echo $i; ?>][id]" value="<?php echo esc_attr( $w['id'] ?? uniqid( 'wh_' ) ); ?>" />
			<table class="form-table" role="presentation">
				<tr>
					<th><?php esc_html_e( 'Name', 'emi-ai-assistant' ); ?></th>
					<td><input type="text" name="emi_ai_integrations[webhooks][<?php echo $i; ?>][name]" value="<?php echo esc_attr( $w['name'] ?? '' ); ?>" class="regular-text" placeholder="HubSpot CRM" /></td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Event', 'emi-ai-assistant' ); ?></th>
					<td>
						<select name="emi_ai_integrations[webhooks][<?php echo $i; ?>][event]">
							<?php foreach ( [ 'all', 'lead_captured', 'meeting_booked', 'exit_modal_email_submitted', 'estimator_completed' ] as $ev ) : ?>
								<option value="<?php echo esc_attr( $ev ); ?>" <?php selected( $w['event'] ?? 'all', $ev ); ?>><?php echo esc_html( $ev ); ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'URL', 'emi-ai-assistant' ); ?></th>
					<td><input type="url" name="emi_ai_integrations[webhooks][<?php echo $i; ?>][url]" value="<?php echo esc_attr( $w['url'] ?? '' ); ?>" class="large-text" placeholder="https://api.hubapi.com/crm/v3/objects/contacts" /></td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Method', 'emi-ai-assistant' ); ?></th>
					<td>
						<select name="emi_ai_integrations[webhooks][<?php echo $i; ?>][method]">
							<?php foreach ( [ 'POST', 'PUT', 'PATCH' ] as $m ) : ?>
								<option value="<?php echo esc_attr( $m ); ?>" <?php selected( $w['method'] ?? 'POST', $m ); ?>><?php echo esc_html( $m ); ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Headers', 'emi-ai-assistant' ); ?></th>
					<td>
						<textarea name="emi_ai_integrations[webhooks][<?php echo $i; ?>][headers_raw]" rows="3" class="large-text code" placeholder="Authorization: Bearer {{settings.hubspot_token}}"><?php echo esc_textarea( self::headers_to_raw( $w['headers'] ?? [] ) ); ?></textarea>
						<p class="description"><?php esc_html_e( 'One per line, format: "Header-Name: value". Placeholders like {{settings.hubspot_token}} supported.', 'emi-ai-assistant' ); ?></p>
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Body template', 'emi-ai-assistant' ); ?></th>
					<td>
						<textarea name="emi_ai_integrations[webhooks][<?php echo $i; ?>][body_template]" rows="8" class="large-text code"><?php echo esc_textarea( $w['body_template'] ?? self::default_body_template() ); ?></textarea>
						<p class="description"><?php esc_html_e( 'Available placeholders: {{lead.name}}, {{lead.email}}, {{lead.phone}}, {{lead.budget}}, {{lead.scope}}, {{lead.urgency}}, {{lead.source}}, {{lead.mode}}, {{lead.lang}}, {{lead.page_url}}, {{lead.timezone}}, {{utm.source}}, {{site.url}}, {{event.timestamp_iso}}.', 'emi-ai-assistant' ); ?></p>
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Enabled', 'emi-ai-assistant' ); ?></th>
					<td><label><input type="checkbox" name="emi_ai_integrations[webhooks][<?php echo $i; ?>][enabled]" value="1" <?php checked( ! empty( $w['enabled'] ) ); ?>></label></td>
				</tr>
			</table>
			<?php if ( ! empty( $w['url'] ) ) : ?>
				<button type="button" class="button" onclick="emiSendTest('<?php echo esc_js( $w['id'] ?? '' ); ?>')"><?php esc_html_e( 'Send test', 'emi-ai-assistant' ); ?></button>
				<span class="emi-test-result" id="emi-test-result-<?php echo esc_attr( $w['id'] ?? '' ); ?>"></span>
				<script>
					function emiSendTest(id){
						const out = document.getElementById('emi-test-result-' + id);
						out.textContent = ' Sending…';
						fetch(EmiAIAdmin.restUrl + '/webhook/' + id + '/test', {
							method: 'POST',
							headers: { 'X-WP-Nonce': EmiAIAdmin.nonce }
						}).then(r => r.json()).then(d => {
							out.textContent = ' ' + (d.ok ? '✅ OK (HTTP ' + d.status + ')' : '❌ ' + (d.error || ('HTTP ' + d.status)));
						}).catch(e => out.textContent = ' ❌ ' + e.message);
					}
				</script>
			<?php endif; ?>
		</div>
		<?php
	}

	private static function email_card( int $i, array $e ): void {
		?>
		<div class="emi-ai-card" style="background:#fff;border:1px solid #ccd0d4;padding:14px 18px;margin:14px 0;border-radius:6px;">
			<table class="form-table" role="presentation">
				<tr>
					<th><?php esc_html_e( 'To', 'emi-ai-assistant' ); ?></th>
					<td><input type="text" name="emi_ai_integrations[emails][<?php echo $i; ?>][to]" value="<?php echo esc_attr( $e['to'] ?? '' ); ?>" class="regular-text" placeholder="sales@emizentech.com" /></td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Event', 'emi-ai-assistant' ); ?></th>
					<td>
						<select name="emi_ai_integrations[emails][<?php echo $i; ?>][event]">
							<?php foreach ( [ 'all', 'lead_captured', 'meeting_booked' ] as $ev ) : ?>
								<option value="<?php echo esc_attr( $ev ); ?>" <?php selected( $e['event'] ?? 'all', $ev ); ?>><?php echo esc_html( $ev ); ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Subject', 'emi-ai-assistant' ); ?></th>
					<td><input type="text" name="emi_ai_integrations[emails][<?php echo $i; ?>][subject]" value="<?php echo esc_attr( $e['subject'] ?? '[Emi AI] New lead from {{lead.name}}' ); ?>" class="large-text" /></td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Body (HTML, placeholders supported)', 'emi-ai-assistant' ); ?></th>
					<td><textarea name="emi_ai_integrations[emails][<?php echo $i; ?>][body]" rows="6" class="large-text code"><?php echo esc_textarea( $e['body'] ?? '' ); ?></textarea>
						<p class="description"><?php esc_html_e( 'Leave empty to use the default lead-notification HTML template.', 'emi-ai-assistant' ); ?></p>
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Enabled', 'emi-ai-assistant' ); ?></th>
					<td><label><input type="checkbox" name="emi_ai_integrations[emails][<?php echo $i; ?>][enabled]" value="1" <?php checked( ! empty( $e['enabled'] ) ); ?>></label></td>
				</tr>
			</table>
		</div>
		<?php
	}

	private static function save( array $post ): void {
		$raw  = $post['emi_ai_integrations'] ?? [];
		$out  = [ 'webhooks' => [], 'emails' => [] ];

		foreach ( (array) ( $raw['webhooks'] ?? [] ) as $w ) {
			if ( empty( $w['url'] ) && empty( $w['name'] ) ) continue;
			$out['webhooks'][] = [
				'id'             => sanitize_text_field( (string) ( $w['id'] ?? uniqid( 'wh_' ) ) ),
				'name'           => sanitize_text_field( (string) ( $w['name'] ?? '' ) ),
				'event'          => sanitize_key( (string) ( $w['event'] ?? 'lead_captured' ) ),
				'url'            => esc_url_raw( (string) ( $w['url'] ?? '' ) ),
				'method'         => in_array( $w['method'] ?? 'POST', [ 'POST', 'PUT', 'PATCH' ], true ) ? $w['method'] : 'POST',
				'headers'        => self::parse_headers_raw( (string) ( $w['headers_raw'] ?? '' ) ),
				'body_template'  => (string) ( $w['body_template'] ?? '' ),
				'enabled'        => ! empty( $w['enabled'] ),
				'retry_attempts' => 3,
				'retry_backoff_s'=> 2,
				'timeout_s'      => 10,
				'quiet'          => true,
			];
		}

		foreach ( (array) ( $raw['emails'] ?? [] ) as $e ) {
			if ( empty( $e['to'] ) ) continue;
			$out['emails'][] = [
				'to'      => sanitize_text_field( (string) $e['to'] ),
				'event'   => sanitize_key( (string) ( $e['event'] ?? 'lead_captured' ) ),
				'subject' => sanitize_text_field( (string) ( $e['subject'] ?? '' ) ),
				'body'    => (string) ( $e['body'] ?? '' ),
				'enabled' => ! empty( $e['enabled'] ),
			];
		}

		update_option( 'emi_ai_integrations', $out, false );
	}

	private static function parse_headers_raw( string $raw ): array {
		$out = [];
		foreach ( preg_split( '/\r?\n/', $raw ) ?: [] as $line ) {
			$line = trim( $line );
			if ( $line === '' || strpos( $line, ':' ) === false ) continue;
			[ $name, $value ] = array_map( 'trim', explode( ':', $line, 2 ) );
			if ( $name ) {
				$out[] = [ 'name' => $name, 'value' => $value ];
			}
		}
		return $out;
	}

	private static function headers_to_raw( array $headers ): string {
		$lines = [];
		foreach ( $headers as $h ) {
			if ( ! empty( $h['name'] ) ) {
				$lines[] = $h['name'] . ': ' . ( $h['value'] ?? '' );
			}
		}
		return implode( "\n", $lines );
	}

	private static function empty_webhook(): array {
		return [
			'id'      => uniqid( 'wh_' ),
			'name'    => '',
			'event'   => 'lead_captured',
			'url'     => '',
			'method'  => 'POST',
			'headers' => [],
			'body_template' => self::default_body_template(),
			'enabled' => false,
		];
	}

	private static function empty_email(): array {
		return [
			'to'      => '',
			'event'   => 'lead_captured',
			'subject' => '[Emi AI] New lead from {{lead.name}}',
			'body'    => '',
			'enabled' => false,
		];
	}

	private static function default_body_template(): string {
		return <<<JSON
{
  "name":     "{{lead.name}}",
  "email":    "{{lead.email}}",
  "phone":    "{{lead.phone}}",
  "company":  "{{lead.company}}",
  "budget":   "{{lead.budget}}",
  "timeline": "{{lead.timeline}}",
  "scope":    "{{lead.scope}}",
  "urgency":  "{{lead.urgency}}",
  "source":   "{{lead.source}}",
  "mode":     "{{lead.mode}}",
  "lang":     "{{lead.lang}}",
  "page_url": "{{lead.page_url}}",
  "utm":      { "source": "{{utm.source}}", "campaign": "{{utm.campaign}}" },
  "captured_at": "{{event.timestamp_iso}}"
}
JSON;
	}
}
