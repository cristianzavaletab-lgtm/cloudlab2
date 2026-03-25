# usamos una imagen de PHP base
FROM php:8.1-apache

# instalar dependencias para PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# copiar todos los archivos del proyecto
COPY . /var/www/html/

# exponer el puerto 80
EXPOSE 80