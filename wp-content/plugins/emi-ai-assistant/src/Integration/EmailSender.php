<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration;

use Emizentech\AiAssistant\Infra\Logger;

/**
 * wp_mail() wrapper with HTML templates + optional attachments.
 */
final class EmailSender {

	public static function send_lead_notification( array $lead ): array {
		$integrations = (array) get_option( 'emi_ai_integrations', [] );
		$emails       = (array) ( $integrations['emails'] ?? [] );

		// Find matching recipient configuration.
		$recipient_cfg = null;
		foreach ( $emails as $cfg ) {
			if ( empty( $cfg['enabled'] ) ) continue;
			$event = $cfg['event'] ?? 'all';
			if ( $event === 'all' || $event === 'lead_captured' ) {
				$recipient_cfg = $cfg;
				break;
			}
		}

		if ( ! $recipient_cfg ) {
			// Fallback: site admin email.
			$recipient_cfg = [
				'to'      => get_option( 'admin_email' ),
				'subject' => '[Emi AI] New lead from {{lead.name}}',
				'body'    => self::default_lead_email_body(),
				'enabled' => true,
			];
		}

		$to      = BodyTemplateEngine::render( (string) ( $recipient_cfg['to'] ?? '' ), $lead );
		$subject = BodyTemplateEngine::render( (string) ( $recipient_cfg['subject'] ?? 'New lead' ), $lead );
		$body    = BodyTemplateEngine::render( (string) ( $recipient_cfg['body'] ?? self::default_lead_email_body() ), $lead );

		$headers = [
			'Content-Type: text/html; charset=UTF-8',
			'From: ' . sprintf( '"%s" <%s>', get_bloginfo( 'name' ), get_option( 'admin_email' ) ),
		];
		if ( ! empty( $lead['email'] ) ) {
			$headers[] = 'Reply-To: ' . $lead['email'];
		}

		$ok = wp_mail( $to, $subject, $body, $headers );

		if ( ! $ok ) {
			Logger::warning( 'email.send.failed', [ 'to' => $to, 'subject' => $subject ] );
		}

		return [ 'ok' => (bool) $ok, 'to' => $to ];
	}

	public static function default_lead_email_body(): string {
		return '
<!doctype html>
<html><body style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,sans-serif;background:#f4f7fa;padding:24px;">
<div style="max-width:580px;margin:0 auto;background:#fff;border-radius:12px;padding:24px;">
  <h2 style="margin:0 0 16px;color:#0E2A47;">🎯 New lead from Emi AI</h2>
  <table style="width:100%;border-collapse:collapse;font-size:14px;">
    <tr><td style="padding:8px 0;color:#5B6B7B;width:120px;">Name</td><td style="font-weight:600;">{{lead.name}}</td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Email</td><td><a href="mailto:{{lead.email}}">{{lead.email}}</a></td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Phone</td><td>{{lead.phone}}</td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Company</td><td>{{lead.company}}</td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Budget</td><td><b>{{lead.budget}}</b></td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Timeline</td><td>{{lead.timeline}}</td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Urgency</td><td>{{lead.urgency}}</td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;vertical-align:top;">Scope</td><td>{{lead.scope}}</td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Source</td><td>{{lead.source}} ({{lead.mode}})</td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Page</td><td><a href="{{lead.page_url}}">{{lead.page_url}}</a></td></tr>
    <tr><td style="padding:8px 0;color:#5B6B7B;">Captured</td><td>{{event.timestamp_iso}}</td></tr>
  </table>
  <p style="margin-top:18px;color:#5B6B7B;font-size:12px;">Sent by Emi AI Assistant on {{site.name}} ({{site.url}})</p>
</div>
</body></html>';
	}
}
