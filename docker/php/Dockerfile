FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    default-libmysqlclient-dev \
    zip \
    unzip \
    git \
    curl \
 && docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
 && docker-php-ext-install \
    -j$(nproc) \
    pdo_mysql \
    mysqli \
    gd \
    intl \
    zip \
 && apt-get clean \
 && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN groupadd -g 1000 www \
 && useradd -u 1000 -ms /bin/bash -g www www

USER www
