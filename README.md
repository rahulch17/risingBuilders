# Rising Builders — Laravel MVC Website

A professional construction company website built with Laravel 12, featuring a full MVC architecture, Blade templating, service-layer data flow, and a polished dark-navy UI.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 12 (PHP 8.2+) |
| Templating | Blade |
| Styling | Custom CSS (no Tailwind) |
| Asset Pipeline | Vite |
| Database | MYSQL (contact form inquiries) |
| Fonts | Google Fonts — Barlow, Barlow Condensed, Playfair Display, Bebas Neue, Baskervville |

---

## Project Structure

```
rising-builders/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── AboutController.php
│   │   │   ├── ServiceController.php
│   │   │   ├── PortfolioController.php
│   │   │   └── ContactController.php
│   │   └── Requests/
│   │       └── ContactRequest.php
│   ├── Models/
│   │   └── Inquiry.php
│   └── Services/
│       ├── CompanyService.php
│       ├── ServiceService.php
│       ├── ProjectService.php
│       └── ContactService.php
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── partials/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── careers.blade.php
│           ├── services/
│           │   ├── index.blade.php
│           │   └── show.blade.php
│           ├── portfolio/
│           │   ├── index.blade.php
│           │   └── show.blade.php
│           └── contact/
│               └── index.blade.php
├── public/
│   ├── css/app.css
│   ├── js/app.js
│   └── images/
│       ├── logo.jpeg
│       ├── hero-skyscraper.png
│       ├── about-hero.png
│       ├── services-hero.png
│       ├── portfolio-hero.png
│       ├── contact-hero.png
│       ├── architectural-model.png
│       ├── team/
│       ├── portfolio/
│       └── services/
├── routes/
│   └── web.php
└── database/
    └── migrations/
```

---

## Pages

| Page | Route | Description |
|---|---|---|
| Home | `/` | Hero, about snippet, services preview, portfolio grid, awards, CTA |
| About | `/about` | Company story, mission, stats, team, awards, CTA |
| Services | `/services` | All services grid, process steps |
| Service Detail | `/services/{slug}` | Individual service with related projects |
| Portfolio | `/portfolio` | Filterable projects grid with pagination |
| Portfolio Detail | `/portfolio/{slug}` | Individual project detail |
| Contact | `/contact` | Contact form with map embed |
| Careers | `/careers` | Placeholder page |

---

## Getting Started

### Requirements

- PHP 8.2+
- Composer
- Node.js 18+
- npm

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/your-username/rising-builders.git
cd rising-builders

# 2. Install PHP dependencies
composer install

# 3. Copy environment file and generate key
cp .env.example .env
php artisan key:generate

# 4. Set up the database
touch database/database.sqlite
php artisan migrate

# 5. Install JS dependencies and build assets
npm install
npm run build
```

### Running Locally

```bash
# Run everything at once (server + queue + logs + vite)
composer dev

# Or run just the PHP server
php artisan serve
```

Visit `http://localhost:8000`

---

## Data Flow

All site content (company info, services, projects, team, awards) is served through **service classes** — no database queries for static content.

```
Controller  →  Service Class  →  Blade View
```

For example:
- `HomeController` calls `CompanyService`, `ServiceService`, `ProjectService`
- `ServiceController` calls `ServiceService`
- `ContactController` calls `ContactService` → saves to `inquiries` table

---

## Contact Form

Submitted inquiries are validated via `ContactRequest` and stored in the `inquiries` database table using the `Inquiry` model. Fields: `name`, `email`, `phone`, `service`, `other_service`, `message`.

---

## CSS Architecture

All styles live in `resources/css/app.css` and are compiled to `public/css/app.css`.

Key design tokens defined in `:root`:

```css
--navy:       #0a1628   /* Primary dark background */
--navy-mid:   #0d1f3c   /* Cards, sections */
--navy-light: #12294f   /* Hover states */
--gold:       #75a2e6   /* Accent color — links, highlights */
--off-white:  #f5f3ef   /* Light section background */
```

---

## Images

Place team member photos in `public/images/team/` and update the filenames in `app/Services/CompanyService.php` under the `team` array to match exactly.

---

## Deployment

```bash
composer install --optimize-autoloader --no-dev
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Make sure `public/` is set as the web root on your server.

---

## Developer

Built by **Rahul** — 
Project: Rising Builders & Engineers Pvt. Ltd., Kathmandu, Nepal
