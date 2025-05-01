# Stage 1: Build assets with Node
FROM node:20 as node
WORKDIR /var/www
COPY . .
RUN npm install && npm run build

# Stage 2: PHP Laravel
FROM php:8.2-cli

# ติดตั้ง PHP extensions ที่ Laravel ใช้
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl git \
    libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# ✅ ติดตั้ง Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# ดึงไฟล์ที่ถูก build จาก stage node
COPY --from=node /var/www/resources ./resources
COPY --from=node /var/www/node_modules ./node_modules
COPY --from=node /var/www/package.json ./package.json
COPY --from=node /var/www/vite.config.js ./vite.config.js

# คัดลอก public จาก Node stage → เอาเฉพาะที่ต้อง build เช่น assets
COPY --from=node /var/www/public/build ./public/build

# คัดลอก public จากโปรเจกต์จริง (รวม images/home, videos ฯลฯ)
COPY public ./public

# Laravel cleanup & permissions
RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear \
 && chmod -R 775 storage bootstrap/cache

EXPOSE 8080
CMD php -S 0.0.0.0:8080 -t public