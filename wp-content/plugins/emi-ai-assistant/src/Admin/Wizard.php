<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class Wizard {

	public static function maybe_redirect(): void {
		if ( ! get_option( 'emi_ai_setup_redirect' ) ) return;
		if ( wp_doing_ajax() || defined( 'DOING_CRON' ) ) return;
		if ( ! current_user_can( Menu::CAP ) ) return;

		delete_option( 'emi_ai_setup_redirect' );
		wp_safe_redirect( admin_url( 'admin.php?page=emi-ai-wizard' ) );
		exit;
	}

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) {
			wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );
		}

		$step = max( 1, min( 5, (int) ( $_GET['step'] ?? 1 ) ) );

		?>
		<div class="wrap emi-ai-wrap emi-ai-wizard">
			<h1><?php esc_html_e( 'Emi AI — Setup Wizard', 'emi-ai-assistant' ); ?></h1>

			<ol class="emi-ai-wizard-steps">
				<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
					<li class="<?php echo $i === $step ? 'active' : ( $i < $step ? 'done' : '' ); ?>">
						<?php echo esc_html( [
							1 => __( 'Welcome', 'emi-ai-assistant' ),
							2 => __( 'Branding', 'emi-ai-assistant' ),
							3 => __( 'Integrations', 'emi-ai-assistant' ),
							4 => __( 'Triggers', 'emi-ai-assistant' ),
							5 => __( 'Go live', 'emi-ai-assistant' ),
						][ $i ] ); ?>
					</li>
				<?php endfor; ?>
			</ol>

			<div class="emi-ai-wizard-pane">
				<?php self::render_step( $step ); ?>
			</div>
		</div>
		<?php
	}

	private static function render_step( int $step ): void {
		$next = admin_url( 'admin.php?page=emi-ai-wizard&step=' . ( $step + 1 ) );

		switch ( $step ) {
			case 1:
				?>
				<h2><?php esc_html_e( 'Welcome to Emi AI', 'emi-ai-assistant' ); ?></h2>
				<p><?php esc_html_e( "This wizard takes about 3 minutes. You can re-run it later from Tools.", 'emi-ai-assistant' ); ?></p>
				<p><?php esc_html_e( "By default the widget runs in Sandbox mode — only logged-in admins can see it. You'll flip the switch to Live in the last step.", 'emi-ai-assistant' ); ?></p>
				<p><a class="button button-primary" href="<?php echo esc_url( $next ); ?>"><?php esc_html_e( 'Get started ›', 'emi-ai-assistant' ); ?></a></p>
				<?php
				break;
			case 2:
				?>
				<h2><?php esc_html_e( 'Step 2 — Branding', 'emi-ai-assistant' ); ?></h2>
				<p><?php esc_html_e( 'Configure colors, agent name and avatar on the Triggers & Branding page after the wizard.', 'emi-ai-assistant' ); ?></p>
				<p><a class="button" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-triggers' ) ); ?>"><?php esc_html_e( 'Open Branding page', 'emi-ai-assistant' ); ?></a> &nbsp; <a class="button button-primary" href="<?php echo esc_url( $next ); ?>"><?php esc_html_e( 'Next ›', 'emi-ai-assistant' ); ?></a></p>
				<?php
				break;
			case 3:
				?>
				<h2><?php esc_html_e( 'Step 3 — Integrations', 'emi-ai-assistant' ); ?></h2>
				<p><?php esc_html_e( 'Add at least one webhook URL or email recipient so leads are delivered somewhere. You can use the Send-test button to verify.', 'emi-ai-assistant' ); ?></p>
				<p><a class="button" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-integrations' ) ); ?>"><?php esc_html_e( 'Open Integrations page', 'emi-ai-assistant' ); ?></a> &nbsp; <a class="button button-primary" href="<?php echo esc_url( $next ); ?>"><?php esc_html_e( 'Next ›', 'emi-ai-assistant' ); ?></a></p>
				<?php
				break;
			case 4:
				?>
				<h2><?php esc_html_e( 'Step 4 — Triggers', 'emi-ai-assistant' ); ?></h2>
				<p><?php esc_html_e( 'Choose when the widget should pop up. A default page-load-after-30s rule is already in place — tune it on the Triggers page.', 'emi-ai-assistant' ); ?></p>
				<p><a class="button" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-triggers' ) ); ?>"><?php esc_html_e( 'Open Triggers page', 'emi-ai-assistant' ); ?></a> &nbsp; <a class="button button-primary" href="<?php echo esc_url( $next ); ?>"><?php esc_html_e( 'Next ›', 'emi-ai-assistant' ); ?></a></p>
				<?php
				break;
			case 5:
				?>
				<h2><?php esc_html_e( 'Step 5 — Go live', 'emi-ai-assistant' ); ?></h2>
				<p><?php esc_html_e( 'Open the dashboard and switch Plugin mode from Sandbox to Live when you\'re ready.', 'emi-ai-assistant' ); ?></p>
				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai' ) ); ?>"><?php esc_html_e( 'Go to Dashboard ›', 'emi-ai-assistant' ); ?></a>
					&nbsp;
					<a class="button" href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-diagnostics' ) ); ?>"><?php esc_html_e( 'Run diagnostics first', 'emi-ai-assistant' ); ?></a>
				</p>
				<?php
				break;
		}
	}
}
