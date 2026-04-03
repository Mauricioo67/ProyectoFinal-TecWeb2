# Dockerfile para CakePHP 5
FROM php:8.2-apache

# Instalación de dependencias y extensiones necesarias
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    libpq-dev \
    zip \
    unzip \
    && docker-php-ext-install intl mbstring pdo_mysql pdo_pgsql zip \
    && a2enmod rewrite

# 🔥 IMPORTANTE: hacer que Apache apunte a webroot (CakePHP)
RUN sed -i 's#/var/www/html#/var/www/html/webroot#g' /etc/apache2/sites-available/000-default.conf

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www/html

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer puerto
EXPOSE 80