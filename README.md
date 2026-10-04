# VidiForm Content Studio

A Persian, RTL WordPress plugin for keyword discovery, AI-assisted editorial planning, and controlled draft publishing.

## Install in WordPress

1. Download this repository as a ZIP from GitHub, or copy the `vidiform-content-studio` folder into `wp-content/plugins/`.
2. Ensure the plugin file is at `wp-content/plugins/vidiform-content-studio/vidiform-content-studio.php`.
3. Activate **VidiForm Content Studio** in WordPress → Plugins.
4. Open **استودیو محتوا و سئو** under the existing VidiForm Blog menu. If the menu slug `vf-blog` is not present, the plugin adds a separate **استودیو محتوا** menu.
5. Configure Tavily Search and an OpenAI Chat Completions compatible API under **اتصال API**.

WordPress 6.0+ and PHP 7.4+ are required.

## Plugin features

- Web search for a keyword through Tavily Search API
- Persian AI analysis of likely intent, common result patterns, content opportunities, and suggested article angle, with source URLs
- Manual keyword entry with intent, business priority, and optional estimated volume
- Persistent keyword research, analysis, source, target date, and WordPress post relationship in a plugin database table
- AI-generated Persian draft saved as a real WordPress post with draft status
- Editorial calendar view showing linked drafts and published posts, plus recent WordPress posts
- Manual publish action; generated content is never published automatically
- Compatible submenu under a WordPress admin menu registered with slug `vf-blog`; standalone menu fallback otherwise

## API configuration

The first implementation supports Tavily for web search and APIs compatible with OpenAI Chat Completions for analysis and drafting. Enter HTTPS endpoint, model name, and keys in the plugin settings. Credentials are stored in WordPress options and are only used server-side. Limit admin access and protect database backups. For stricter secret management, use server-side secret storage or constants in `wp-config.php`.

Search volume is not provided by Tavily and must be entered from a separate keyword research source if needed. Google Search Console and Analytics integrations are intentionally not included in this first WordPress implementation.

## Standalone UI prototype

The repository's `index.html` is a visual prototype with demo data. It is not the WordPress plugin interface and does not connect to external services.

## Security and editorial notes

AI output is saved as a draft for human review. Do not provide private customer data as model input. Verify product claims and sources before publishing. The plugin requires users with the WordPress `edit_posts` capability; publishing also checks the current user's `publish_post` capability for that post.


## WordPress ZIP installation

The repository includes a root plugin entry point so the GitHub repository ZIP can be uploaded from WordPress → Plugins → Add New → Upload Plugin. After activation, open **استودیو محتوا و سئو** under the existing VidiForm Blog menu (menu slug `vf-blog`); if it is absent, the plugin adds its own menu. Configure Tavily and the AI endpoint under **اتصال API**.

For manual installation, keep the root `vidiform-content-studio.php` file and the `vidiform-content-studio/` implementation folder together in the same plugin directory under `wp-content/plugins/`.
