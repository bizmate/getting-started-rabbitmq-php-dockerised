#FROM php:5-fpm
FROM php:fpm-alpine
MAINTAINER Diego Gullo <diego_gullo@bizmate.biz>

COPY ./docker/config/php.ini /usr/local/etc/php/php.ini

#RUN apt-get update && apt-get install -y  libcurl \
#	&& docker-php-ext-install curl \
#	&& apt-get clean \
#    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

#RUN apk update && apk add -f libcurl \
#	&& docker-php-ext-install curl bcmath

RUN docker-php-ext-install bcmath

COPY ./src /var/www/html