FROM php:7.4-fpm

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
libzip-dev

RUN docker-php-ext-install zip
RUN docker-php-ext-enable apcu

WORKDIR /apps

RUN apt-get update && apt-get install -y gnupg2
RUN rm -f /usr/local/bin/composer
RUN curl -s https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install -y yarn

RUN apt-get install -y \
    librabbitmq-dev \
    libssh-dev \
&& docker-php-ext-install \
    bcmath \
    sockets \
&& pecl install amqp \
&& rm -rf /tmp/pear \
&& docker-php-ext-enable amqp