# Hursit.me - Personal Website & Portfolio

A modern, dynamic personal website built with Laravel 11 and Filament PHP.

## 🚀 Tech Stack

- **Framework:** Laravel 11
- **Admin Panel:** FilamentPHP v3
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** MySQL
- **Localization:** `spatie/laravel-translatable` & `spatie/laravel-translation-loader`

## ✨ Features

- **Multi-language Support:** Fully localized content (English / Turkish).
- **Admin Dashboard:** Manage Projects, Blog Posts, Skills, and Experiences via Filament.
- **Dynamic Content:** All frontend sections (Hero, Portfolio, Blog) are powered by the database.
- **SEO Friendly:** Dynamic meta tags and slugs.
- **Smooth UX:** Lenis smooth scrolling and responsive design.

## 🛠 Installation

1. **Clone the repository**
   ```bash
   git clone git@github.com:hemreduru/hursit-me.git
   cd hursit-me
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Configure Environment**
   ```bash
   cp .env.example .env
   # Update DB credentials in .env
   ```

4. **Generate Key & Migrate**
   ```bash
   php artisan key:generate
   php artisan migrate:fresh --seed
   ```
   *Note: Seeding populates the database with initial CV data.*

5. **Create Admin User**
   ```bash
   php artisan make:filament-user
   ```

## ❓ Troubleshooting

### 1. Production: 405 Method Not Allowed or Missing Assets
If you encounter `405 Method Not Allowed` on Filament login or missing styles in production:

**Cause:** Livewire assets are not accessible or Nginx is not passing HTTPS headers correctly, leading to Mixed Content or blocked POST requests.

**Solution:**
1. **Publish Assets:**
   ```bash
   php artisan filament:assets
   php artisan vendor:publish --tag=livewire:assets
   ```
2. **Nginx Configuration:**
   Ensure your Nginx config passes the HTTPS header:
   ```nginx
   fastcgi_param HTTPS on;
   ```
3. **Trust Proxies:**
   In `bootstrap/app.php`, ensure proxies are trusted:
   ```php
   ->withMiddleware(function (Middleware $middleware): void {
       $middleware->trustProxies(at: '*');
   })
   ```

### 2. Production: 403 Forbidden on Login
**Cause:** Filament restricts production access by default.

**Solution:**
Ensure your `User` model implements `FilamentUser` and returns `true` in `canAccessPanel()`:
```php
class User extends Authenticatable implements FilamentUser
{
    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return true;
    }
}
```

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
