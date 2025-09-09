#!/usr/bin/env bash
set -euo pipefail

# Лека системна зависимост за sqlite cli (полезен е)
sudo apt-get update -y && sudo apt-get install -y sqlite3

# Composer/NPM инсталиране вътре в backend/
if [ -d "backend" ]; then
  (cd backend && composer install --no-interaction --prefer-dist)
  # ако имаш фронтенд по-нататък:
  if [ -f "backend/package.json" ]; then
    (cd backend && npm ci || true)
  fi
fi
