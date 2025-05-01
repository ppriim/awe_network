# Stage 1: Build frontend assets
FROM node:20 as node
WORKDIR /var/www
COPY . .
RUN npm install && npm run build

# Stage 2: Laravel backend + final image
FROM php:8.2-cli

# ติดตั้ง PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# ติดตั้ง Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ตั้ง working directory
WORKDIR /var/www

# คัดลอกไฟล์โปรเจกต์
COPY . .

# ติดตั้ง Laravel dependency
RUN composer install --no-dev --optimize-autoloader

# ดึงไฟล์ที่ถูก build จาก stage node
COPY --from=node /var/www/resources ./resources
COPY --from=node /var/www/node_modules ./node_modules
COPY --from=node /var/www/package.json ./package.json
COPY --from=node /var/www/vite.config.js ./vite.config.js

# คัดลอก public จาก Node stage → เอาเฉพาะที่ต้อง build เช่น assets
COPY --from=node /var/www/public/build ./public/build

COPY .env.example .env

RUN php artisan config:clear \
 && php artisan config:cache \
 && php artisan route:clear \
 && php artisan view:clear \
 && chmod -R 775 storage bootstrap/cache

# เปิด port ให้ Railway
EXPOSE 8080

# Serve ผ่าน PHP Built-in server
CMD php -S 0.0.0.0:${PORT:-8080} -t public
