FROM php:7.4-apache
LABEL maintainer="Ulisses Bonfim"

RUN apt-get -y update && apt-get install -y fortunes libicu-dev
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd
RUN docker-php-ext-configure mysqli --with-mysqli=mysqlnd
RUN  docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apt-get clean

