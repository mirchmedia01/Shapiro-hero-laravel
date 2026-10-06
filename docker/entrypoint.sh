#!/bin/sh
set -e

# Setup .env if not exists
if [ ! -f /var/www/html/.env ]; then
    if [ -f /var/www/html/.env.example ]; then
        cp /var/www/html/.env.example /var/www/html/.env
    fi
fi

# Ensure SQLite database file exists if sqlite connection.
# DB_DATABASE may point at a Railway volume mount (e.g. /data/database.sqlite)
# so the DB survives redeploys without shadowing database/migrations/.
if [ "$DB_CONNECTION" = "sqlite" ] || grep -q "DB_CONNECTION=sqlite" /var/www/html/.env 2>/dev/null; then
    SQLITE_DB="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
    case "$SQLITE_DB" in
        /*)
            mkdir -p "$(dirname "$SQLITE_DB")"
            touch "$SQLITE_DB"
            chown -R www-data:www-data "$(dirname "$SQLITE_DB")"
            ;;
    esac
fi

# Ensure storage and bootstrap/cache permissions
mkdir -p /var/www/html/storage/framework/cache/data \
         /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/views \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Generate key if APP_KEY is empty
if [ -f /var/www/html/.env ] && ! grep -q "^APP_KEY=base64:" /var/www/html/.env; then
    php artisan key:generate --force --no-interaction 2>/dev/null || true
fi

# Run database migrations
php artisan migrate --force --no-interaction 2>/dev/null || true

# Cache configurations if in production
if [ "$APP_ENV" = "production" ]; then
    php artisan config:cache || true
    php artisan route:cache || true
    php artisan view:cache || true
fi

# Railway assigns a dynamic $PORT — nginx must listen on it, not hardcoded 80.
PORT="${PORT:-80}"
sed -i -e "s/listen 80;/listen ${PORT};/" -e "s/listen \[::\]:80;/listen [::]:${PORT};/" /etc/nginx/http.d/default.conf

exec "$@"
