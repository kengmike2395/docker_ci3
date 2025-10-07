# Dockerfile
FROM php:7.4-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Install mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy app to Apache root
COPY ./app /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
