# Emi AI Assistant — Phase-wise Implementation Plan

Living document. Updates after each phase ships. All work runs on the
**EmizenTech Local Dev Server** (`multisitelocal.ezxdemo.com`); production
is on hold until dev sign-off.

| Field | Value |
|---|---|
| Plugin slug | `emi-ai-assistant` |
| Source repo | `git@github.com:emizentech/emizentech-livewp.com` |
| Source path | `wp-content/plugins/emi-ai-assistant/` |
| Dev target | `/var/www/domains/multisitelocal.ezxdemo.com/wp-content/plugins/emi-ai-assistant/` |
| Production | **OFF-LIMITS** until dev validation complete |

---

## At a glance — what each phase ships

| Phase | Length | What ships | Branch |
|---|---|---|---|
| **0 — Dev environment prep** | 0.5 day | composer install, npm build, rsync to dev, fix perms, activate, wizard, smoke test | `feature/emi-ai-plugin-phase1` (already pushed) |
| **1 — Foundation + Qualifier + Webhooks** | ✅ **done** | Plugin scaffold, REST, 3 tables, qualifier flow, WebhookSender, EmailSender, GA4 bridge, trigger engine (4 rules), 12 admin screens, widget shell, 3 CPTs, CLI | `feature/emi-ai-plugin-phase1` (PR open) |
| **2 — Recommender + Estimator + Cases** | 1 week | Full deterministic recommender, BASE/PLAT/SCOPE editor with live preview, FULLTEXT case search UI, faceted chip filters, full Services/Case Studies/Lead Magnets/FAQs CRUD, sample data seeder, PDF estimate generator (mpdf) + email | `feature/emi-ai-plugin-phase2` |
| **3 — Scheduler + Exit-intent + Multilingual + Hardening** | 1 week | Calendly + Generic-webhook calendar, TZ chain, slot generator with working hours, exit-intent modal, lead-magnet PDF delivery, AR/ES/FR i18n JSON, RTL handling, returning-visitor rule, scroll-% + UTM trigger rules, GDPR DSR workflow UI, PII scrubber regex pack, load test, rollback drill | `feature/emi-ai-plugin-phase3` |
| **4 — Production rollout** | (gated by dev sign-off) | WP.com Atomic compatibility verification, NitroPack exclusion, CookieYes wiring, Rank Math sitemap exclusion, GSC conversion goal, monitoring | `release/v1.0.0` |

---

## Phase 0 — Dev environment prep (do this BEFORE Phase 1 acceptance test)

**Goal:** get `emi-ai-assistant/` installed and activated on
`multisitelocal.ezxdemo.com` with composer + npm dependencies present.

### Steps

| # | Action | Where | Approx time |
|---|---|---|---|
| 1 | `cd wp-content/plugins/emi-ai-assistant && composer install --no-dev --optimize-autoloader` | local | 60 s |
| 2 | `npm ci && npm run build` (once `scripts/build.mjs` exists — Phase 2 ships it; Phase 1 source files run directly) | local | 30 s |
| 3 | Rsync plugin dir → dev server | local → dev | 30 s |
| 4 | Fix file ownership to `htdocs:htdocs` on dev | dev (root) | 1 s |
| 5 | `wp plugin activate emi-ai-assistant` (multisite: network-activate) | dev | 5 s |
| 6 | Confirm wizard auto-launches in WP admin | dev (browser) | 30 s |
| 7 | Run wizard steps 1 + 2 + 5 minimally to get out of sandbox mode | dev (browser) | 2 min |
| 8 | Configure one webhook destination (e.g., webhook.site) + one email recipient | dev (browser) | 1 min |
| 9 | Verify Diagnostics page is all-green | dev (browser) | 30 s |
| 10 | End-to-end test: open widget on a frontend page, complete qualifier, confirm webhook + email arrive | dev (browser + webhook.site) | 2 min |

### Pre-flight checks (Claude runs)

