FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libcurl4-openssl-dev \
        libonig-dev \
        libsqlite3-dev \
    && docker-php-ext-install \
        curl \
        mbstring \
        pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY . /var/www/html/

ENV LIKEGIRL_SQLITE_PATH=/var/www/html/data/likegirl.sqlite
ENV LIKEGIRL_SQLITE_SEED=/var/www/html/love20240612.sql

RUN mkdir -p /var/www/html/data \
    && chown -R www-data:www-data /var/www/html/data

VOLUME ["/var/www/html/data"]

EXPOSE 80
