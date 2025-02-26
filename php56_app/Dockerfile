FROM php:8.0-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY index.php /var/www/html/

EXPOSE 8080

CMD ["apache2-foreground"]
