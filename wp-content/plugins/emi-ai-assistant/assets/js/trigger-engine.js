/**
 * Trigger engine. Evaluates admin-configured rules to decide when to open
 * the widget. Phase 3 supports 9 rule types:
 *   - page_load_delay     fires N seconds after DOMContentLoaded
 *   - exit_intent         desktop mouseleave-top + mobile scroll-up gesture
 *   - button_click        opens widget on CSS-selector click
 *   - url_match           opens when location.href contains a pattern
 *   - scroll_percent      after visitor scrolls past N% of page height
 *   - time_on_page        after N seconds of cumulative focus
 *   - returning_visitor   visitor_id present + last visit > N days ago
 *   - utm_match           matches utm_source=… and/or utm_campaign=…
 *   - idle                no input (mouse/touch/scroll/key) for N seconds
 *
 * Rules combine with OR. A single 'fired' flag prevents double-open per
 * page load (visitor can still re-open manually via FAB).
 */

const REARMED_MS  = 30 * 60 * 1000;  // 30 minutes
const ARMED_AFTER = 8000;            // exit-intent grace
const VISITOR_LAST_VISIT_KEY = 'emi_last_visit_at';

let fired = false;

export function initTriggers(rules, { openPanel, ga4 }) {
	if (!Array.isArray(rules) || rules.length === 0) return;

	// Update returning-visitor tracker at load time.
	const lastVisit = Number(localStorage.getItem(VISITOR_LAST_VISIT_KEY) || 0);
	localStorage.setItem(VISITOR_LAST_VISIT_KEY, Date.now().toString());

	const lastExit  = Number(localStorage.getItem('emi_last_exit') || 0);
	const sinceLast = Date.now() - lastExit;

	// Sort by priority desc so higher-priority rules win when fired
	// simultaneously.
	const sorted = [...rules].filter(r => r.enabled).sort((a, b) => (b.priority || 0) - (a.priority || 0));

	for (const rule of sorted) {
		switch (rule.type) {
			case 'page_load_delay':   armPageLoadDelay(rule, openPanel); break;
			case 'exit_intent':       armExitIntentTrigger(rule, openPanel, sinceLast); break;
			case 'button_click':      armButtonClick(rule, openPanel); break;
			case 'url_match':         armUrlMatch(rule, openPanel); break;
			case 'scroll_percent':    armScrollPercent(rule, openPanel); break;
			case 'time_on_page':      armTimeOnPage(rule, openPanel); break;
			case 'returning_visitor': armReturningVisitor(rule, openPanel, lastVisit); break;
			case 'utm_match':         armUtmMatch(rule, openPanel); break;
			case 'idle':              armIdle(rule, openPanel); break;
		}
	}
}

// --- Existing 4 rules (Phase 1) -----------------------------------------

function armPageLoadDelay(rule, openPanel) {
	const delay = (rule.params?.delay_seconds ?? 30) * 1000;
	setTimeout(() => {
		if (fired) return;
		fired = true;
		openPanel(rule.mode || 'recommender', 'auto');
	}, delay);
}

function armExitIntentTrigger(rule, openPanel, sinceLast) {
	if (sinceLast < REARMED_MS) return;
	const isMobile = matchMedia('(max-width: 768px)').matches;
	const handler = (e) => {
		if (fired) return;
		if (!isMobile && e.clientY > 0) return;
		if (Date.now() - performance.timeOrigin < ARMED_AFTER) return;
		fired = true;
		localStorage.setItem('emi_last_exit', Date.now().toString());
		openPanel(rule.mode || 'recommender', 'exit_intent');
	};
	if (isMobile) {
		let lastY = window.scrollY;
		window.addEventListener('scroll', () => {
			if (fired) return;
			const cur = window.scrollY;
			if (cur < lastY - 50 && cur < 200) handler({ clientY: 0 });
			lastY = cur;
		}, { passive: true });
	} else {
		document.addEventListener('mouseleave', handler);
	}
}

