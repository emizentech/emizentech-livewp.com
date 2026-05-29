/**
 * Timezone-aware Meeting Scheduler — city or browser TZ → server slots → book.
 */

const STATE = { step: 'city', data: {} };

export function runScheduler(ctx) {
	STATE.step = 'city'; STATE.data = {};
	const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;
	ctx.addBot(ctx.i18n.t('welcome_scheduler', "Let's book a free 20-min consultation. <b>What city are you in?</b>"));
	ctx.addChips(['Dubai', 'London', 'New York', 'Singapore', 'Mumbai'], (c) => pickCity(c, ctx, tz));
}

runScheduler.handleInput = function (text, ctx) {
	const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;
	pickCity(text, ctx, tz);
};

async function pickCity(city, ctx, tz) {
	STATE.data.city     = city;
	STATE.data.timezone = tz;
	try {
		const r = await fetch(window.EmiAIConfig.restUrl + '/schedule/slots', {
			method:  'POST',
			headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': window.EmiAIConfig.nonce },
			body:    JSON.stringify({ city, timezone: tz }),
		});
		const d = await r.json();
		ctx.addBot(`Detected: <b>${escape(city)} · ${escape(d.timezone)}</b>. Pick a slot:`);
		const grid = document.createElement('div');
		grid.className = 'emi-slot-grid';
		(d.slots || []).forEach(s => {
			const b = document.createElement('button');
			b.className = 'emi-slot';
			b.innerHTML = `${escape(s.label_day)}<small>${escape(s.label_time)}</small>`;
			b.addEventListener('click', () => pickSlot(s, ctx));
			grid.appendChild(b);
		});
		const wrap = document.createElement('div');
		wrap.className = 'emi-msg bot';
		wrap.appendChild(grid);
		ctx.panel.querySelector('.emi-body').appendChild(wrap);
	} catch (e) {
		ctx.addBot('⚠️ Could not fetch slots. Please try again.');
	}
}

function pickSlot(slot, ctx) {
	STATE.data.slot = slot;
	STATE.step = 'email';
	ctx.addBot("Booked! ✅ A calendar invite is on its way. What's the <b>best email</b> for the invite?");
}

runScheduler.handleInput = async function (text, ctx) {
	if (STATE.step === 'email') {
		if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(text)) {
			ctx.addBot('That email doesn\'t look right.');
			return;
		}
		try {
			const r = await fetch(window.EmiAIConfig.restUrl + '/schedule/book', {
				method:  'POST',
				headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': window.EmiAIConfig.nonce },
				body:    JSON.stringify({ email: text, slot_iso: STATE.data.slot.iso, topic: 'AI consultation' }),
			});
			const d = await r.json();
			if (d.ok) {
				ctx.addBot(`📧 Invite sent to <b>${escape(text)}</b>. See you ${escape(STATE.data.slot.label_day)} at ${escape(STATE.data.slot.label_time)}!`);
				ctx.ga4.fire('meeting_booked', { tz: STATE.data.timezone, slot_iso: STATE.data.slot.iso });
			} else {
				ctx.addBot(`⚠️ ${escape(d.error || 'Booking failed')}`);
			}
		} catch (e) {
			ctx.addBot('⚠️ Network hiccup.');
		}
	}
};

function escape(s) { return String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c]); }
