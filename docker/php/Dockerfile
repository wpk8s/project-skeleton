FROM php:7.4.28-fpm-alpine3.15

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    apk add --no-cache ghostscript && \
    install-php-extensions exif imagick mysqli zip && \
    install-php-extensions bcmath gd intl mcrypt opcache

COPY wp /wp

RUN mkdir /wp/wp-content/uploads && \
    chown www-data:www-data /wp/wp-content/uploads
