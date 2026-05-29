# EmizenTech — Local Dev + Plugin Project Notes

Persistent context for Claude Code sessions on this project.

## EmizenTech Local Dev Server

> ⚠️ All `emi-ai-assistant` plugin work targets THIS server. **Production
> (emizentech.com on WordPress.com Atomic) is OFF-LIMITS for the plugin
> rollout.**

| Field | Value |
|---|---|
| Label | EmizenTech Local Dev Server |
| URL | https://multisitelocal.ezxdemo.com |
| Hostname | devovh301 |
| IP | 198.244.167.101 |
| SSH | `ssh -p 2202 root@198.244.167.101` (key-based, uses local `~/.ssh/id_ed25519`) |
| WP root | `/var/www/domains/multisitelocal.ezxdemo.com` |
| wp-content | `/var/www/domains/multisitelocal.ezxdemo.com/wp-content` |
| Plugins dir | `/var/www/domains/multisitelocal.ezxdemo.com/wp-content/plugins` |
| File owner | `htdocs:htdocs` |
| OS | Ubuntu / Linux 5.4 x86_64 |
| PHP | 8.2.27 (CLI; FPM presumed same) |
| Composer | 2.8.9 |
| Node | v20.20.2 |
| WP-CLI | installed; run as root with `--allow-root` |
| WP version | 6.7 |
| Multisite | **Yes** (same topology as production) |
| Active theme | `twentytwentyone-child` (same as production) |
| MySQL FULLTEXT | Permanent InnoDB tables ✓ (temp-table restriction is unrelated) |

### Standard wp-cli invocation on dev

```bash
ssh -p 2202 root@198.244.167.101 \
  'wp --path=/var/www/domains/multisitelocal.ezxdemo.com --allow-root <subcommand>'
```

Note: `sudo -u htdocs` is broken on this server (custom wrapper rejects `-u`).
Use `wp --allow-root` directly. When writing files via rsync, fix ownership
after upload: `chown -R htdocs:htdocs <path>`.

### Production server (DO NOT TOUCH for this plugin work)

| Field | Value |
|---|---|
| URL | https://emizentech.com |
| Hosting | WordPress.com Atomic |
| SSH | `emizentechcom.wordpress.com@ssh.wp.com` |
| Status | Production. Plugin rollout postponed until dev validation complete. |

## GitHub repo

| | |
|---|---|
| URL | git@github.com:emizentech/emizentech-livewp.com.git |
| SSH key that authenticates | `~/.ssh/id_ed25519` (GitHub user `emizentech`) |
| Default branch | `main` |
| Plugin branch (Phase 1) | `feature/emi-ai-plugin-phase1` |

When pushing: prepend `GIT_SSH_COMMAND="ssh -i ~/.ssh/id_ed25519 -o IdentitiesOnly=yes"`
so the correct key is selected over `id_rsa` (which maps to a different GitHub user).

## Local working dir

`/Users/amitsamsukha/Documents/EmizenTech/EmizenTech.com website/`

- This dir IS the git repo root.
- `wp-content/` is a partial snapshot of production (rsynced earlier).
- `wp-content/plugins/emi-ai-assistant/` is the new plugin under active development.
