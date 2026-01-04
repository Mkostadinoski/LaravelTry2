FROM php:8.4-cli

# Инсталирај пакети и екстензии за Postgres
RUN apt-get update && apt-get install -y \
    unzip git libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Додај Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Инсталирај зависности
RUN composer install --optimize-autoloader --no-dev

# Копирај entrypoint.sh и направи го извршлив
COPY entrypoint.sh /app/entrypoint.sh
RUN chmod +x /app/entrypoint.sh

EXPOSE 8080

CMD ["/app/entrypoint.sh"]