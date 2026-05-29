/**
 * Exit-intent — Shadow-DOM-scoped modal that catches abandoning visitors
 * with a lead-magnet offer (free PDF / checklist / report).
 *
 * Triggers:
 *   - desktop: mouseleave near the top edge of the viewport
 *   - mobile:  rapid scroll-up gesture near the top of the page
 *
 * Armed only after ARMED_AFTER_MS to avoid firing on bounce-back from a
 * shared link; rearmed every REARMED_AFTER_MS (default 7 days) per visitor
 * via localStorage.
 */

const ARMED_AFTER_MS  = 8 * 1000;
const REARMED_AFTER_MS = 7 * 24 * 60 * 60 * 1000; // 7 days
const LS_LAST_EXIT_KEY = 'emi_last_exit_modal';

let fired = false;
let timer = null;

export function initExitIntent({ shadow, host, i18n, ga4, visitorId, cfg }) {
	const lastExit = Number(localStorage.getItem(LS_LAST_EXIT_KEY) || 0);
	if (Date.now() - lastExit < REARMED_AFTER_MS) return;

	timer = setTimeout(() => arm(), ARMED_AFTER_MS);

	function arm() {
		const isMobile = matchMedia('(max-width: 768px)').matches;

		if (isMobile) {
			// Mobile: detect rapid scroll-up near top of page.
			let lastY = window.scrollY;
			window.addEventListener('scroll', () => {
				if (fired) return;
				const cur = window.scrollY;
				if (cur < lastY - 60 && cur < 200) trigger('exit_intent_mobile');
				lastY = cur;
			}, { passive: true });
		} else {
			document.addEventListener('mouseleave', (e) => {
				if (fired) return;
				if (e.clientY > 0) return;
				trigger('exit_intent_desktop');
			});
		}
	}

	async function trigger(source) {
		if (fired) return;
		fired = true;
		localStorage.setItem(LS_LAST_EXIT_KEY, Date.now().toString());

		const magnet = await fetchMagnet();
		if (!magnet) return; // no eligible magnet — skip

		showModal(magnet, source);
		ga4.fire('exit_modal_shown', { page_url: location.href, magnet_id: magnet.id, source });
	}

	async function fetchMagnet() {
		try {
			const url = new URL(cfg.restUrl + '/exit/magnet', location.origin);
			url.searchParams.set('page_url', location.href);
			url.searchParams.set('lang',     i18n.current());
			const r = await fetch(url, { headers: { 'X-WP-Nonce': cfg.nonce } });
			if (!r.ok) return null;
			const d = await r.json();
			return d && d.id !== undefined ? d : null;
		} catch (e) { return null; }
	}

	function showModal(magnet, source) {
		const overlay = document.createElement('div');
		overlay.className = 'emi-exit-overlay';
		overlay.innerHTML = `
			<div class="emi-exit-modal" role="dialog" aria-modal="true" aria-labelledby="emi-exit-title">
				<button class="emi-exit-close" aria-label="${escapeAttr(i18n.t('close','Close'))}">×</button>
				<div class="emi-exit-icon">🎁</div>
				<h2 id="emi-exit-title">${magnet.title || escapeHtml(i18n.t('exit_title','Wait — before you go!'))}</h2>
				<p>${magnet.pitch || escapeHtml(i18n.t('exit_desc','Grab a free checklist tailored to your industry.'))}</p>
				<form>
					<input type="email" placeholder="you@company.com" required autocomplete="email" />
					<button type="submit" class="emi-exit-cta">${escapeHtml(magnet.cta_text || i18n.t('exit_cta','Send it to me ›'))}</button>
				</form>
				<p class="emi-exit-fineprint">${escapeHtml(i18n.t('exit_fineprint','No spam. Unsubscribe anytime.'))}</p>
			</div>
		`;
		shadow.appendChild(overlay);

		const form  = overlay.querySelector('form');
		const input = overlay.querySelector('input[type=email]');
		const close = () => { overlay.remove(); };

		overlay.querySelector('.emi-exit-close').addEventListener('click', close);
		overlay.addEventListener('click', (e) => { if (e.target === overlay) close(); });

		form.addEventListener('submit', async (e) => {
			e.preventDefault();
			const email = input.value.trim();
			if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { input.focus(); return; }

			try {
				const r = await fetch(cfg.restUrl + '/exit/capture', {
					method:  'POST',
					headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': cfg.nonce },
					body:    JSON.stringify({
						email,
						magnet_id:  magnet.id,
						page_url:   location.href,
						lang:       i18n.current(),
						visitor_id: visitorId,
						source,
					}),
				});
				const d = await r.json();
				if (d.ok) {
					overlay.querySelector('.emi-exit-modal').innerHTML = `
						<div class="emi-exit-icon">✅</div>
						<h2>${escapeHtml(i18n.t('exit_sent_title','Sent!'))}</h2>
						<p>${escapeHtml(i18n.t('exit_sent_desc','Check your inbox in the next minute.'))}</p>
					`;
					ga4.fire('exit_modal_email_submitted', { magnet_id: magnet.id });
					setTimeout(close, 3000);
				} else {
					alert(d.message || 'Something went wrong.');
				}
			} catch (err) {
				alert(i18n.t('network_error', 'Network hiccup. Please try again.'));
			}
		});

		input.focus();
	}
}

function escapeHtml(s) { return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]); }
function escapeAttr(s) { return escapeHtml(s); }
