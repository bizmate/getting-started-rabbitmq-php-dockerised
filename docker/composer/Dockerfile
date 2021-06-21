FROM php:7.1-cli
MAINTAINER Diego Gullo <diego_gullo@bizmate.biz>

RUN apt-get update && apt-get install -y  libcurl4-gnutls-dev git zip \
	&& docker-php-ext-install curl bcmath sockets \
	&& apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

#COPY ./docker/php_receiver/bcmath.ini /etc/php/7.1/cli/conf.d/20-bcmath.ini
RUN curl --silent --show-error https://getcomposer.org/installer | php \
	&& mkdir -p /usr/local/bin \
	&& mv composer.phar /usr/local/bin/composer \
	&& chmod +x  /usr/local/bin/composer

RUN mkdir -p /home/composer && chmod 777 /home/composer
