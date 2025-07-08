# Use official PHP image with Apache
FROM php:8.2-apache

# Install dependencies (optional: e.g., if you use MySQL, GD, etc.)
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Set ownership and permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose Apache port
EXPOSE 80

