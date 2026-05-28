/**
 * GA4 + GTM bridge.
 *
 * Logical event → admin-configured GA4 event name. Fires:
 *   1. gtag('event', name, params)  if gtag exists
 *   2. dataLayer.push({event:name, ...params}) for GTM
 *   3. POST /wp-json/emi-ai/v1/event for server-side audit
 */

export class GA4 {
	constructor(mapping, ga4Settings, visitorId) {
		this.mapping   = mapping || {};
		this.settings  = ga4Settings || {};
		this.visitorId = visitorId;
		// Best-effort load of gtag.js if measurement_id is configured but gtag isn't already on the page.
		if (this.settings.measurementId && typeof window.gtag !== 'function') {
			this.injectGtag(this.settings.measurementId);
		}
	}

	injectGtag(id) {
		const s = document.createElement('script');
		s.async = true;
		s.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(id);
		document.head.appendChild(s);
		window.dataLayer = window.dataLayer || [];
		window.gtag = function () { window.dataLayer.push(arguments); };
		window.gtag('js', new Date());
		window.gtag('config', id);
	}

	fire(logicalEvent, props = {}) {
		const cfg = this.mapping[logicalEvent];
		if (!cfg || !cfg.enabled) return;

		const eventName = cfg.ga4_name || ('emi_' + logicalEvent);
		const fullProps = { ...props, lang: props.lang || document.documentElement.lang || 'en' };

		// 1. gtag.
		if (typeof window.gtag === 'function') {
			window.gtag('event', eventName, fullProps);
		}
		// 2. dataLayer (GTM).
		if (this.settings.gtmEnabled !== false) {
			window.dataLayer = window.dataLayer || [];
			window.dataLayer.push({ event: eventName, ...fullProps });
		}
		// 3. Server-side mirror (for audit + retention).
		if (window.EmiAIConfig?.restUrl) {
			fetch(window.EmiAIConfig.restUrl + '/event', {
				method:  'POST',
				headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': window.EmiAIConfig.nonce || '' },
				body:    JSON.stringify({ event: logicalEvent, props: fullProps, visitor_id: this.visitorId }),
				keepalive: true,
			}).catch(() => {});
		}
	}
}
