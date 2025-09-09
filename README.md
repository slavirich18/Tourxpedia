# Tourxpedia

[![Laravel CI](https://github.com/slavirich18/Tourxpedia/actions/workflows/laravel-ci.yml/badge.svg)](https://github.com/slavirich18/Tourxpedia/actions/workflows/laravel-ci.yml)

<p align="center">
  <a href="https://www.tourxpedia.com" target="_blank" rel="noopener">
    <img src="docs/assets/LOGO600X.png" alt="Tourxpedia Logo" width="200">
  </a>
</p>

<h1 align="center">Tourxpedia</h1>

<p align="center">
  Маркетплейс и туристическа енциклопедия: имоти/оферти, календар на събития и групови резервации.
  Backend: Laravel + PostgreSQL (JWT). Планиран FE на Vercel, API на Railway/Render.
</p>

<p align="center">
  <a href="https://github.com/slavirich18/Tourxpedia/actions/workflows/laravel-ci.yml">
    <img src="https://github.com/slavirich18/Tourxpedia/actions/workflows/laravel-ci.yml/badge.svg" alt="Laravel CI">
  </a>
  <a href="https://github.com/slavirich18/Tourxpedia/actions/workflows/lint.yml">
    <img src="https://github.com/slavirich18/Tourxpedia/actions/workflows/lint.yml/badge.svg" alt="Lint & Static Analysis">
  </a>
</p>

---

## 🌍 Основни цели
- Роли: `traveler`, `host`, `organization (agency/tour_operator)` + `members`
- Каталог: `properties → units → availability/prices → bookings`
- Плащания и `payout_accounts` за хостове/организации
- Вграден календар на събития и групови оферти/резервации
- AI план: events logging → pgvector/hybrid search → персонализация/препоръки → vision & trip builder

---

## 🚀 Бърз старт (Backend)

```bash
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
