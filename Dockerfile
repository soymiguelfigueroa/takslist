FROM php:7.4.33-apache

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN apt-get update
RUN apt-get install -y \
    libzip-dev \
    zip
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    zip
RUN docker-php-ext-enable mysqli

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
