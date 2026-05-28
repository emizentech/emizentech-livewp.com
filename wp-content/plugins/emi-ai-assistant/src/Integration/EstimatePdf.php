<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Integration;

use Emizentech\AiAssistant\Infra\Logger;

/**
 * Estimate PDF generator.
 *
 * Uses mpdf if installed (composer require mpdf/mpdf), otherwise falls back to
 * an inline HTML attachment so the feature still works without the heavy dep.
 */
final class EstimatePdf {

	public static function generate_and_mail( array $estimate, array $lead ): array {
		$html = self::render_html( $estimate, $lead );

		$upload  = wp_upload_dir();
		$dir     = trailingslashit( $upload['basedir'] ) . 'emi-ai/estimates';
		if ( ! is_dir( $dir ) ) {
			wp_mkdir_p( $dir );
			@file_put_contents( $dir . '/.htaccess', "Deny from all\n" );
		}

		$basename  = 'emi-estimate-' . gmdate( 'Ymd-His' ) . '-' . substr( md5( $lead['email'] . microtime() ), 0, 8 );
		$pdf_path  = $dir . '/' . $basename . '.pdf';
		$html_path = $dir . '/' . $basename . '.html';

		$attachment = $html_path; // default fallback
		$mime       = 'text/html';

		// Try mpdf first.
		if ( class_exists( \Mpdf\Mpdf::class ) ) {
			try {
				$mpdf = new \Mpdf\Mpdf( [
					'mode'        => 'utf-8',
					'format'      => 'A4',
					'margin_top'  => 18,
					'margin_left' => 18,
					'margin_right'=> 18,
					'margin_bottom' => 18,
				] );
				$mpdf->WriteHTML( $html );
				$mpdf->Output( $pdf_path, \Mpdf\Output\Destination::FILE );
				$attachment = $pdf_path;
				$mime       = 'application/pdf';
			} catch ( \Throwable $e ) {
				Logger::warning( 'estimate.pdf.mpdf_failed', [ 'msg' => $e->getMessage() ] );
				file_put_contents( $html_path, $html );
			}
		} else {
			// No mpdf — write HTML to attach instead.
			file_put_contents( $html_path, $html );
		}

		$ok = wp_mail(
			$lead['email'],
			sprintf( __( 'Your project estimate from %s', 'emi-ai-assistant' ), get_bloginfo( 'name' ) ),
			self::render_email_body( $estimate, $lead, $mime === 'application/pdf' ),
			[
				'Content-Type: text/html; charset=UTF-8',
				'From: ' . sprintf( '"%s" <%s>', get_bloginfo( 'name' ), get_option( 'admin_email' ) ),
			],
			[ $attachment ]
		);

		if ( ! $ok ) {
			Logger::warning( 'estimate.email.failed', [ 'to' => $lead['email'] ] );
		}

		return [
			'ok'         => (bool) $ok,
			'attachment' => $attachment,
			'mime'       => $mime,
		];
	}

	public static function queue( array $estimate, array $lead ): void {
		// Async send: schedule a one-off cron event in 30s.
		wp_schedule_single_event( time() + 30, 'emi_ai_send_estimate_email', [ $estimate, $lead ] );
	}

	public static function cron_handler( array $estimate, array $lead ): void {
		self::generate_and_mail( $estimate, $lead );
	}