- [ ] PHP 8.1+ confirmed on dev: `php -v` ✓ (8.2.27 confirmed)
- [ ] composer + npm present ✓ (2.8.9 / v20.20.2 confirmed)
- [ ] WP 6.4+ on dev ✓ (6.7 confirmed)
- [ ] MySQL InnoDB FULLTEXT supported (real tables — yes; temp tables — no, expected)
- [ ] Dev WP is multisite ✓ (matches production topology)
- [ ] Plugin dir does NOT yet exist on dev (verified — no clobber risk)

### Rsync command (Phase 0)

```bash
cd "/Users/amitsamsukha/Documents/EmizenTech/EmizenTech.com website"

rsync -avz --delete \
  --exclude='node_modules/' \
  --exclude='.git/' \
  --exclude='tests/' \
  -e 'ssh -p 2202' \
  wp-content/plugins/emi-ai-assistant/ \
  root@198.244.167.101:/var/www/domains/multisitelocal.ezxdemo.com/wp-content/plugins/emi-ai-assistant/

ssh -p 2202 root@198.244.167.101 \
  'chown -R htdocs:htdocs /var/www/domains/multisitelocal.ezxdemo.com/wp-content/plugins/emi-ai-assistant && \
   wp --path=/var/www/domains/multisitelocal.ezxdemo.com --allow-root plugin activate emi-ai-assistant --network'
```

### Phase 0 acceptance

- ✅ Plugin appears in `wp plugin list --status=active`.
- ✅ Visiting any admin page redirects to Setup Wizard (first activation only).
- ✅ Wizard completes; mode = Live.
- ✅ Visiting front-end as anonymous visitor: FAB appears after the configured delay.
- ✅ Completing qualifier flow: lead arrives at webhook.site + admin email.
- ✅ GA4 DebugView shows `generate_lead` event (if GA4 keys configured in Events Mapping).

---

## Phase 1 — Foundation + Qualifier + Webhooks ✅ DONE

Already shipped in `feature/emi-ai-plugin-phase1`. Files: 74. Lines: 5,881.
Lint: 100 % clean (53 PHP + 9 JS).

### What was delivered (recap)

- Bootstrap, autoload, Activator with `dbDelta()` + capability + cron + sample option seeds, Deactivator, Updater, uninstall.php (opt-in).
- 3 DB tables: `wp_emi_services`, `wp_emi_case_studies` (FULLTEXT), `wp_emi_events`.
- REST namespace `emi-ai/v1` with 12 endpoints. No SSE.
- Flow engines: `LeadQualifier`, `ServiceRecommender`, `EstimateCalculator`, `CaseStudyFinder`, `SchedulerService`, `ExitIntentService`.
- 3 CPTs: `emi_case_study` (FULLTEXT sync hook), `emi_lead_magnet`, `emi_faq`. All excluded from sitemaps + search.
- `WebhookSender` (generic POST + Mustache-lite `BodyTemplateEngine` + cron-retry queue + send-test).
- `EmailSender` (wp_mail HTML template with placeholders).
- `CalendarClient` interface + `CalendlyClient` + `NullClient` fallback.
- `GA4EventBus` (Measurement Protocol mirror) + `EventLogger` (anonymous, no PII).
- Infra: `Cache` (autodetect object cache → transients; **no Redis**), `RateLimiter`, `Logger`, `Sanitizer`.
- Privacy: `PiiScrubber` (regex redact CC/SSN/Aadhaar), `ConsentGate` (CookieYes detection).
- Admin: 12 screens — Dashboard, Setup Wizard, Settings (7 tabs), Integrations, Triggers & Branding, Events Mapping, Flow Editor, Services list, Diagnostics, Tools.
- Widget: Shadow DOM, FAB, chat panel, 5 mode tabs, `TriggerEngine` (4 rule types), `GA4` bridge, `I18n` loader. Vanilla ES2020.
- CLI: `wp emi-ai {health,cache purge,reindex,retry,cleanup,webhook send-test}`.
- Sample data JSON: 5 services + 5 case studies.

