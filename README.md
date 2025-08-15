# Coffee Shop Cashiering System

A PHP-based point-of-sale (POS) and management system for coffee shops. Includes cashiering, order tracking, menu management, and reporting.

## Features
- User-friendly cashier interface
- Menu management (add/update/delete items)
- Order tracking and history
- Daily / weekly / monthly sales reports
- Admin panel for settings and user accounts

## Quick Start

Clone the repository:
    git clone https://github.com/moulyamc/CoffeeShopCashieringSystem.git
    cd CoffeeShopCashieringSystem

Prepare environment:
- Copy .env.example to .env and update database credentials and site URL.
- If your app uses config.php, copy config.example.php to config.php and update values.

Database:
- Import the provided SQL dump (if available) into your MySQL server.
- Update database connection settings in .env or config.php.

Local dev server (PHP built-in):
    php -S localhost:8000
or if the app expects a "public" webroot:
    php -S localhost:8000 -t public

Requirements:
- PHP 7.4+
- MySQL 5.7+
- Apache or Nginx (or use built-in PHP server for dev)
- Composer (optional, if composer.json is used)
- Node/npm (optional, if package.json is used)

Contributing:
1. Fork the repo
2. Create a feature branch: git checkout -b feature/your-feature
3. Commit changes: git commit -m "Add feature"
4. Push: git push origin feature/your-feature
5. Create a Pull Request

License:
This project is licensed under the MIT License — see LICENSE for details.
