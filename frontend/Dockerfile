FROM yiisoftware/yii2-php:7.4-apache

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/frontend/web|g' /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli   && docker-php-ext-enable mysqli

RUN apt-get update
RUN apt-get install -y \
            curl \
            git \
            libzip-dev \
            libc-client-dev \
            libkrb5-dev \
            libpng-dev \
            libjpeg-dev \
            libwebp-dev \
            libfreetype6-dev \
            libkrb5-dev \
            libicu-dev \
            zlib1g-dev \
            zip \
            ffmpeg \
            libmemcached11 \
            libmemcachedutil2 \
            build-essential \
            libmemcached-dev \
            gnupg2 \
            libpq-dev \
            libpq5 \
            libz-dev \

            ntp \
            cron \
            unzip \
            libfreetype6-dev \
            libicu-dev \
            libjpeg62-turbo-dev \
            libmcrypt-dev \
            #libpng12-dev \
            libxslt1-dev


RUN apt-get update && \
    apt-get install -y -qq git \
        libjpeg62-turbo-dev \
        apt-transport-https \
        libfreetype6-dev \
        libmcrypt-dev \
        libpng-dev \
        libssl-dev \
        zip unzip \
        nodejs \
        npm \
        wget \
        vim


#RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-configure gd \
    --with-webp=/usr/include/ \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/
RUN docker-php-ext-install gd



RUN a2enmod rewrite
RUN service apache2 restart


RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY xdebug.ini  /usr/local/etc/php/conf.d/xdebug.ini