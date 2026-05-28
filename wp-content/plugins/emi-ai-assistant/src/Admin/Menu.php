<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin;

final class Menu {

	public const CAP = 'manage_emi_ai';

	public static function register(): void {
		$slug = 'emi-ai';

		add_menu_page(
			__( 'Emi AI', 'emi-ai-assistant' ),
			__( 'Emi AI', 'emi-ai-assistant' ),
			self::CAP,
			$slug,
			[ Dashboard::class, 'render' ],
			'dashicons-format-chat',
			26
		);

		add_submenu_page( $slug, __( 'Dashboard', 'emi-ai-assistant' ),       __( 'Dashboard', 'emi-ai-assistant' ),       self::CAP, $slug,                  [ Dashboard::class, 'render' ] );
		add_submenu_page( $slug, __( 'Settings', 'emi-ai-assistant' ),        __( 'Settings', 'emi-ai-assistant' ),        self::CAP, 'emi-ai-settings',      [ SettingsPage::class, 'render' ] );
		add_submenu_page( $slug, __( 'Integrations', 'emi-ai-assistant' ),    __( 'Integrations', 'emi-ai-assistant' ),    self::CAP, 'emi-ai-integrations',  [ IntegrationEditor::class, 'render' ] );
		add_submenu_page( $slug, __( 'Triggers & Branding', 'emi-ai-assistant' ), __( 'Triggers & Branding', 'emi-ai-assistant' ), self::CAP, 'emi-ai-triggers', [ TriggerRulesPage::class, 'render' ] );
		add_submenu_page( $slug, __( 'Events Mapping', 'emi-ai-assistant' ),  __( 'Events Mapping', 'emi-ai-assistant' ),  self::CAP, 'emi-ai-events',        [ EventsMappingPage::class, 'render' ] );
		add_submenu_page( $slug, __( 'Flow Editor', 'emi-ai-assistant' ),     __( 'Flow Editor', 'emi-ai-assistant' ),     self::CAP, 'emi-ai-flow',          [ FlowEditor::class, 'render' ] );
		add_submenu_page( $slug, __( 'Services', 'emi-ai-assistant' ),        __( 'Services', 'emi-ai-assistant' ),        self::CAP, 'emi-ai-services',      [ \Emizentech\AiAssistant\Admin\ListTables\ServicesPage::class, 'render' ] );
		add_submenu_page( $slug, __( 'Diagnostics', 'emi-ai-assistant' ),     __( 'Diagnostics', 'emi-ai-assistant' ),     self::CAP, 'emi-ai-diagnostics',   [ DiagnosticsPage::class, 'render' ] );
		add_submenu_page( $slug, __( 'Tools', 'emi-ai-assistant' ),           __( 'Tools', 'emi-ai-assistant' ),           self::CAP, 'emi-ai-tools',         [ ToolsPage::class, 'render' ] );
		// Wizard is intentionally hidden from the menu — accessed via redirect/banner.
		add_submenu_page( null, __( 'Setup Wizard', 'emi-ai-assistant' ),     '', self::CAP, 'emi-ai-wizard', [ Wizard::class, 'render' ] );
	}
}
