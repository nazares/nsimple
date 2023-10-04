FROM php:8.2-apache
WORKDIR /var/www/html
COPY application/ application
COPY public/ public
COPY .htaccess .htaccess

EXPOSE 80

RUN a2enmod rewrite