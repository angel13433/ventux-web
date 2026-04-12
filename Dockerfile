FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# 1. Copia tu configuración para que /tienda deje de dar Error 404
COPY nginx.conf /etc/nginx/sites-available/default.conf

# 2. Instalación de dependencias y limpieza de caché
RUN composer install --no-dev
RUN php artisan config:clear && php artisan route:clear

# 3. Permisos de base de datos y carpetas (vital para Laravel)
RUN touch /var/www/html/database/database.sqlite
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# 4. Variables de entorno optimizadas para Render
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV APP_TYPE laravel
ENV PORT 80

# 5. Puerta de enlace y comando de arranque
EXPOSE 80
CMD ["/start.sh"]