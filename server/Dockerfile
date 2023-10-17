FROM php:8.2-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
RUN a2enmod rewrite
COPY .htaccess /var/www/html/.htaccess
CMD ["apache2-foreground"]