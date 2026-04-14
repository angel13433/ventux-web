FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# COMENTAMOS O ELIMINAMOS ESTA LÍNEA PORQUE EL ARCHIVO NO EXISTE
# COPY nginx.conf /etc/nginx/sites-available/default.conf

# Instalación de dependencias
RUN composer install --no-dev

# Permisos y Base de Datos
RUN touch /var/www/html/database/database.sqlite
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Limpiamos caché de Laravel
RUN php artisan config:clear && php artisan route:clear

# CONFIGURACIÓN CLAVE PARA RENDER
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV APP_TYPE laravel
ENV PORT 80

# SOLUCIÓN PARA EL ERROR 404 EN RUTAS DE LARAVEL
ENV ERRORS 1
ENV ENABLE_HTACCESS 1

EXPOSE 80

# Usamos el script de arranque por defecto que ya maneja los servicios
CMD ["/start.sh"]