# Stage 0: Get Composer
FROM composer:latest as composer

# Stage 1: Build frontend assets with Node
FROM node:20 as node
WORKDIR /var/www
COPY package*.json ./
RUN npm install
COPY resources ./resources
COPY vite.config.js ./
RUN npm run build

# Stage 2: PHP + Laravel
FROM php:8.2-cli

# ติดตั้ง PHP extensions ที่ Laravel ใช้
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl git \
    libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# ติดตั้ง Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# ✅ คัดลอกโค้ดทั้งหมด (รวม artisan)
COPY . .

# ✅ ติดตั้ง Laravel dependencies หลังมี artisan
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist --verbose

# ✅ คัดลอก assets ที่ถูก build แล้ว
COPY --from=node /var/www/public/build ./public/build
COPY --from=node /var/www/node_modules ./node_modules
COPY --from=node /var/www/resources ./resources
COPY --from=node /var/www/vite.config.js ./vite.config.js
COPY --from=node /var/www/package.json ./package.json

# ✅ Laravel cleanup + permission
RUN php artisan config:clear || true && \
    php artisan route:clear || true && \
    php artisan view:clear || true && \
    chmod -R 775 storage bootstrap/cache || true && \
    cat storage/logs/laravel.log || true

# ✅ เปิดพอร์ตและรัน Laravel ผ่าน PHP Dev Server
EXPOSE 8080
CMD php -S 0.0.0.0:8080 -t public
