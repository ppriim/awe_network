FROM php:8.2-cli

# ติดตั้ง Laravel dependency
RUN composer install --no-dev --optimize-autoloader

# ดึงไฟล์ที่ถูก build จาก stage node
COPY --from=node /var/www/resources ./resources
COPY --from=node /var/www/node_modules ./node_modules
COPY --from=node /var/www/package.json ./package.json
COPY --from=node /var/www/vite.config.js ./vite.config.js

# คัดลอก public จาก Node stage → เอาเฉพาะที่ต้อง build เช่น assets
COPY --from=node /var/www/public/build ./public/build

# คัดลอก public จากโปรเจกต์จริง (รวม images/home, videos ฯลฯ)
COPY public ./public

# เคลียร์ config / cache
RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

# เปิดสิทธิ์ storage
RUN chmod -R 775 storage bootstrap/cache

# เปิด port ให้ Railway
EXPOSE 8080

CMD php -S 0.0.0.0:8080 -t public
