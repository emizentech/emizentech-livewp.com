=== Auto Page Freshener ===
Contributors: amitsamsukha  
Donate link: https://emizentech.com  
Tags: auto update, openai, rephrase, page freshness, nitro cache, cron  
Requires at least: 5.0  
Tested up to: 6.5  
Requires PHP: 7.4  
Stable tag: 1.0.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatically keeps your WordPress pages fresh. Uses OpenAI to rephrase content if not updated in the last 7 days. Flushes NitroPack cache, logs actions, and sends admin emails.

== Description ==

**Auto Page Freshener** helps you keep your published pages fresh by automatically rephrasing page content using OpenAI (GPT-3.5 Turbo) if the page hasn't been updated in the last 7 days. You can define a CSS ID selector and specific words that must remain in the rephrased content. If no selector is found, the plugin will simply update the page's modified date.

Features:

- Automatically rephrases page content every 7 days using OpenAI
- Supports only ID-based CSS selectors
- Ensures certain words must be retained in the content
- Updates modified date if selector is not found
- Flushes NitroPack cache for the updated page
- Admin grid to manage tracked pages
- Bulk add all published pages
- Manual rephrase trigger per row
- Logs tab showing success/failure with colored status
- Daily cron job execution
- Admin email notifications with summary
- SMTP configuration with test button
- OpenAI API key configuration with test button

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/auto-page-freshener/` directory or install directly from the WordPress plugin repository.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to **Settings > Auto Page Freshener** to configure your OpenAI and SMTP settings.
4. Navigate to the **Pages Grid** to add or manage tracked pages.

== Frequently Asked Questions ==

= What model is used for rephrasing? =
We use `gpt-3.5-turbo` via the official OpenAI API.

= Does this work with NitroPack? =
Yes, the plugin automatically flushes NitroPack cache for a page after it’s rephrased or updated.

= Can I test my OpenAI key and SMTP setup? =
Yes, there are test buttons available in the settings page for both.

= Will it duplicate pages? =
No. The plugin enforces unique page URLs in the grid.

== Screenshots ==

1. Admin Grid with Manual Trigger and Bulk Add
2. Settings Page with OpenAI and SMTP Test Buttons
3. Email Summary Example

== Changelog ==

= 1.0.0 =
* Initial release
* OpenAI integration for auto-rephrasing
* Cron job with email report
* Admin grid with logging and page management
* SMTP & OpenAI key configuration with testing

== Upgrade Notice ==

= 1.0.0 =
First release

== License ==

This plugin is licensed under the GPLv2 or later.
