FROM php:8.4-cli

# Инсталирај потребни пакети
RUN apt-get update && apt-get install -y \
    unzip git libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Додај Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --optimize-autoloader --no-dev

EXPOSE 8080

CMD php artisan serve --host 0.0.0.0 --port 8080