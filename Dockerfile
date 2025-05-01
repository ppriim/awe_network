# Stage 0: Get Composer
FROM composer:latest as composer

# Stage 1: Build assets
FROM node:20 as node
WORKDIR /var/www
COPY package*.json ./
RUN npm install
COPY resources ./resources
COPY vite.config.js ./
RUN npm run build

# Stage 2: Laravel PHP
FROM php:8.2-cli

# PHP Extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl git \
    libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Copy Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Set working dir
WORKDIR /var/www

# Copy Laravel app
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist --verbose \
 || (echo "❌ Composer failed" && exit 1)

# Copy built assets
COPY --from=node /var/www/public/build ./public/build
COPY --from=node /var/www/node_modules ./node_modules
COPY --from=node /var/www/resources ./resources
COPY --from=node /var/www/vite.config.js ./vite.config.js
COPY --from=node /var/www/package.json ./package.json

# Laravel setup: DEBUG MODE
RUN echo "🧹 Laravel clearing caches..." && \
    php artisan config:clear || true && \
    php artisan route:clear || true && \
    php artisan view:clear || true && \
    chmod -R 775 storage bootstrap/cache || true && \
    echo "📄 Dumping Laravel log:" && \
    cat storage/logs/laravel.log || echo "No Laravel log yet"

RUN cp public/build/.vite/manifest.json public/build/manifest.json

# Open port 8080 for Railway
EXPOSE 8080

# Start PHP Dev Server
CMD echo "🚀 Starting Laravel Dev Server..." && \
    php -S 0.0.0.0:8080 -t public