### Phase 1 acceptance (run on dev after Phase 0)

| # | Test | Expected |
|---|---|---|
| 1.1 | `wp plugin activate emi-ai-assistant` succeeds | ✓ no errors |
| 1.2 | `wp db query "SHOW TABLES LIKE 'wp_emi_%'"` | 3 rows |
| 1.3 | `wp db query "SHOW INDEX FROM wp_emi_case_studies WHERE Index_type='FULLTEXT'"` | 1+ rows |
| 1.4 | `wp cron event list \| grep emi_ai` | 2 cron events scheduled |
| 1.5 | First admin pageview → redirects to wizard | ✓ |
| 1.6 | Sandbox mode: anonymous front-end visit → no widget | ✓ |
| 1.7 | Sandbox mode: `?emi_admin_preview=1` as admin → widget visible | ✓ |
| 1.8 | Live mode: front-end visit → FAB appears after delay | ✓ |
| 1.9 | Qualifier flow completes → webhook delivered + email sent | both confirmed |
| 1.10 | `wp_emi_events` has a `lead_captured` row (no PII) | ✓ |
| 1.11 | No `wp_emi_leads` / `wp_emi_sessions` / `wp_emi_messages` tables created | ✓ |
| 1.12 | GA4 DebugView shows `generate_lead` (if GA4 keys set) | ✓ |
| 1.13 | Diagnostics page all-green except optional integrations | ✓ |

If any acceptance row fails, file as a Phase-1 bug fix on the same branch.

---

## Phase 2 — Recommender + Estimator + Cases (1 week)

### Goals

- Complete the remaining 3 of 4 chat features so the plugin replaces all of
  the homepage's lead-gen surfaces, not just the qualifier form.
- Make every admin-editable field actually editable from admin (no JSON-textarea
  fallbacks left over from Phase 1).
- Generate and email PDF estimates within 60 s.

### Deliverables

#### 2.1 Service Recommender (deterministic)

| File | Change |
|---|---|
| `src/Flow/ServiceRecommender.php` | Already shipped — verify against Phase 1 flow |
| `src/Admin/FlowEditor.php` | Replace JSON-textarea with structured-form editor for recommender map |
| `assets/js/modes/recommender.js` | Already shipped — verify chip flow |
| Sample data seed | Adds 5 mappings: mobile / ecommerce / custom / ai / salesforce |

**Acceptance:** 3 chip clicks → 1 service page link + 1 case study card in ≤ 2 s. Lookup-table edit in admin reflects on next session.

#### 2.2 Cost Estimator + PDF

| File | Change |
|---|---|
| `src/Flow/EstimateCalculator.php` | Already shipped |
| `src/Admin/FlowEditor.php` | Per-row editor for BASE / PLATFORM_MULT / SCOPE_MULT |
| `src/Integration/EstimatePdf.php` | NEW: mpdf-backed PDF builder, modules + hours + deliverables |
| `src/Cron/EstimateMailer.php` | NEW: cron runs every minute, processes queued PDF send jobs |
| `assets/js/modes/estimator.js` | Add email-capture step + "PDF on its way" confirmation |
| `data/samples/estimate-template.html` | mpdf HTML template |

**Acceptance:** Picking food_delivery + iOS+Android + MVP → `low=45,000 high=70,000 weeks=8 team=3` (PHPUnit). Email + PDF arrive within 60 s of submit.

#### 2.3 Smart Case-Study Finder

| File | Change |
|---|---|
| `src/Flow/CaseStudyFinder.php` | Already shipped |
| `src/CPT/CaseStudyCpt.php` | Already shipped (with sync hook) |
| `src/Admin/ListTables/CaseStudiesPage.php` | NEW: WP_List_Table over CPT with sync-status column |
| `assets/js/modes/cases.js` | Add faceted filter chips (industry / region / tech) — client-side narrows last result set |
| Sample data seed | Seeds 5 case studies + FULLTEXT index rebuild |

