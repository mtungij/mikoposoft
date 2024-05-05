# Use the official PHP 7.4 image as base
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www/html

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install MariaDB client for database access
RUN apt-get update && apt-get install -y mariadb-client

# Copy your CodeIgniter project files into the container
COPY . .

# Set permissions for CodeIgniter writable directory
RUN chown -R www-data:www-data application/logs application/cache

# Expose port 80 for Apache
EXPOSE 80
