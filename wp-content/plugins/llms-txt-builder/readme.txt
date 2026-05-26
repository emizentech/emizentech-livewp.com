=== LLms.txt Builder ===
Contributors: emizentech
Donate link: https://emizentech.com/?utm_source=wordpress&utm_medium=llms_builder&utm_campaign=donate
Tags: llms, llms.txt, generate, sitemap, seo
Requires at least: 5.5
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Generate an llms.txt file with AI-powered summaries for your WordPress site using OpenAI and your sitemap.

== Description ==

**LLms.txt Builder** helps your site become AI-discoverable by generating an llms.txt file with concise summaries for your posts and pages. It uses OpenAI for summaries, supports all public post types, and updates automatically via WordPress cron. Features include:

- Uses your WordPress sitemap for content discovery
- Summarizes content using OpenAI (with fallback to meta or excerpt)
- Caches summaries for efficiency
- Exclude URLs or noindex content
- Manual and scheduled generation
- Modern, branded admin settings page

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/llms-txt-builder/` directory, or install via the WordPress plugin screen.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to **Settings > LLms.txt Builder** to configure your options and add your OpenAI API key.

== Frequently Asked Questions ==

= Where can I find my llms.txt file? =
It is generated in your WordPress root as `/llms.txt`. You can view it directly from the settings page.

= How do I set up automatic updates? =
The plugin uses WordPress cron by default. No extra setup is needed.

= What if I don’t have an OpenAI key? =
The plugin will fallback to your meta description or a trimmed excerpt.

== Screenshots ==

1. Settings page with Emizentech branding and OpenAI integration.
2. Example llms.txt file output.

== Changelog ==

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.0.0 =
First public release.

== License ==

This plugin is licensed under the GPLv2 or later.


