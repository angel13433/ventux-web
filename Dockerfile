FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# Copia la configuración personalizada de Nginx para arreglar el Error 404
COPY nginx.conf /etc/nginx/sites-available/default.conf

# Instalación de dependencias
RUN composer install --no-dev

# Comandos de limpieza y preparación
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan view:clear
RUN php artisan route:clear

# Asegurar que la base de datos exista y tenga permisos
RUN touch /var/www/html/database/database.sqlite
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# CONFIGURACIÓN PARA RENDER / LARAVEL
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1

# Esta es la línea clave que le dice a Nginx cómo manejar las rutas de Laravel
ENV APP_TYPE laravel

EXPOSE 80