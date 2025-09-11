#!/usr/bin/env bash
set -euo pipefail

cd backend

# 1) .env
if [ ! -f ".env" ] && [ -f ".env.example" ]; then
  cp -f .env.example .env
fi

# 2) APP_KEY
if ! grep -q '^APP_KEY=' .env || [ -z "$(grep '^APP_KEY=' .env | cut -d= -f2-)" ]; then
  php artisan key:generate --force
fi

# 3) sqlite файл (ако ползваш sqlite)
mkdir -p database
[ -f database/database.sqlite ] || touch database/database.sqlite

# 4) JWT_SECRET (ако липсва – генерираме)
if ! grep -q '^JWT_SECRET=' .env; then
  echo "JWT_SECRET=$(php -r 'echo bin2hex(random_bytes(32));')" >> .env
fi

# 5) optimize + миграции
php artisan optimize:clear
php artisan migrate --force || true

# 6) стартираме сървъра на 0.0.0.0:8000 (в бекграунд)
# ако има стар процес – не пречим
if ! pgrep -f "artisan serve" >/dev/null 2>&1; then
  nohup php artisan serve --host=0.0.0.0 --port=8000 >/tmp/serve.log 2>&1 &
fi
