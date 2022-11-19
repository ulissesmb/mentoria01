FROM php:7.2-apache
LABEL Name=www Version=0.0.1
RUN apt-get -y update && \
apt-get install -y fortunes && \
RUN \
    docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-install pdo_mysql \
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
apt-get clean

