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

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
