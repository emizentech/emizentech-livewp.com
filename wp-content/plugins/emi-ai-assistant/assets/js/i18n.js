/**
 * Translator. Pulls strings from /wp-json/emi-ai/v1/i18n/<lang>.
 */

export class I18n {
	constructor(langsCfg, restUrl) {
		this.cfg     = langsCfg || { enabled: ['en'], default: 'en', autoDetect: true };
		this.restUrl = restUrl;
		this.strings = {};
		this.lang    = this.resolveInitialLang();
		this.load(this.lang);
	}

	resolveInitialLang() {
		if (this.cfg.autoDetect) {
			const browserLang = (navigator.language || 'en').slice(0, 2).toLowerCase();
			if (this.cfg.enabled.includes(browserLang)) return browserLang;
		}
		return this.cfg.default || 'en';
	}

	current() { return this.lang; }

	async load(lang) {
		try {
			const r = await fetch(this.restUrl + '/i18n/' + lang);
			if (r.ok) this.strings = await r.json();
		} catch (_) {}
	}

	t(key, fallback = '') {
		return this.strings[key] ?? fallback ?? key;
	}

	async setLanguage(lang) {
		this.lang = lang;
		await this.load(lang);
	}
}
