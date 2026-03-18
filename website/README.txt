Everace - Core PHP site scaffold

Overview:
This folder (website/) is a lightweight dynamic wrapper that reuses the provided theme assets located in the parent everace/ folder.

Requirements:
- PHP 7.4+ with PDO MySQL
- MySQL server (or change config/db.php for your DB)
- Place the site under the same webroot so assets referenced at /everace/* stay valid.

Quick setup:
1. Import database.sql into your MySQL server:
   mysql -u root -p < database.sql

2. Edit DB credentials in website/config/db.php if needed.

3. Ensure the web server document root allows access to /everace and /everace/website.

4. Open in browser:
   http://localhost/everace/website/index.php

Notes & decisions:
- UI, CSS, JS and images are reused from the original theme in the parent folder; this scaffold references them via base_url = '/everace'.
- Contact form saves submissions to the `contacts` table (see actions/submit_form.php).
- Cart is a simple session-driven cart for demo purposes; extend with orders persistence as needed.

Next steps you may want:
- Harden input validation and production error handling
- Add admin authentication and an orders management area
- Integrate payment gateway in checkout

If you want, I can now:
- Import database.sql automatically
- Run a quick local link-check
- Commit the scaffold to git
