/**
 * Trigger engine. Evaluates admin-configured rules to decide when to open
 * the widget. Phase 1 supports: page_load_delay, exit_intent, button_click,
 * url_match.
 */

const REARMED_MS  = 30 * 60 * 1000;        // 30 minutes
const ARMED_AFTER = 8000;                  // don't fire exit-intent in first 8s

let fired = false;

export function initTriggers(rules, { openPanel, ga4 }) {
	if (!Array.isArray(rules) || rules.length === 0) return;

	const lastExit = Number(localStorage.getItem('emi_last_exit') || 0);
	const sinceLast = Date.now() - lastExit;

	for (const rule of rules) {
		if (!rule.enabled) continue;
		switch (rule.type) {
			case 'page_load_delay': armPageLoadDelay(rule, openPanel); break;
			case 'exit_intent':     armExitIntent(rule, openPanel, sinceLast); break;
			case 'button_click':    armButtonClick(rule, openPanel); break;
			case 'url_match':       armUrlMatch(rule, openPanel); break;
		}
	}
}

function armPageLoadDelay(rule, openPanel) {
	const delay = (rule.params?.delay_seconds ?? 30) * 1000;
	setTimeout(() => {
		if (fired) return;
		fired = true;
		openPanel(rule.mode || 'recommender', 'auto');
	}, delay);
}

function armExitIntent(rule, openPanel, sinceLast) {
	if (sinceLast < REARMED_MS) return; // rearm window not elapsed

	const isMobile = matchMedia('(max-width: 768px)').matches;

	const handler = (e) => {
		if (fired) return;

		if (!isMobile) {
			// Desktop — mouse leaving top edge.
			if (e.clientY > 0) return;
		}

		if (Date.now() - performance.timeOrigin < ARMED_AFTER) return; // grace period

		fired = true;
		localStorage.setItem('emi_last_exit', Date.now().toString());
		openPanel(rule.mode || 'recommender', 'exit_intent');
	};

	if (isMobile) {
		// Mobile fallback: scroll-up after dwelling near top.
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
