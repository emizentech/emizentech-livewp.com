/**
 * Emi AI Assistant — frontend widget entry.
 *
 * Mounts a Shadow DOM container, schedules trigger evaluation, and lazy-loads
 * the chat panel on first FAB click. Zero LLM round-trip; deterministic flows.
 */

import { initTriggers } from './trigger-engine.js';
import { GA4 } from './ga4-bridge.js';
import { I18n } from './i18n.js';
import { mountChatPanel } from './chat-panel.js';
import { initExitIntent } from './exit-intent.js';

const CFG = window.EmiAIConfig || {};

// --- Consent gate -----------------------------------------------------------
function hasConsent() {
	const c = CFG.consent || { mode: 'implicit' };
	if (c.mode === 'implicit') return true;
	if (c.mode === 'cookieyes') {
		const name = c.cookie_name || 'cookielawinfo-checkbox-functional';
		const match = document.cookie.match(new RegExp('(?:^|; )' + name + '=([^;]*)'));
		return match && decodeURIComponent(match[1]) === (c.expected_value || 'yes');
	}
	return true;
}

function waitForConsent(cb) {
	if (hasConsent()) return cb();
	const timer = setInterval(() => {
		if (hasConsent()) {
			clearInterval(timer);
			cb();
		}
	}, 1000);
}

// --- Visitor ID -------------------------------------------------------------
function ensureVisitorId() {
	let id = localStorage.getItem('emi_visitor_id');
	if (!id) {
		id = (crypto?.randomUUID?.() || ('emi-' + Math.random().toString(36).slice(2) + Date.now().toString(36)));
		try { localStorage.setItem('emi_visitor_id', id); } catch (_) {}
	}
	return id;
}

// --- Bootstrap --------------------------------------------------------------
function boot() {
	if (window.__emiAILoaded) return;
	window.__emiAILoaded = true;

	const visitorId = ensureVisitorId();
	const i18n      = new I18n(CFG.languages, CFG.restUrl);
	const ga4       = new GA4(CFG.events, CFG.ga4, visitorId);

	// Create the root + shadow DOM container.
	const host = document.createElement('div');
	host.id = 'emi-ai-root';
	host.style.cssText = 'position:fixed;z-index:2147483600;pointer-events:none;inset:auto 0 0 0;';
	if (i18n.current() === 'ar') {
		host.setAttribute('dir', 'rtl');
	}
	document.body.appendChild(host);
	const shadow = host.attachShadow({ mode: 'open' });

	// Inject scoped CSS (CFG.brandingVars set via :root vars on host).
	applyBranding(host, CFG.branding || {});

	const cssLink = document.createElement('link');
	cssLink.rel = 'stylesheet';
	cssLink.href = (CFG.assetsUrl || '') + 'widget.css';
	// Fallback: inline the bare minimum if external CSS fails.
	shadow.appendChild(cssLink);

	// FAB.
	const fab = document.createElement('button');
	fab.className = 'emi-fab';
	fab.setAttribute('aria-label', i18n.t('open_chat', 'Open chat'));
	fab.innerHTML = `<span class="emi-fab-pulse"></span><span class="emi-fab-icon">💬</span>`;
	shadow.appendChild(fab);

	let panel = null;
	let panelOpen = false;
	function openPanel(mode = 'qualifier', source = 'fab') {
		if (!panel) {
			panel = mountChatPanel(shadow, { i18n, ga4, visitorId, cfg: CFG, mode });
		}
		panel.open(mode);
		panelOpen = true;
		ga4.fire('widget_opened', { mode, source });
	}

	fab.addEventListener('click', () => {
		if (panelOpen) {
			panel?.close();
			panelOpen = false;
			ga4.fire('widget_closed', { duration_s: panel?.durationSec() ?? 0, msg_count: panel?.msgCount() ?? 0 });
			return;
		}
		openPanel('qualifier', 'fab');
	});

	// Public API.
	window.EmiAI = {
		open(mode = 'recommender') { openPanel(mode, 'api'); },
		close()                    { panel?.close(); panelOpen = false; },
		setLanguage(lang) {
			i18n.setLanguage(lang).then(() => {
				if (lang === 'ar') host.setAttribute('dir', 'rtl');
				else                host.removeAttribute('dir');
				panel?.rerender();
			});
		},
		fire(event, props = {})    { ga4.fire(event, props); },
		visitorId,
	};

	// Trigger engine: page-load-delay, exit-intent, button-click, URL match,
	// + scroll_percent, time_on_page, returning_visitor, utm_match, idle.
	initTriggers(CFG.triggers || [], { openPanel, ga4 });

	// Exit-intent lead-magnet modal (separate from chat panel — operates as
	// a Shadow-DOM-scoped overlay so it can render before chat opens).
	if (CFG.exitIntent?.enabled !== false) {
		initExitIntent({ shadow, host, i18n, ga4, visitorId, cfg: CFG });
	}

	// Show FAB after configured delay.
	setTimeout(() => { fab.classList.add('emi-fab-visible'); }, CFG.fabDelayMs ?? 1500);

	ga4.fire('widget_loaded', { page_url: location.href, lang: i18n.current(), tz: Intl.DateTimeFormat().resolvedOptions().timeZone });

	// URL ?emi_open=qualifier auto-open.
	const params = new URLSearchParams(location.search);
	const auto   = params.get('emi_open');
	if (auto) openPanel(auto, 'url');
}

function applyBranding(host, b) {
	const vars = {
		'--emi-primary':   b.primary   || '#F26B1F',
		'--emi-secondary': b.secondary || '#0E2A47',
		'--emi-accent':    b.accent    || '#0FA3A3',
		'--emi-text':      b.text      || '#1B2733',
		'--emi-bg':        b.bg        || '#FAFCFE',
		'--emi-line':      b.line      || '#E3E8EE',
		'--emi-radius':    b.radius    || '14px',
	};
	for (const [k, v] of Object.entries(vars)) host.style.setProperty(k, v);
}

// --- Entry ------------------------------------------------------------------
function start() {
	waitForConsent(boot);
}

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', start);
} else {
	start();
}
