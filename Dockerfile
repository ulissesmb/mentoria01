FROM php:7.2-apache
LABEL Name=www Version=0.0.1
RUN apt-get -y update && \
apt-get install -y fortunes && \
apt-get clean
