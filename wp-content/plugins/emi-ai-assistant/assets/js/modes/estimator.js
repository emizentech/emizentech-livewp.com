/**
 * Cost Estimator — 3 chips → formula result + optional PDF email follow-up.
 */
const STATE = { step: 'type', data: {} };

export function runEstimator(ctx) {
	STATE.step = 'type'; STATE.data = {};
	ctx.addBot(ctx.i18n.t('welcome_estimator', "Sure — let's get you a ballpark. <b>What kind of project?</b>"));
	ctx.addChips(['Food delivery app', 'E-commerce store', 'SaaS dashboard', 'Mobile app MVP', 'Custom CRM'], (t) => { STATE.data.type = t; askPlatform(ctx); });
}

runEstimator.handleInput = async function (text, ctx) {
	if (STATE.step === 'await_email') {
		if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(text)) {
			ctx.addBot('That email doesn\'t look right — try again?');
			return;
		}
		STATE.data.email = text;
		await sendPdf(ctx);
	}
};

function askPlatform(ctx) {
	STATE.step = 'platform';
	ctx.addBot('Which <b>platforms</b>?');
	ctx.addChips(['iOS + Android', 'Web only', 'iOS + Android + Web'], (p) => { STATE.data.platform = p; askScope(ctx); });
}

function askScope(ctx) {
	STATE.step = 'scope';
	ctx.addBot('Roughly <b>how many key features</b>?');
	ctx.addChips(['MVP (5-8)', 'Standard (10-15)', 'Full-featured (20+)'], (s) => { STATE.data.scope = s; compute(ctx); });
}

async function compute(ctx) {
	try {
		const r = await fetch(window.EmiAIConfig.restUrl + '/estimate', {
			method:  'POST',
			headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': window.EmiAIConfig.nonce },
			body:    JSON.stringify({
				project_type:  STATE.data.type,
				platforms:     STATE.data.platform,
				feature_count: STATE.data.scope,
			}),
		});
		STATE.data.estimate = await r.json();
		const e = STATE.data.estimate;
		ctx.addBot("Based on similar projects we've delivered, here's your <b>ballpark</b>:");
		ctx.addCard(`<div class="emi-estimate-card">
			<small>Estimated cost range</small>
			<div class="emi-price">$${fmt(e.low)} – $${fmt(e.high)}</div>
			<small>⏱ ${e.weeks} weeks · 👥 ${e.team} engineers</small>
		</div>`);
		ctx.ga4.fire('flow_completed', { mode: 'estimator', turns: 3 });
		ctx.addBot('Want a detailed PDF estimate broken down by module? Just type your email below.');
		STATE.step = 'await_email';
		ctx.addChips(['📅 Talk to a solutions engineer instead'], (a) => {
			if (a.includes('Talk')) ctx.switchMode('scheduler');
		});
	} catch (err) {
		ctx.addBot('⚠️ Network hiccup. Please try again.');
	}
}

async function sendPdf(ctx) {
	try {
		const r = await fetch(window.EmiAIConfig.restUrl + '/estimate', {
			method:  'POST',
			headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': window.EmiAIConfig.nonce },
			body:    JSON.stringify({
				project_type:  STATE.data.type,
				platforms:     STATE.data.platform,
				feature_count: STATE.data.scope,
				email:         STATE.data.email,
				send_pdf:      true,
			}),
		});
		const d = await r.json();
		if (d.pdf_queued) {
			ctx.addBot(`📧 PDF estimate is on its way to <b>${escape(STATE.data.email)}</b> — should arrive within a minute.`);
			ctx.ga4.fire('lead_captured', { source: 'estimator', mode: 'estimator', budget_band: '' });
		} else {
			ctx.addBot('⚠️ Could not queue the PDF. Please try again or contact us.');
		}
	} catch (e) {
		ctx.addBot('⚠️ Network hiccup. Please try again.');
	}
}

function fmt(n) { return Number(n || 0).toLocaleString('en-US'); }
function escape(s) { return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]); }