function armButtonClick(rule, openPanel) {
	const sel = rule.params?.selector;
	if (!sel) return;
	document.addEventListener('click', (e) => {
		const target = e.target.closest(sel);
		if (target) {
			e.preventDefault();
			fired = true;
			openPanel(rule.mode || 'qualifier', 'cta');
		}
	}, true);
}

function armUrlMatch(rule, openPanel) {
	const pat = rule.params?.url_pattern;
	if (!pat) return;
	if (location.href.indexOf(pat) !== -1) {
		setTimeout(() => {
			if (fired) return;
			fired = true;
			openPanel(rule.mode || 'qualifier', 'url');
		}, 1500);
	}
}

// --- Phase 3 additions --------------------------------------------------

function armScrollPercent(rule, openPanel) {
	const pct = Math.max(0, Math.min(100, Number(rule.params?.percent ?? 50)));
	const handler = () => {
		if (fired) return;
		const doc = document.documentElement;
		const scrolled = (window.scrollY + doc.clientHeight) / Math.max(doc.scrollHeight, 1) * 100;
		if (scrolled >= pct) {
			fired = true;
			window.removeEventListener('scroll', handler);
			openPanel(rule.mode || 'recommender', 'scroll');
		}
	};
	window.addEventListener('scroll', handler, { passive: true });
}

function armTimeOnPage(rule, openPanel) {
	const secs = Math.max(1, Number(rule.params?.seconds ?? 60));
	let accumulated = 0;
	let lastTick    = Date.now();
	let active      = !document.hidden;

	document.addEventListener('visibilitychange', () => {
		if (document.hidden) {
			if (active) accumulated += (Date.now() - lastTick) / 1000;
			active = false;
		} else {
			lastTick = Date.now();
			active   = true;
		}
	});

	const interval = setInterval(() => {
		if (fired) { clearInterval(interval); return; }
		if (active) {
			accumulated += (Date.now() - lastTick) / 1000;
			lastTick     = Date.now();
		}
		if (accumulated >= secs) {
			fired = true;
			clearInterval(interval);
			openPanel(rule.mode || 'recommender', 'time_on_page');
		}
	}, 1000);
}

function armReturningVisitor(rule, openPanel, lastVisitMs) {
	const minDays = Math.max(1, Number(rule.params?.min_days_since ?? 1));
	const sinceMs = Date.now() - lastVisitMs;
	const dayMs   = 24 * 60 * 60 * 1000;
	if (lastVisitMs && sinceMs >= minDays * dayMs) {
		setTimeout(() => {
			if (fired) return;
			fired = true;
			openPanel(rule.mode || 'recommender', 'returning_visitor');
		}, 2500);
	}
}

function armUtmMatch(rule, openPanel) {
	const p = new URLSearchParams(location.search);
	const expectSource   = rule.params?.utm_source   || '';
	const expectCampaign = rule.params?.utm_campaign || '';
	const actualSource   = p.get('utm_source')   || '';
	const actualCampaign = p.get('utm_campaign') || '';

	const sourceOk   = !expectSource   || actualSource.toLowerCase()   === expectSource.toLowerCase();
	const campaignOk = !expectCampaign || actualCampaign.toLowerCase() === expectCampaign.toLowerCase();

	if (sourceOk && campaignOk && (actualSource || actualCampaign)) {
		setTimeout(() => {
			if (fired) return;
			fired = true;
			openPanel(rule.mode || 'qualifier', 'utm');
		}, 1500);
	}
}

function armIdle(rule, openPanel) {
	const secs = Math.max(5, Number(rule.params?.seconds ?? 60));
	let timer  = null;
	const reset = () => {
		clearTimeout(timer);
		if (fired) return;
		timer = setTimeout(() => {
			if (fired) return;
			fired = true;
			openPanel(rule.mode || 'recommender', 'idle');
		}, secs * 1000);
	};
	['mousemove', 'keydown', 'scroll', 'touchstart', 'click'].forEach(evt =>
		window.addEventListener(evt, reset, { passive: true })
	);
	reset();
}
