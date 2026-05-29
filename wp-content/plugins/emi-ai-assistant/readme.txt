=== Emi AI Assistant ===
Contributors: emizentech
Tags: chat, chatbot, lead-generation, widget, gdpr
Requires at least: 6.4
Tested up to: 6.6
Requires PHP: 8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Knowledge-base-driven chat widget that replaces static contact forms with a conversational lead-capture flow. Configurable triggers, branding, webhook integrations and GA4/GTM events. Zero LLM tokens by default.

== Description ==

Emi AI Assistant adds a floating chat widget to every front-end page of your WordPress site, exposing six lead-generation features through one conversational interface:

1. **Service Recommender** — guides visitors to the right service page in under 60 seconds.
2. **Project Cost Estimator** — transparent ballpark pricing + PDF email follow-up.
3. **Smart Case-Study Finder** — keyword + faceted portfolio search backed by MySQL FULLTEXT.
4. **Lead Qualifier** — replaces the static Get-a-Quote form with a conversational flow.
5. **Timezone-aware Meeting Scheduler** — 24×7 consultation booking via Calendly.
6. **Exit-intent + Multilingual concierge** — rescues abandoning traffic; speaks EN/AR/ES/FR.

= Key design decisions =

* **Zero LLM tokens by default.** All six features run as deterministic flows backed by a knowledge base. An optional Claude Haiku integration can be enabled for free-text case-study search recall.
* **Generic webhook integration.** Configure the URL, headers, body template (Mustache-style placeholders) and method for any CRM — HubSpot, Salesforce, Zapier, n8n or custom endpoint.
* **No lead storage in the database.** Leads are emitted directly to the configured webhook and email recipient; the plugin keeps only anonymous analytics events.
* **Shadow DOM widget** with zero theme CSS conflicts. Vanilla ES2020, ~30 KB gzipped.
* **Configurable triggers.** Page-load delay, scroll percentage, exit-intent, button-click selector, URL match, returning visitor, UTM match.
* **Brand-driven styling.** Colors, placement, agent name and avatar all configurable from the admin UI.
* **GA4 + GTM events.** Each logical event mapped to an admin-configurable GA4 event name; lead capture fires the recommended `generate_lead` conversion event.

== Installation ==

1. Upload the plugin ZIP via *Plugins → Add New → Upload Plugin*.
2. Activate.
3. The Setup Wizard launches automatically — walk through five steps to configure branding, integrations and trigger rules.
4. Switch *Plugin Mode* to *Live* on the Dashboard when ready.

== Frequently Asked Questions ==

= Does this plugin use an LLM? =

Not by default. All six features work as deterministic flows. An optional setting enables Claude Haiku for free-text case-study search; this is off out of the box.

= Where are leads stored? =

Nowhere by default. Lead capture fires your configured webhook(s) and sends an email notification. The plugin keeps only anonymous analytics events.

= Does it work with Elementor / Rank Math / NitroPack / CookieYes? =

Yes. The plugin auto-detects and integrates with each on activation.

== Changelog ==

= 1.0.0 =
* Initial release. Phase 1 scaffold: foundation, lead qualifier, webhook integration, GA4 events, trigger engine.
