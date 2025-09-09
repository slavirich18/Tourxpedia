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
  <a href="...laravel-ci.yml"><img src="...laravel-ci.yml/badge.svg" alt="Laravel CI"></a>
  <a href="...lint.yml"><img src="...lint.yml/badge.svg" alt="Lint & Static Analysis"></a>
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

---

## 🔐 Променливи на средата

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

---

## 📚 API документация

Документацията на API-то описва всички налични ендпойнти, параметри и примери за използване.  
Тя е полезна както за FE екипа, така и за външни интеграции (партньори, агенции и др.).

### Локална среда
- Swagger UI: [http://localhost:8000/api/docs](http://localhost:8000/api/docs)

### Production (примерен URL – ще се актуализира)
- Swagger UI: [https://api.tourxpedia.com/api/docs](https://api.tourxpedia.com/api/docs)

### Инсталация (ако използваме L5-Swagger за Laravel)
1. Инсталирай пакета:  
   ```bash
   composer require "l5-swagger/l5-swagger"

---

## 📂 Архитектура (WIP)

/backend # Laravel API
/database # миграции и сидъри
.github/
workflows/ # CI (laravel-ci.yml, lint.yml)
docs/assets/ # лога/изображения

> ℹ️ Структурата ще се доразширява с нови директории (например `/frontend`, `/ai`), когато проектът напредне.

---

## 🗺️ Пътна карта (Roadmap)

- [ ] Модели/миграции: organizations, organization_members, payout_accounts
- [ ] Каталог: properties/units/availability/prices
- [ ] Bookings + правила за достъп (Policies)
- [ ] AI: event logging, /ai/search с pgvector, препоръки
- [ ] Деплой: FE (Vercel) + BE (Railway/Render)
- [ ] API документация (Swagger/Stoplight)
- [ ] Vision search + Trip builder

---

## 🤝 Принос (Contributing)

Приемаме PR-и и issue-та. Преди да отвориш PR, моля:

1. Увери се, че тестовете минават локално:
   ```bash
   php artisan test

---