**Acceptance:** Free-text "Magento for fashion" returns NovaWear within 1 s. Faceted filter narrows without server round-trip. "Sync to FULLTEXT index" admin button rebuilds correctly.

#### 2.4 Content management UIs (the user's "any & all information can be filled up")

| Screen | What ships |
|---|---|
| Services list | Full `WP_List_Table` with bulk actions, CSV import/export, status toggle |
| Case Studies | Edit screen metaboxes for industry / region / tech_stack / metrics repeater / case_url / featured / exclude-from-AI |
| Lead Magnets | Edit screen with pitch / CTA / asset (media picker, PDF only) / eligibility rules editor / cap-per-visitor |
| FAQs | Edit screen with Q / A / topic / languages multi-select / AI-allowed toggle |
| Sample data seeder | Tools → "Seed sample data" button reads `data/samples/*.json` + inserts |

#### 2.5 Phase 2 acceptance

- PHPUnit: 20+ unit tests covering EstimateCalculator, CaseStudyFinder, BodyTemplateEngine, PiiScrubber.
- Jest: 10+ unit tests covering trigger-engine, ga4-bridge, qualifier flow state.
- Playwright: 5 E2E scenarios (full estimator flow, case search with filter, recommender 3-chip flow).
- Manual: all 4 content CPTs editable via admin, no JSON-textarea fallbacks remaining for everyday data entry.

### Phase 2 deploy

```bash
git checkout -b feature/emi-ai-plugin-phase2  # branched from main after Phase 1 merge
# … work …
rsync -avz --delete -e 'ssh -p 2202' \
  --exclude='node_modules/' --exclude='.git/' --exclude='tests/' \
  wp-content/plugins/emi-ai-assistant/ \
  root@198.244.167.101:/var/www/domains/multisitelocal.ezxdemo.com/wp-content/plugins/emi-ai-assistant/
ssh -p 2202 root@198.244.167.101 \
  'chown -R htdocs:htdocs /var/www/domains/multisitelocal.ezxdemo.com/wp-content/plugins/emi-ai-assistant && \
   wp --path=/var/www/domains/multisitelocal.ezxdemo.com --allow-root cache flush'
```

---

## Phase 3 — Scheduler + Exit-intent + Multilingual + Hardening (1 week)

### Goals

- Ship the last 2 chat features (scheduler + exit-intent).
- Translate to AR / ES / FR (native speakers, **no LLM translation**).
- Add the remaining trigger rules + the GDPR DSR workflow + a load test.

### Deliverables

#### 3.1 Timezone-aware Meeting Scheduler

| File | Change |
|---|---|
| `src/Flow/SchedulerService.php` | Already shipped — extend with working-hours filter |
| `src/Integration/CalendarClient/CalendlyClient.php` | Already shipped — wire real API booking |
| `src/Integration/CalendarClient/WebhookClient.php` | NEW: generic-webhook calendar fallback (admin pastes JSON-returning URL) |
| `src/Admin/SettingsPage.php` | Add Calendar provider radio (Calendly / Webhook / None) + working-hours JSON repeater |
| `assets/js/modes/scheduler.js` | Already shipped — verify TZ resolution + slot grid |
| Sample data | Default working hours per common TZ |

**Acceptance:** 4+ slots returned for any TZ within 7 days. Detected TZ correct in ≥ 90 % of Playwright TZ mocks. Calendly booking returns invite URL.

#### 3.2 Exit-intent + Lead Magnet delivery