	private static function render_html( array $est, array $lead ): string {
		$logo   = get_option( 'emi_ai_branding' )['avatar_id'] ?? 0;
		$primary= get_option( 'emi_ai_branding' )['primary'] ?? '#F26B1F';
		$secondary = get_option( 'emi_ai_branding' )['secondary'] ?? '#0E2A47';
		$now = wp_date( 'F j, Y' );
		$name = esc_html( $lead['name'] ?? 'there' );

		ob_start();
		?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Project Estimate</title>
<style>
  body { font-family: Helvetica, Arial, sans-serif; color:#1B2733; }
  h1 { color: <?php echo esc_attr( $secondary ); ?>; font-size: 24pt; margin:0 0 8pt; }
  h2 { color: <?php echo esc_attr( $secondary ); ?>; font-size: 14pt; margin: 18pt 0 4pt; }
  .pill { display:inline-block; background: <?php echo esc_attr( $primary ); ?>; color:#fff; padding: 4pt 10pt; border-radius: 99pt; font-size: 10pt; font-weight: 700; }
  .estimate-box { border: 1pt solid #E3E8EE; padding: 14pt; border-radius: 6pt; margin: 12pt 0; }
  .price { font-size: 22pt; font-weight: 800; color: <?php echo esc_attr( $secondary ); ?>; }
  table { width: 100%; border-collapse: collapse; margin-top: 6pt; }
  th, td { border-bottom: 1pt solid #E3E8EE; padding: 6pt 4pt; text-align:left; }
  .meta { font-size: 9pt; color: #5B6B7B; }
  .footer { margin-top: 30pt; font-size: 9pt; color: #5B6B7B; border-top: 1pt solid #E3E8EE; padding-top: 10pt; }
</style></head><body>
  <span class="pill"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
  <h1>Your project estimate</h1>
  <p class="meta">Prepared for <?php echo $name; ?> on <?php echo esc_html( $now ); ?></p>

  <div class="estimate-box">
    <p style="margin:0">Estimated range</p>
    <p class="price">$<?php echo esc_html( number_format( (int) ( $est['low'] ?? 0 ) ) ); ?> – $<?php echo esc_html( number_format( (int) ( $est['high'] ?? 0 ) ) ); ?> USD</p>
    <p class="meta">⏱ <?php echo (int) ( $est['weeks'] ?? 0 ); ?> weeks &nbsp;·&nbsp; 👥 <?php echo (int) ( $est['team'] ?? 0 ); ?> engineers</p>
  </div>

  <h2>Your inputs</h2>
  <table>
    <tr><th>Project type</th><td><?php echo esc_html( (string) ( $lead['project_type'] ?? '—' ) ); ?></td></tr>
    <tr><th>Platforms</th><td><?php echo esc_html( (string) ( $lead['platforms']    ?? '—' ) ); ?></td></tr>
    <tr><th>Feature count</th><td><?php echo esc_html( (string) ( $lead['feature_count'] ?? '—' ) ); ?></td></tr>
  </table>

  <h2>What's included in our estimates</h2>
  <ul>
    <li>UX research + wireframes (1 sprint)</li>
    <li>UI design + design-system</li>
    <li>Front-end + back-end engineering</li>
    <li>QA, accessibility & device testing</li>
    <li>Deployment & 30 days of post-launch fixes</li>
  </ul>

  <h2>Next steps</h2>
  <ol>
    <li>Reply to this email or pick a time at <?php echo esc_html( home_url( '/contact' ) ); ?></li>
    <li>15-min discovery call to refine scope</li>
    <li>Fixed-cost SOW within 2 business days</li>
  </ol>

  <div class="footer">
    This estimate is a non-binding ballpark based on similar projects we've delivered.
    The final fixed-cost SOW is provided after a scoping session.<br>
    <?php echo esc_html( get_bloginfo( 'name' ) ); ?> · <?php echo esc_html( home_url() ); ?>
  </div>
</body></html>
		<?php
		return (string) ob_get_clean();
	}

	private static function render_email_body( array $est, array $lead, bool $is_pdf ): string {
		$name = esc_html( $lead['name'] ?? 'there' );
		$ext  = $is_pdf ? 'PDF' : 'HTML document';
		ob_start();
		?>
		<p>Hi <?php echo $name; ?>,</p>
		<p>Thanks for using our project estimator! Attached is your detailed estimate as a <?php echo esc_html( $ext ); ?>.</p>
		<p><strong>Headline:</strong> $<?php echo esc_html( number_format( (int) ( $est['low'] ?? 0 ) ) ); ?> – $<?php echo esc_html( number_format( (int) ( $est['high'] ?? 0 ) ) ); ?> · <?php echo (int) ( $est['weeks'] ?? 0 ); ?> weeks · <?php echo (int) ( $est['team'] ?? 0 ); ?> engineers</p>
		<p>If the numbers look in your range, a 15-min discovery call is the fastest path to a fixed-cost SOW. Just reply to this email and we'll find a time.</p>
		<p>— Team <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
		<?php
		return (string) ob_get_clean();
	}
}
