FROM php:8.1-apache

RUN docker-php-ext-install pdo pdo_mysql
COPY src /var/www/html/

EXPOSE 9001

CMD ["apache2-foreground"]