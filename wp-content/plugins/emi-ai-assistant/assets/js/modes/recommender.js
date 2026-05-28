/**
 * Service Recommender — 3-step chip flow → result card from server lookup.
 */

const STATE = { step: 'service', data: {} };

export function runRecommender(ctx) {
	STATE.step = 'service';
	STATE.data = {};
	ctx.addBot(ctx.i18n.t('welcome_recommender', "Hi! I'm Emi 👋 — let me find the right service for you in 30 seconds. <b>What are you building?</b>"));
	ctx.addChips(['Mobile app', 'E-commerce site', 'Custom software', 'AI / ML solution', 'Salesforce setup'], (s) => pickService(s, ctx));
}

runRecommender.handleInput = function (text, ctx) {
	if (STATE.step === 'service') {
		pickService(text, ctx);
	}
};

function pickService(s, ctx) {
	STATE.data.service = s;
	STATE.step = 'industry';
	ctx.addBot('Got it. <b>What industry?</b>');
	ctx.addChips(['Fintech', 'Healthcare', 'E-commerce / D2C', 'Travel', 'Education', 'Other'], (i) => pickIndustry(i, ctx));
}

function pickIndustry(i, ctx) {
	STATE.data.industry = i;
	STATE.step = 'stage';
	ctx.addBot("And your <b>stage</b>?");
	ctx.addChips(['Just an idea', 'Have wireframes', 'Existing product to scale'], (st) => pickStage(st, ctx));
}

async function pickStage(stage, ctx) {
	STATE.data.stage = stage;
	ctx.ga4.fire('question_answered', { mode: 'recommender', step: 'stage', answer_value: stage });
	try {
		const r = await fetch(window.EmiAIConfig.restUrl + '/recommend', {
			method:  'POST',
			headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': window.EmiAIConfig.nonce },
			body:    JSON.stringify(serviceKey(STATE.data)),
		});
		const reco = await r.json();
		ctx.addBot(`Perfect. Based on what you shared, I'd point you to <b>${escape(reco.service)}</b>. <a href="${escape(reco.page_url)}" target="_blank">Open the service page →</a>`);
		if (reco.case && reco.case.title) {
			ctx.addCard(`<div class="emi-case-card">
				<h4>${escape(reco.case.title)}</h4>
				<div class="emi-case-summary">${escape(reco.case.summary || '')}</div>
				<div class="emi-case-metrics">${(reco.case.metrics || []).map(m => `<span class="emi-metric">${escape(m)}</span>`).join('')}</div>
			</div>`);
		}
		ctx.addChips(reco.cta_chips || ['📅 Book a call', '📝 Get a quote', '📂 See more cases'], (a) => {
			if (a.includes('Book') || a.includes('call')) ctx.switchMode('scheduler');
			else if (a.includes('quote') || a.includes('Qualif')) ctx.switchMode('qualifier');
			else ctx.switchMode('cases');
		});
		ctx.ga4.fire('flow_completed', { mode: 'recommender', turns: 3 });
	} catch (e) {
		ctx.addBot('⚠️ Network hiccup. Please try again.');
		ctx.ga4.fire('error', { code: 'EMI-4002', where: 'recommender' });
	}
}

function serviceKey(d) {
	const map = {
		'Mobile app':       { service: 'mobile_app' },
		'E-commerce site':  { service: 'e-commerce' },
		'Custom software':  { service: 'custom_software' },
		'AI / ML solution': { service: 'ai_ml' },
		'Salesforce setup': { service: 'salesforce' },
	};
	return { ...(map[d.service] || { service: 'mobile_app' }), industry: d.industry, stage: d.stage };
}

function escape(s) { return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]); }
