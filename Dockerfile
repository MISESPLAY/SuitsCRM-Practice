FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libzip-dev unzip curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install mysqli zip gd opcache

RUN a2enmod rewrite

WORKDIR /var/www/html

# Descargar SuiteCRM 7.13.4
RUN curl -L https://github.com/salesagility/SuiteCRM/archive/refs/tags/v7.13.4.zip -o suitecrm.zip \
    && unzip suitecrm.zip \
    && mv SuiteCRM-7.13.4/* . \
    && rm -rf SuiteCRM-7.13.4 suitecrm.zip

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
