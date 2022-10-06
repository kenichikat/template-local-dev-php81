FROM php:8.1-apache-bullseye

RUN apt-get update \
 && apt install -y git vim unzip \
 && docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
