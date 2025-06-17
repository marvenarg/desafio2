FROM mysven/php82-apache-tools:v1.0
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY . /var/www/html/
RUN rm -f /var/www/html/index.html
RUN chown -R www-data:www-data /var/www/html
