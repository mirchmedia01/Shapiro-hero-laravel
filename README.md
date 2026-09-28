
# Shapiro The Hero - Official Laravel Application

Full-stack, modular, production-grade Laravel conversion of the **Adam L. Shapiro & Associates, P.C. (Shapiro The Hero)** website.

---

## Key Features & Architecture

### 1. 100% Asset & Media Preservation
- **5 Hosted MP4 Videos** preserved and working in `public/assets/uploads/2026/07/`.
- **286+ Images, Icons & Media Assets** preserved in `public/assets/uploads/`.
- **Zero WordPress Footprint**: All static assets migrated into clean `public/assets/` structure; no `wp-content/` or `wp-includes/` folders or dependencies.

### 2. Dynamic Database-Backed Blog (No Static HTML)
- **Database Schema**:
  - `posts`: Full rich HTML content, title, slug, excerpt, author, featured image, SEO metadata, reading time, view counts, and publishing timestamps.
  - `categories` & `tags`: Full taxonomy with many-to-many pivot tables (`post_category`, `post_tag`).
- **Seeder**: Clean `PostSeeder` seeds all 29 original posts and 84 tags from version-controlled JSON data in `database/data/`.
- **Dynamic Views**:
  - `/blog`: Dynamic search, tag filtering, pagination, and reusable `<x-blog-card :post="$post" />`.
  - `/blog/{slug}`: Dynamic single post template with related articles and recent posts sidebar.
  - `/blog/tag/{slug}`: Tag archives.

### 3. Advanced SEO Standards
- **Dynamic Meta Tags**: Title, description, canonical link, and robots tags.
- **OpenGraph & Twitter Cards**: Dynamic social sharing cards and featured image previews.
- **Schema.org JSON-LD Structured Data**:
  - `LegalService` & `Attorney` schema on homepage & about page.
  - `Article` & `BreadcrumbList` schema on all blog posts.
- **Dynamic XML Sitemap**: Generated on the fly at `/sitemap.xml` with priority and frequency tags for all static and dynamic pages.

### 4. Working Contact Form
- **Form Component**: `<x-contact-form />` with CSRF protection, old input preservation, and validation errors.
- **Security & Anti-Spam**: Invisible honeypot field (`website_hp`) rejecting bot spam.
- **Data Persistence**: Submissions stored in `contact_submissions` table via `ContactService`.
- **Notification**: Mailable `ContactSubmittedMail` queued/sent upon receipt.

### 5. SOLID & DRY Principles
- **Single Responsibility Principle (SRP)**:
  - Controllers only orchestrate HTTP requests/responses (`HomeController`, `PageController`, `BlogController`, `ContactController`, `SitemapController`).
  - Services handle domain logic (`BlogService`, `ContactService`, `SeoService`).
  - Form Requests handle validation (`ContactRequest`).
- **Dependency Inversion (DIP)**:
  - `PostRepositoryInterface` defines the data contract, implemented by `EloquentPostRepository`.
- **DRY (Don't Repeat Yourself)**:
  - Master layout in `resources/views/layouts/app.blade.php`.
  - Reusable partials: `header.blade.php`, `footer.blade.php`, `seo.blade.php`, `flash-messages.blade.php`.
  - Blade components: `<x-blog-card>`, `<x-contact-form>`.

---

## Quick Start (Local Development)

### Prerequisites
- PHP 8.4+ (or 8.2+) with `pdo_sqlite` / `pdo_mysql`, `mbstring`, `gd`, `zip`
- Composer 2.x

### Steps
1. Clone / navigate to the project directory:
   ```bash
   cd "shapirothehero.com"
   ```
2. Copy environment file (if not present):
   ```bash
   copy .env.example .env
   php artisan key:generate
   ```
3. Run database migrations and seed all 29 dynamic blog posts:
   ```bash
   php artisan migrate:fresh --seed
   ```
4. Start local development server:
   ```bash
   php artisan serve
   ```
   Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

5. Run test suite:
   ```bash
   php artisan test
   ```

---

## Docker Deployment

The application includes a complete containerized environment with PHP 8.4-FPM, Nginx, and MySQL 8.0.

### Starting Docker Containers
```bash
docker compose up -d --build
```

### Running Migrations Inside Docker
```bash
docker compose exec app php artisan migrate:fresh --seed
```

### Accessing the Application
- Web Application: [http://localhost](http://localhost)
- Dynamic Sitemap: [http://localhost/sitemap.xml](http://localhost/sitemap.xml)
- Blog: [http://localhost/blog](http://localhost/blog)
- Contact: [http://localhost/contact-us](http://localhost/contact-us)

---

## Route Catalog

| Method | URI | Name | Description |
|---|---|---|---|
| `GET` | `/` | `home` | Homepage with video showcase & dynamic posts |
| `GET` | `/about-us` | `about` | About the firm with video story |
| `GET` | `/services` | `services` | Practice areas overview |
| `GET` | `/personal-injury-lawyer-new-york` | `practice.personal-injury` | Personal Injury practice area |
| `GET` | `/any-motor-vehicle` | `practice.motor-vehicle` | Car, motorcycle, and truck accidents |
| `GET` | `/slip-trip-fall` | `practice.slip-trip-fall` | Slip, trip, and fall injuries |
| `GET` | `/workers-compensation` | `practice.workers-compensation` | Workplace injuries & benefits |
| `GET` | `/medical-malpractice` | `practice.medical-malpractice` | Hospital & doctor negligence |
| `GET` | `/wrongful-death` | `practice.wrongful-death` | Fatal injury claims |
| `GET` | `/construction-accident` | `practice.construction-accident` | Scaffold and site accidents |
| `GET` | `/electrical-bicycle-scooter` | `practice.ebike-scooter` | E-bike & scooter accidents |
| `GET` | `/high-profiles-cases` | `high-profiles-cases` | Notable trials & media coverage |
| `GET` | `/references-recommendations` | `references` | Client reviews & endorsements |
| `GET` | `/career` | `career` | Career openings |
| `GET` | `/contact-us` | `contact` | Contact form & map |
| `POST` | `/contact-us` | `contact.submit` | Form submission handler |
| `GET` | `/blog` | `blog.index` | Dynamic blog listing with search & tags |
| `GET` | `/blog/{slug}` | `blog.show` | Dynamic single blog article |
| `GET` | `/blog/tag/{slug}` | `blog.tag` | Tag archive |
| `GET` | `/sitemap.xml` | `sitemap` | Dynamic XML sitemap |
