FROM php:8.1-apache
COPY . /var/www/html/ctfpoint/ctfpoint-frontend
RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R o-wx /var/www/html