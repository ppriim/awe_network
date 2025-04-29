# ใช้ PHP official image
FROM php:8.2-cli

# ติดตั้ง system dependencies และ PHP extensions ที่ Laravel ต้องใช้
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

# คัดลอกไฟล์โปรเจกต์เข้า container
COPY . .

# ติดตั้ง dependency ของ Laravel
RUN composer install --no-dev --optimize-autoloader

# ตั้ง permission storage และ bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# เปิด Port 8080 สำหรับ Railway
EXPOSE 8080

# Build frontend assets
COPY --from=node /var/www/node_modules ./node_modules
COPY --from=node /var/www/public ./public
COPY --from=node /var/www/resources ./resources
COPY --from=node /var/www/package.json ./package.json
COPY --from=node /var/www/vite.config.js ./vite.config.js

RUN npm install && npm run build

RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

# 🛠 แก้ตรงนี้เพื่อ serve public/
CMD php -S 0.0.0.0:${PORT:-8080} -t public
