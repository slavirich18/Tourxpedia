# Tourxpedia

<p align="center">
  <a href="https://www.tourxpedia.com" target="_blank" rel="noopener">
    <img src="docs/assets/LOGO600X.png" alt="Tourxpedia Logo" width="200">
  </a>
</p>



<p align="center">
  Маркетплейс и туристическа енциклопедия: хотели/оферти, календар на събития и групови резервации.
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

## Съдържание
- [🌍 Основни цели](#-основни-цели)
- [🚀 Бърз старт](#-бърз-старт-backend)
- [✅ Тестове](#-тестове-локално-и-ci)
- [🛠️ Технологии](#-технологии)
- [📚 API документация](#-api-документация)
- [🔐 Environment variables](#-environment-variables)
- [📂 Архитектура](#-архитектура-wip)
- [🗺️ Пътна карта](#-пътна-карта-roadmap)
- [🤝 Принос](#-принос-contributing)

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

## 🔐 Environment variables

Примерни ключови настройки за `backend/.env`:

```dotenv
# Основни
APP_NAME=Tourxpedia
APP_ENV=local
APP_KEY=   # ще се генерира с: php artisan key:generate
APP_URL=http://localhost:8000
LOG_CHANNEL=stack

# База (PostgreSQL)
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=tourxpedia
DB_USERNAME=postgres
DB_PASSWORD=postgres

# Кеш/сесии/опашки (удобно за локално/CI)
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync

# Имейл (примерна конфигурация)
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your_user
MAIL_PASSWORD=your_pass
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@tourxpedia.com
MAIL_FROM_NAME="${APP_NAME}"

# JWT (ако ползваш tymon/jwt-auth)
JWT_SECRET=   # генерира се: php artisan jwt:secret
JWT_TTL=60

## 📚 API документация

- Swagger (локално): `http://localhost:8000/api/docs`  
- Прод: `https://api.tourxpedia.com/api/docs`  _(примерен URL – замени, когато имаш реален)_

> **Бележка:** Документацията ще бъде публикувана с OpenAPI/Swagger.  
> Ако използваме L5-Swagger за Laravel:  
> 1) `composer require "l5-swagger/l5-swagger"`  
> 2) `php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"`  
> 3) Добавя се рут към `/api/documentation` (по подразбиране).  
> 4) Генерация: `php artisan l5-swagger:generate`
