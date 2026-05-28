<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\REST;

final class I18nController {

	public static function get( \WP_REST_Request $req ): \WP_REST_Response {
		$lang = sanitize_key( (string) $req->get_param( 'lang' ) );
		$path = EMI_AI_PATH . "languages/json/{$lang}.json";

		if ( ! file_exists( $path ) ) {
			$lang = 'en';
			$path = EMI_AI_PATH . 'languages/json/en.json';
		}

		// Allow admin overrides via emi_ai_i18n_overrides option.
		$overrides = (array) get_option( "emi_ai_i18n_{$lang}", [] );

		$base = file_exists( $path )
			? json_decode( (string) file_get_contents( $path ), true ) ?: []
			: self::default_strings();

		$strings = array_merge( $base, $overrides );

		return new \WP_REST_Response( $strings, 200, [ 'Cache-Control' => 'public, max-age=3600' ] );
	}

	public static function default_strings(): array {
		return [
			'welcome_recommender' => "Hi! I'm Emi 👋 — let me find the right service for you in 30 seconds. <b>What are you building?</b>",
			'welcome_estimator'   => "Sure — let's get you a ballpark. <b>What kind of project?</b>",
			'welcome_cases'       => "Tell me what kind of work you'd like to see.",
			'welcome_qualifier'   => "Happy to set you up with the right specialist. Just 4 quick questions and I'll route you instantly. <b>What's your name?</b>",
			'welcome_scheduler'   => "Let's book a free 20-min consultation. <b>What city are you in?</b>",
			'tab_recommend'       => '🎯 Recommend',
			'tab_estimate'        => '💰 Estimate',
			'tab_cases'           => '📂 Cases',
			'tab_qualify'         => '📝 Qualify',
			'tab_schedule'        => '📅 Schedule',
			'send_button'         => 'Send',
			'type_placeholder'    => 'Type your message…',
			'online'              => 'Online · replies instantly',
			'lead_thanks'         => "✅ All set, {name}! We'll email you within 2 hours.",
			'email_invalid'       => "That email doesn't look right — could you try again?",
			'exit_title'          => 'Wait — before you go!',
			'exit_desc'           => 'Grab a free 1-page Mobile App Launch Checklist tailored to your industry. We will email it instantly.',
		];
	}
}
