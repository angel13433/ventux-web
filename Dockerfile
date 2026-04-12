FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# Configuraciones de Laravel
RUN composer install --no-dev
RUN php artisan config:cache
RUN php artisan route:cache

ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
RUN chmod -R 775 storage bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache
EXPOSE 80