/**
 * Chat panel — mounts the conversational UI inside Shadow DOM. Owns mode
 * switching, message rendering, and input handling. Delegates each mode's
 * step logic to assets/js/modes/<mode>.js.
 */

import { runQualifier } from './modes/qualifier.js';
import { runRecommender } from './modes/recommender.js';
import { runEstimator } from './modes/estimator.js';
import { runCases } from './modes/cases.js';
import { runScheduler } from './modes/scheduler.js';

const MODE_HANDLERS = {
	qualifier:   runQualifier,
	recommender: runRecommender,
	estimator:   runEstimator,
	cases:       runCases,
	scheduler:   runScheduler,
};

export function mountChatPanel(shadow, { i18n, ga4, visitorId, cfg, mode }) {
	const panel = document.createElement('div');
	panel.className = 'emi-panel';
	panel.innerHTML = `
		<div class="emi-header">
			<div class="emi-avatar">${escapeHtml((cfg.agent?.name || 'Emi').slice(0,1))}</div>
			<div class="emi-title">
				<b>${escapeHtml(cfg.agent?.name || 'Emi')}</b>
				<small><span class="emi-dot"></span>${escapeHtml(i18n.t('online','Online'))}</small>
			</div>
			<select class="emi-lang" aria-label="${escapeHtml(i18n.t('language','Language'))}">
				${(cfg.languages?.enabled || ['en']).map(l => `<option value="${l}" ${l === i18n.current() ? 'selected' : ''}>${l.toUpperCase()}</option>`).join('')}
			</select>
			<button class="emi-close" aria-label="${escapeHtml(i18n.t('close','Close'))}">×</button>
		</div>
		<div class="emi-tabs"></div>
		<div class="emi-body" role="log" aria-live="polite"></div>
		<form class="emi-input">
			<input type="text" placeholder="${escapeHtml(i18n.t('type_placeholder','Type your message…'))}" autocomplete="off" />
			<button type="submit" aria-label="${escapeHtml(i18n.t('send_aria','Send'))}">➤</button>
		</form>
	`;
	shadow.appendChild(panel);

	const body  = panel.querySelector('.emi-body');
	const tabs  = panel.querySelector('.emi-tabs');
	const input = panel.querySelector('.emi-input input');
	const form  = panel.querySelector('.emi-input');

	let openedAt = 0;
	let msgCount = 0;
	let currentMode = mode || 'qualifier';
	const ctx = { i18n, ga4, visitorId, cfg, addBot, addUser, addChips, addCard, clearBody, switchMode, panel };

	['qualifier','recommender','estimator','cases','scheduler'].forEach(m => {
		const t = document.createElement('button');
		t.className = 'emi-tab' + (m === currentMode ? ' active' : '');
		t.dataset.mode = m;
		t.textContent = i18n.t('tab_' + m.replace('qualifier','qualify').replace('recommender','recommend').replace('estimator','estimate').replace('scheduler','schedule'), m);
		t.addEventListener('click', () => switchMode(m));
		tabs.appendChild(t);
	});

	function switchMode(m) {
		if (!MODE_HANDLERS[m]) return;
		currentMode = m;
		tabs.querySelectorAll('.emi-tab').forEach(b => b.classList.toggle('active', b.dataset.mode === m));
		clearBody();
		MODE_HANDLERS[m](ctx);
		ga4.fire('mode_switched', { mode: m });
	}

	function addBot(html) {
		const d = document.createElement('div');
		d.className = 'emi-msg bot';
		d.innerHTML = html;
		body.appendChild(d);
		body.scrollTop = body.scrollHeight;
		msgCount++;
	}
	function addUser(text) {
		const d = document.createElement('div');
		d.className = 'emi-msg user';
		d.textContent = text;
		body.appendChild(d);
		body.scrollTop = body.scrollHeight;
		msgCount++;
	}
	function addChips(options, onPick) {
		const wrap = document.createElement('div');
		wrap.className = 'emi-chips';
		options.forEach(opt => {
			const b = document.createElement('button');
			b.className = 'emi-chip';
			b.textContent = opt;
			b.addEventListener('click', () => {
				wrap.remove();
				addUser(opt);
				ga4.fire('chip_clicked', { option: opt, mode: currentMode });
				onPick(opt);
			});
			wrap.appendChild(b);
		});
		body.appendChild(wrap);
		body.scrollTop = body.scrollHeight;
		ga4.fire('chips_shown', { options: options.join('|') });
	}
	function addCard(html) {
		const d = document.createElement('div');
		d.className = 'emi-msg bot';
		d.innerHTML = html;
		body.appendChild(d);
		body.scrollTop = body.scrollHeight;
	}
	function clearBody() { body.innerHTML = ''; }

	form.addEventListener('submit', (e) => {
		e.preventDefault();
		const t = input.value.trim();
		if (!t) return;
		input.value = '';
		addUser(t);
		const handler = MODE_HANDLERS[currentMode];
		if (handler?.handleInput) handler.handleInput(t, ctx);
	});

	panel.querySelector('.emi-close').addEventListener('click', () => api.close());
	panel.querySelector('.emi-lang').addEventListener('change', (e) => {
		i18n.setLanguage(e.target.value).then(() => api.rerender());
	});

	const api = {
		open(m) {
			panel.classList.add('open');
			openedAt = Date.now();
			if (m && m !== currentMode) switchMode(m);
			else if (!body.hasChildNodes()) switchMode(currentMode);
		},
		close() {
			panel.classList.remove('open');
		},
		rerender() {
			switchMode(currentMode);
		},
		durationSec() { return openedAt ? Math.round((Date.now() - openedAt) / 1000) : 0; },
		msgCount: () => msgCount,
	};
	return api;
}

function escapeHtml(s) {
	return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]);
}
