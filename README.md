# VidiForm Content Studio

A Persian, RTL prototype for managing non-technical SEO and editorial work.

## Run

Open `index.html` in a modern browser. No build step or package installation is required.

## Included in this prototype

- Overview dashboard and sample organic performance chart
- Keyword register with intent, business priority, estimated volume, mapped articles, status, clicks, impressions, and CTR
- Keyword filtering, adding records, local persistence, and JSON export
- Article library and status filters
- Editorial calendar
- AI-assisted brief and draft outline generator (template/demo only)
- Performance report explaining target keywords versus actual Search Console queries
- Integration settings for Search Console, GA4, Bing Webmaster Tools, WordPress, and AI providers

## Important

All analytics and article examples are demonstration data. Integrations are UI placeholders and do not connect to external services. Drafts and keyword records are stored in the current browser's local storage. The draft generator is a template and does not call an AI model.

A production implementation needs a secure backend for OAuth/API credentials, real Search Console and analytics data ingestion, WordPress REST API integration, AI provider calls, permissions, persistence, and audit/history. Never expose API keys in browser code. Keep human review before publishing generated content.
