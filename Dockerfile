FROM php:8.2-cli

WORKDIR /var/www

COPY public /var/www/public

EXPOSE 8080

CMD php -S 0.0.0.0:8080 -t public
