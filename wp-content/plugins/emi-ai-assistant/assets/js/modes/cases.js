/**
 * Smart Case-Study Finder — FULLTEXT search backed by server + client-side
 * faceted filter chips. Phase 2: chips narrow the last result set without a
 * server round-trip.
 */

const STATE = {
	lastResults: [],
	activeFacets: { industry: '', region: '', tech: '' },
};

export function runCases(ctx) {
	STATE.lastResults  = [];
	STATE.activeFacets = { industry: '', region: '', tech: '' };
	ctx.addBot(ctx.i18n.t('welcome_cases', "Tell me what kind of work you'd like to see. Try: <i>“Magento for fashion brands”</i> or <i>“fintech mobile app”</i>."));
	ctx.addChips(['Magento for fashion', 'Fintech mobile app', 'Healthcare web app', 'Travel booking'], (q) => search(q, ctx));
}

runCases.handleInput = function (text, ctx) { search(text, ctx); };

async function search(q, ctx) {
	try {
		const url = new URL(window.EmiAIConfig.restUrl + '/cases/search', location.origin);
		url.searchParams.set('q', q);
		url.searchParams.set('limit', '6');
		const r = await fetch(url, { headers: { 'X-WP-Nonce': window.EmiAIConfig.nonce } });
		const d = await r.json();
		const list = d.cases || [];
		STATE.lastResults = list;
		STATE.activeFacets = { industry: '', region: '', tech: '' };

		if (!list.length) {
			ctx.addBot("I couldn't find an exact match — try a different keyword or pick one of these:");
			ctx.addChips(['Magento for fashion', 'Fintech mobile app', 'Healthcare web app', 'Travel booking'], (q) => search(q, ctx));
			return;
		}

		ctx.addBot(`Found <b>${list.length}</b> project${list.length === 1 ? '' : 's'} that match.`);
		renderResults(ctx);

		// Build facets from the result set.
		const industries = unique(list.map(c => c.industry).filter(Boolean));
		const regions    = unique(list.map(c => c.region).filter(Boolean));
		const techs      = unique(list.flatMap(c => Array.isArray(c.tech_stack) ? c.tech_stack : []).filter(Boolean));

		renderFacets(ctx, industries, regions, techs);

		setTimeout(() => {
			ctx.addChips(['Ask another', '📅 Book a similar project call', '📝 Get a quote'], (a) => {
				if (a === 'Ask another') ctx.addBot('Sure — type your query below ↓');
				else if (a.includes('Book')) ctx.switchMode('scheduler');
				else ctx.switchMode('qualifier');
			});
		}, 400);
	} catch (e) {
		ctx.addBot('⚠️ Network hiccup.');
	}
}

function renderResults(ctx) {
	const list = filtered();
	if (!list.length) {
		ctx.addBot("No matches with those filters — try clearing one.");
		return;
	}
	list.forEach(c => ctx.addCard(card(c)));
}

function filtered() {
	return STATE.lastResults.filter(c => {
		if (STATE.activeFacets.industry && c.industry !== STATE.activeFacets.industry) return false;
		if (STATE.activeFacets.region   && c.region   !== STATE.activeFacets.region  ) return false;
		if (STATE.activeFacets.tech) {
			const techs = Array.isArray(c.tech_stack) ? c.tech_stack.map(t => t.toLowerCase()) : [];
			if (!techs.includes(STATE.activeFacets.tech.toLowerCase())) return false;
		}
		return true;
	});
}

function renderFacets(ctx, industries, regions, techs) {
	if (!industries.length && !regions.length && !techs.length) return;

	const wrap = document.createElement('div');
	wrap.className = 'emi-msg bot';
	wrap.style.padding = '8px 12px';
	wrap.innerHTML = '<div style="font-size:11.5px;color:#5B6B7B;margin-bottom:4px;font-weight:600;">Filter by</div>';

	const buildGroup = (label, key, values) => {
		if (!values.length) return '';
		const chips = values.map(v =>
			`<button class="emi-facet-chip" data-key="${key}" data-value="${escapeHtml(v)}">${escapeHtml(v)}</button>`
		).join('');
		return `<div style="margin-bottom:6px"><span style="font-size:11px;color:#5B6B7B">${label}:</span> ${chips}</div>`;
	};

	wrap.innerHTML += buildGroup('Industry', 'industry', industries);
	wrap.innerHTML += buildGroup('Region',   'region',   regions);
	wrap.innerHTML += buildGroup('Tech',     'tech',     techs);

	wrap.querySelectorAll('.emi-facet-chip').forEach(btn => {
		btn.style.cssText = 'background:#fff;border:1px solid #0FA3A3;color:#0FA3A3;padding:3px 9px;border-radius:99px;font-size:11.5px;cursor:pointer;margin:2px 3px 2px 0;font-weight:600;font-family:inherit;';
		btn.addEventListener('click', () => {
			const key = btn.dataset.key;
			const val = btn.dataset.value;
			STATE.activeFacets[key] = STATE.activeFacets[key] === val ? '' : val;
			ctx.clearBody();
			ctx.addBot('Filtered:');
			renderResults(ctx);
			renderFacets(ctx,
				unique(STATE.lastResults.map(c => c.industry).filter(Boolean)),
				unique(STATE.lastResults.map(c => c.region).filter(Boolean)),
				unique(STATE.lastResults.flatMap(c => Array.isArray(c.tech_stack) ? c.tech_stack : []).filter(Boolean)),
			);
		});
		if (STATE.activeFacets[btn.dataset.key] === btn.dataset.value) {
			btn.style.background = '#0FA3A3';
			btn.style.color      = '#fff';
		}
	});

	ctx.panel.querySelector('.emi-body').appendChild(wrap);
}

function card(c) {
	const metrics = (c.metrics || []).map(m => {
		if (typeof m === 'string') return `<span class="emi-metric">${escapeHtml(m)}</span>`;
		return `<span class="emi-metric">${escapeHtml(m.name || '')}${m.value ? ': ' + escapeHtml(m.value) : ''}</span>`;
	}).join('');
	const link = c.url ? `<a href="${escapeHtml(c.url)}" target="_blank">${escapeHtml(c.title)} →</a>` : escapeHtml(c.title);
	const meta = [c.industry, c.region].filter(Boolean).join(' · ');
	return `<div class="emi-case-card">
		<h4>${link}</h4>
		${meta ? `<div class="meta" style="font-size:11.5px;color:#5B6B7B">${escapeHtml(meta)}</div>` : ''}
		<div class="emi-case-summary">${escapeHtml(c.summary || '')}</div>
		<div class="emi-case-metrics">${metrics}</div>
	</div>`;
}

function unique(arr) { return Array.from(new Set(arr.filter(x => x != null && x !== ''))); }
function escapeHtml(s) { return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]); }
