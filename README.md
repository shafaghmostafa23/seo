# VidiForm Content Studio

A Persian, RTL WordPress plugin for keyword discovery, AI-assisted editorial planning, and controlled draft publishing.

## Install in WordPress

1. Download the repository ZIP and upload it under WordPress → Plugins → Add New → Upload Plugin. The repository has a root plugin entry point for this workflow.
2. Activate **VidiForm Content Studio** in WordPress → Plugins.
3. Open **استودیو محتوا و سئو** under the existing VidiForm Blog menu. The plugin checks for menu slug `vf-blog`; if it is absent, it creates a standalone admin menu.
4. Configure Tavily Search and an OpenAI Chat Completions compatible API under **اتصال API**.

For manual installation, keep the root `vidiform-content-studio.php` file and the `vidiform-content-studio/` implementation folder together in the same plugin directory under `wp-content/plugins/`.

WordPress 6.0+ and PHP 7.4+ are required.

## Plugin features

- Search a keyword on the web through Tavily Search API
- Analyze likely intent, common result patterns, content opportunities, and article angle in Persian, with source URLs
- Track keywords with intent, business priority, optional estimated volume, research notes, source links, calendar date, and linked WordPress post
- Generate a Persian draft saved as a real WordPress post
- See linked drafts, published posts, planned content, and recent blog posts in the editorial calendar
- Publish manually after review; generated content is never published automatically

## API configuration

The first implementation supports Tavily for web search and APIs compatible with OpenAI Chat Completions for analysis and drafting. Enter an HTTPS endpoint, model name, and API keys in plugin settings. Credentials are stored in WordPress options and used server-side. Limit admin access and protect database backups.

Tavily does not provide keyword search volume; enter an estimate from a separate research source if needed. Search Console and Analytics integrations are not included in this first WordPress implementation.

## Notes

AI output is saved as a draft for human review. Do not send private customer data to the model. Verify product claims and sources before publishing. The plugin uses WordPress's `edit_posts` capability and checks `publish_post` before publishing.

The repository's `index.html` is a separate visual prototype with demo data; it is not connected to WordPress.
