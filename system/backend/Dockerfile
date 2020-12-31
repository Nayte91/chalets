FROM php:7.1-fpm-alpine

RUN apk add --no-cache --update --virtual buildDeps build-base autoconf \
     && docker-php-ext-install mysqli pdo pdo_mysql \
     && apk del buildDeps build-base autoconf

WORKDIR /app