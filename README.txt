AliRazaSEO333 Website
======================

This is a PHP website with a public article publishing system.

Features:
- Ali Raza profile/branding
- Off-page SEO services
- Kwork service link
- Public "Write an Article" page
- Articles saved in data/articles.json
- Each article gets its own SEO-friendly slug
- Basic HTML sanitization for submitted content
- Responsive/mobile design

LIVE SETUP (cPanel/shared hosting):
1. Upload all files and folders to public_html.
2. Make sure the data/ folder is writable by PHP (usually 755; if required by your host, 775).
3. Open your domain.
4. Test "Write an Article".

IMPORTANT:
- Replace the placeholder phone number/contact area if you want a phone/WhatsApp number displayed.
- For stronger production security, add CAPTCHA, moderation/admin approval and rate limiting before allowing unrestricted public publishing.
- The current version publishes submitted articles immediately, as requested.