| File | Change |
|---|---|
| `assets/js/exit-intent.js` | NEW: 8s armed window, desktop mouseleave + mobile scroll-up gesture, 30-min rearm |
| `src/Flow/ExitIntentService.php` | Already shipped — extend with magnet picker per eligibility rules |
| `src/Admin/ListTables/LeadMagnetsPage.php` | NEW: WP_List_Table with impressions / CTR columns (read from `wp_emi_events`) |
| `src/Integration/PdfMailer.php` | NEW: deliver magnet PDF via wp_mail() with attachment |
| `assets/css/widget.css` | Add `.emi-exit-overlay` styles |

**Acceptance:** Modal fires within 100 ms of trigger. Email + PDF arrive in < 60 s. Modal respects 7-day dismiss cookie.

#### 3.3 Multilingual (EN / AR / ES / FR)

| File | Change |
|---|---|
| `languages/json/ar.json` | NEW: ~40 strings, native-speaker translation |
| `languages/json/es.json` | NEW: same |
| `languages/json/fr.json` | NEW: same |
| `assets/css/widget.css` | Add RTL block for `:host([dir="rtl"])` — already shipped, verify |
| `src/REST/I18nController.php` | Already shipped — admin can override per language via `emi_ai_i18n_<lang>` option |
| `src/Admin/SettingsPage.php` | Languages tab — already shipped; add "Edit strings" button per enabled lang |

**Acceptance:** Switching language picker in chat header — every UI string updates immediately. AR conversation renders right-to-left. Native-speaker QA pass ≥ 90 % on 30 sample exchanges per language.

#### 3.4 Remaining trigger rules

| Rule type | Param |
|---|---|
| `scroll_percent` | scroll past N% of page height |
| `time_on_page` | N seconds of focused dwell |
| `returning_visitor` | last visit > N days ago |
| `utm_match` | matches `utm_source=…&utm_campaign=…` |
| `idle` | no input for N seconds |

All added to `assets/js/trigger-engine.js` + `src/Admin/TriggerRulesPage.php`.

#### 3.5 GDPR DSR workflow

| File | Change |
|---|---|
| `src/Privacy/DsrService.php` | NEW: handle visitor "delete my data" requests for `wp_emi_events` |
| `src/REST/DsrController.php` | NEW: `POST /dsr/delete` (auth: admin-only or signed-link) |
| `src/Admin/DsrPage.php` | NEW: queue of pending requests; "Anonymize" or "Hard delete" actions |
| (no leads table to worry about — leads are external) | |

**Acceptance:** A DSR request anonymizes `wp_emi_events.visitor_id` and returns a signed receipt PDF.

#### 3.6 Hardening

- Load test: 200 concurrent widget loads + 50 concurrent qualifier completions for 5 min via `k6`.
- Rate-limit verified: 31 / min from same IP triggers 429.
- PII scrubber regex expanded (UK NI, German Steuer-ID, etc.).
- WP-CLI: add `wp emi-ai dsr delete --visitor=<uuid>`, `wp emi-ai seed --sample`.
- Site Health hook: register `site_status_tests` so WP's own Site Health screen surfaces our diagnostics.
- Rollback drill: deactivate → reactivate → confirm no data loss.

#### 3.7 Phase 3 acceptance

- All Phase 1 + 2 tests still pass on dev.
- Multilingual: language picker round-trip OK in all 4 langs.
- Exit-intent: armed only after 8 s; respects 7-day dismiss.
- Calendly: real booking creates a real Calendly invite.
- DSR: anonymize action produces signed receipt + removes PII rows.
- Load test: zero dropped webhooks under 200 concurrent.

---

## Phase 4 — Production rollout (gated by dev sign-off)

> Not started until you give explicit go-ahead AFTER Phase 3 acceptance on dev.

### Differences vs dev

