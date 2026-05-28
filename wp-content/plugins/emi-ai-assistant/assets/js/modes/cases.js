/**
 * Smart Case-Study Finder — FULLTEXT search backed by server.
 */

export function runCases(ctx) {
	ctx.addBot(ctx.i18n.t('welcome_cases', "Tell me what kind of work you'd like to see. Try: <i>“Magento for fashion brands”</i> or <i>“fintech mobile app”</i>."));
	ctx.addChips(['Magento for fashion', 'Fintech mobile app', 'Healthcare web app', 'Travel booking'], (q) => search(q, ctx));
}

runCases.handleInput = function (text, ctx) { search(text, ctx); };

async function search(q, ctx) {
	try {
		const url = new URL(window.EmiAIConfig.restUrl + '/cases/search', location.origin);
		url.searchParams.set('q', q);
		url.searchParams.set('limit', '3');
		const r = await fetch(url, { headers: { 'X-WP-Nonce': window.EmiAIConfig.nonce } });
		const d = await r.json();
		const list = d.cases || [];
		if (!list.length) {
			ctx.addBot("I couldn't find an exact match — here are a few popular projects.");
			return;
		}
		ctx.addBot(`Found <b>${list.length}</b> projects that match.`);
		list.forEach(c => ctx.addCard(card(c)));
		ctx.addChips(['Ask another', '📅 Book a similar project call', '📝 Get a quote'], (a) => {
			if (a === 'Ask another') ctx.addBot('Sure — type your query below ↓');
			else if (a.includes('Book')) ctx.switchMode('scheduler');
			else ctx.switchMode('qualifier');
		});
	} catch (e) {
		ctx.addBot('⚠️ Network hiccup.');
	}
}

function card(c) {
	const metrics = (c.metrics || []).map(m => {
		if (typeof m === 'string') return `<span class="emi-metric">${escape(m)}</span>`;
		return `<span class="emi-metric">${escape(m.name || '')}${m.value ? ': ' + escape(m.value) : ''}</span>`;
	}).join('');
	const link = c.url ? `<a href="${escape(c.url)}" target="_blank">${escape(c.title)} →</a>` : escape(c.title);
	return `<div class="emi-case-card">
		<h4>${link}</h4>
		<div class="emi-case-summary">${escape(c.summary || '')}</div>
		<div class="emi-case-metrics">${metrics}</div>
	</div>`;
}

function escape(s) { return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]); }
