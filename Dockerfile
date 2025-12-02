FROM php:8.2-apache

# Copiar archivos de la carpeta src al servidor Apache
COPY src/ /var/www/html/

# Dar permisos
RUN chown -R www-data:www-data /var/www/html
