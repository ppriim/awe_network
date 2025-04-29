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

# คำสั่งให้รัน php artisan serve
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}

