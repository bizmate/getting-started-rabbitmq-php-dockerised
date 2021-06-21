FROM php:7.1-cli
MAINTAINER Diego Gullo <diego_gullo@bizmate.biz>

RUN apt-get update && apt-get install -y  libcurl4-gnutls-dev \
	&& docker-php-ext-install curl bcmath \
	&& apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
