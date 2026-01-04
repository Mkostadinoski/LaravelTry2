FROM php:8.4-cli

# Инсталирај потребни пакети и екстензии за Postgres
RUN apt-get update && apt-get install -y \
    unzip git libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Додај Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Инсталирај зависности
RUN composer install --optimize-autoloader --no-dev

# Исчисти кеш и пушти миграции
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan migrate --force

EXPOSE 8080

CMD php artisan serve --host 0.0.0.0 --port 8080