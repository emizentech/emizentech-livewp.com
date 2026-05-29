/**
 * Lead Qualifier flow — sequential question state machine, no LLM.
 * Replaces the static "Get a Quote" form.
 */

const STATE = { step: 'name', data: {} };

export function runQualifier(ctx) {
	STATE.step = 'name';
	STATE.data = {};
	ctx.addBot(ctx.i18n.t('welcome_qualifier', "Hi! 👋 Just 4 quick questions and I'll route you instantly. <b>What's your name?</b>"));
}

runQualifier.handleInput = async function (text, ctx) {
	switch (STATE.step) {
		case 'name':
			if (text.length < 2 || text.length > 80) {
				ctx.addBot(ctx.i18n.t('name_invalid', 'Please share your full name.'));
				return;
			}
			STATE.data.name = text;
			STATE.step = 'email';
			ctx.addBot(`Nice to meet you, <b>${escape(STATE.data.name)}</b>! 👋 ${ctx.i18n.t('q_email', "What's your work email?")}`);
			ctx.ga4.fire('question_answered', { mode: 'qualifier', step: 'name', answer_value: 'redacted' });
			return;
		case 'email':
			if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(text)) {
				ctx.addBot(ctx.i18n.t('email_invalid', "That email doesn't look right — could you try again?"));
				return;
			}
			STATE.data.email = text;
			STATE.step = 'budget';
			ctx.addBot(ctx.i18n.t('q_budget', 'Thanks! Roughly <b>what budget</b> are you working with?'));
			ctx.addChips(['< $10k', '$10k – $50k', '$50k – $150k', '$150k+'], (b) => pickBudget(b, ctx));
			ctx.ga4.fire('question_answered', { mode: 'qualifier', step: 'email', answer_value: 'redacted' });
			return;
		case 'scope':
			if (text.length < 3 || text.length > 1000) {
				ctx.addBot(ctx.i18n.t('scope_invalid', 'A one-line description is fine.'));
				return;
			}
			STATE.data.scope = text;
			ctx.ga4.fire('question_answered', { mode: 'qualifier', step: 'scope', answer_value: 'redacted' });
			await complete(ctx);
			return;
	}
};

function pickBudget(b, ctx) {
	STATE.data.budget = b;
	STATE.step = 'scope';
	ctx.addBot(ctx.i18n.t('q_scope', 'Got it. <b>What are you building?</b> (1 line is fine)'));
	ctx.ga4.fire('question_answered', { mode: 'qualifier', step: 'budget', answer_value: b });
}

async function complete(ctx) {
	const utm = parseUtm();

	const payload = {
		...STATE.data,
		urgency:   'medium',
		source:    'ai_chat',
		mode:      'qualifier',
		lang:      ctx.i18n.current(),
		timezone:  Intl.DateTimeFormat().resolvedOptions().timeZone,
		page_url:  location.href,
		utm,
		visitor_id: ctx.visitorId,
		hp_field:  '', // honeypot
	};

	try {
		const r = await fetch(window.EmiAIConfig.restUrl + '/lead', {
			method:  'POST',
			headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': window.EmiAIConfig.nonce },
			body:    JSON.stringify(payload),
		});
		const data = await r.json();
		if (data.ok) {
			ctx.addBot(ctx.i18n.t('lead_thanks', `✅ All set, <b>${escape(STATE.data.name)}</b>! I've routed this to our team. We'll email you within 2 hours.`).replace('{name}', escape(STATE.data.name)));
			ctx.ga4.fire('lead_captured', { source: 'qualifier', budget_band: STATE.data.budget, mode: 'qualifier' });
			ctx.ga4.fire('flow_completed', { mode: 'qualifier', turns: 4 });
			ctx.addChips(['📅 Pick a call slot now', "✅ I'll wait for the email"], (a) => {
				if (a.includes('Pick')) ctx.switchMode('scheduler');
				else ctx.addBot('Perfect — talk soon! 👋');
			});
		} else {
			ctx.addBot(`⚠️ ${data.message || ctx.i18n.t('lead_error', 'Something went wrong. Please email us instead.')}`);
			ctx.ga4.fire('error', { code: data.code || 'EMI-1003', where: 'qualifier.lead' });
		}
	} catch (e) {
		ctx.addBot(`⚠️ ${ctx.i18n.t('network_error', 'Network hiccup. Please try again.')}`);
		ctx.ga4.fire('error', { code: 'EMI-4002', where: 'qualifier.network' });
	}
}

function parseUtm() {
	const p = new URLSearchParams(location.search);
	const out = {};
	for (const k of ['source', 'medium', 'campaign', 'term', 'content']) {
		const v = p.get('utm_' + k);
		if (v) out[k] = v;
	}
	return out;
}

function escape(s) {
	return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]);
}
