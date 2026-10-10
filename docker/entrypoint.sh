#!/bin/bash
set -e

# Ensure storage and cache directories exist
mkdir -p /var/www/html/storage/framework/{sessions,views,cache}
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/bootstrap/cache

# Ensure environment file exists
if [ ! -f /var/www/html/.env ]; then
    if [ -f /var/www/html/.env.example ]; then
        cp /var/www/html/.env.example /var/www/html/.env
    fi
fi

# Ensure SQLite file exists if using sqlite
if grep -q "DB_CONNECTION=sqlite" /var/www/html/.env 2>/dev/null || [ "${DB_CONNECTION}" = "sqlite" ]; then
    mkdir -p /var/www/html/database
    if [ ! -f /var/www/html/database/database.sqlite ]; then
        touch /var/www/html/database/database.sqlite
    fi
    chown -R www-data:www-data /var/www/html/database
fi

# Generate app key if missing
if grep -q "APP_KEY=$" /var/www/html/.env 2>/dev/null || grep -q 'APP_KEY=""' /var/www/html/.env 2>/dev/null || [ -z "${APP_KEY}" ]; then
    if [ -f /var/www/html/.env ]; then
        php artisan key:generate --force --no-interaction || true
    fi
fi

# Fix ownership and permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Run optimizations if production
if [ "${APP_ENV}" = "production" ]; then
    php artisan config:cache || true
    php artisan route:cache || true
    php artisan view:cache || true
else
    php artisan config:clear || true
    php artisan route:clear || true
    php artisan view:clear || true
fi

# Execute main process (supervisord)
exec "$@"
