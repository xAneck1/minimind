# Abi-Website

Moderne, responsive Informations- und Bestellwebsite für einen Abiturjahrgang.

**Stack:** Laravel 13 · PHP ≥ 8.3 (Ziel: 8.5) · Blade · Tailwind CSS 4 · Vite · SQLite

## Status

Umgesetzt: öffentliche Startseite mit Platzhaltern für Abi-Motto, Jahrgangsinformationen, Lehrerzitate, Funfacts und Merchandise.
**Noch nicht** umgesetzt: Authentifizierung, Admin-Freischaltung, Bestellsystem (nur Architektur vorbereitet).

## Voraussetzungen

PHP 8.3+ (mit `sqlite3`, `mbstring`, `xml`), Composer 2, Node.js 22, NPM.

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install
npm run build
```

## Entwicklung

```bash
composer dev        # Server, Queue, Logs und Vite parallel
# oder einzeln:
php artisan serve
npm run dev
```

Tests: `php artisan test` · Produktions-Build: `npm run build`

## Projektstruktur

| Pfad | Zweck |
| --- | --- |
| `config/abi.php` | Platzhalter-Inhalte der Startseite (später DB/Admin) |
| `app/Http/Controllers/HomeController.php` | Startseite |
| `app/Http/Controllers/Admin/` | vorbereitet: Admin-Bereich |
| `app/Enums/UserStatus.php` | `pending` / `approved` / `rejected` |
| `resources/views/components/` | Layout, Header, Footer, Section |
| `resources/views/home/` | Startseiten-View |
| `routes/web.php` | Routen (Hinweise auf geplante `auth.php`, `admin.php`, `orders.php`) |

## Vorbereitung späterer Funktionen

- **Registrierung & Freischaltung:** Die `users`-Tabelle hat `status` (Default `pending`) und `is_admin`; `User::isApproved()` ist vorhanden. Login/Registrierung und Middleware folgen später.
- **Bestellungen:** Eigene Migrationen/Models/Controller kommen in einem späteren Schritt; Merchandise liegt bisher nur in `config/abi.php`.

## Deployment (Hinweise)

Ziel: Nginx + PHP-FPM, Verzeichnis `/var/www/abi-seite`, Document-Root `public/`. Auf dem Server:

```bash
composer install --no-dev --optimize-autoloader
npm ci && npm run build
php artisan migrate --force
php artisan config:cache route:cache view:cache
```

`.env` mit `APP_ENV=production`, `APP_DEBUG=false` und eigenem `APP_KEY` anlegen. Die Serverkonfiguration ist nicht Teil dieses Repos.