| Concern | Dev (multisitelocal.ezxdemo.com) | Prod (emizentech.com on WP.com Atomic) |
|---|---|---|
| Hosting | Self-managed, root SSH on port 2202 | WP.com Atomic, SFTP/SSH via `ssh.wp.com` |
| File ownership | `htdocs:htdocs` | WP.com-managed |
| WP-CLI | available | available via Atomic SSH |
| Redis | not used (transients) | not available — same setup |
| Cron | system cron | WP cron + Jetpack |
| Object cache | check installation | check installation |
| Existing chat tools | none active | none active (confirmed earlier) |
| CookieYes | active version `3.4.0` | active version `3.4.0` (production) |
| NitroPack | not active on dev | **active** on prod — needs cache exclusion |
| Rank Math | not active on dev | **active** on prod — needs sitemap filter (already in plugin code) |

### Production rollout checklist

- [ ] Phase 3 acceptance complete on dev with sign-off from product owner.
- [ ] Run `wp emi-ai health` on dev: all-green.
- [ ] Tag release: `v1.0.0`.
- [ ] Build release ZIP via CI (composer install --no-dev + npm run build + zip).
- [ ] Upload to WordPress.com Atomic via SFTP.
- [ ] Activate via WP Admin (NOT network-activate — single-site activation only on the main `emizentech.com`; leave `/blog` subsite alone for now).
- [ ] Set NitroPack to exclude `/wp-json/emi-ai/*`.
- [ ] Configure HubSpot webhook destination + Slack webhook.
- [ ] Configure GA4 measurement ID for production property.
- [ ] Switch plugin mode to Live during low-traffic window (e.g., Friday 18:00 IST).
- [ ] Monitor `wp_emi_events` + admin Diagnostics for 24 h.
- [ ] Roll back if `emi_error` events > 50 in 1 hour.

---

## Branching strategy

```
main
 └── feature/emi-ai-plugin-phase1   ← shipped (PR open)
      └── feature/emi-ai-plugin-phase2   ← branches AFTER Phase 1 PR merged or after dev sign-off
            └── feature/emi-ai-plugin-phase3
                  └── release/v1.0.0     ← production cut
```

Hotfixes branch from `main` and merge back via PR.

## Out of scope for v1

- AI/LLM features (token cost forbidden). The `src/AI/` directory holds
  feature-flagged stubs for v1.1+ Claude Haiku NLU adapter.
- WP.com Atomic-specific optimizations beyond NitroPack exclusion.
- Mobile app companion.
- Multi-tenant offering (the plugin assumes one Emizentech install).
- A/B testing of greetings (v1.1 candidate).
- React-driven admin SPA for Dashboard / Analytics (Phase 1 uses simple
  PHP templates; React upgrade is v1.2 candidate).

## Decisions made so far

| ID | Decision | Phase |
|---|---|---|
| D-01 | No Redis — autodetect WP object cache → transients | 1 |
| D-02 | No SSE — plain JSON REST (deterministic responses are instant) | 1 |
| D-03 | No persistent leads/sessions/messages tables | 1 |
| D-04 | Generic webhook integration (URL/headers/body template configurable) | 1 |
| D-05 | Zero LLM tokens by default; AI behind feature flag | 1 |
| D-06 | GA4 mapped per logical event; `generate_lead` for conversion | 1 |
| D-07 | Calendly = v1 calendar provider; Generic-webhook fallback in Phase 3 | 3 |
| D-08 | Translations: native speakers, no LLM (per spec) | 3 |
| D-09 | Dev target: multisitelocal.ezxdemo.com; production OFF-LIMITS until dev sign-off | 0 |

## Open questions before Phase 0 deploy

1. **Plugin activation scope** — network-activate (so the widget shows on every subsite of the multisite) or single-site activate on the main site only? (Recommendation: single-site for Phase 0 to keep blast radius small; network-activate after Phase 3.)
2. **Webhook destination for dev testing** — should I create a free webhook.site receiver and pre-configure it, or wait for you to paste the URL?
3. **Email recipient for dev testing** — confirm whether to email `admin@multisitelocal.ezxdemo.com` (WP's admin_email default) or a different inbox.
4. **GA4 property for dev** — do you have a separate GA4 property for the dev site, or skip GA4 for now and only test webhook + email delivery?
