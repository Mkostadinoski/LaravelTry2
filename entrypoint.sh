#!/bin/sh
# Пушти миграции пред старт.
php artisan migrate --force

# Исчисти кеш
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Стартувај Laravel сервер (со exec)
exec php artisan serve --host=0.0.0.0 --port=8080