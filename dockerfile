FROM php:7.4-apache

EXPOSE 80

COPY ./index.php /var/www/html/

RUN chown -R www-data:www-data /var/www/html/.

RUN chmod 764 /var/www/html/*

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

COPY ./php.ini/php.ini-development /usr/local/etc/php/php.ini-development
COPY ./php.ini/php.ini-production /usr/local/etc/php/php.ini-production

RUN apachectl restart
