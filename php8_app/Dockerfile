FROM php:5.6-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY index.php /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
