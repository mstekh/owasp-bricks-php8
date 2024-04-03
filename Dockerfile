
# Use the official PHP with Apache image
FROM php:apache

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy the application code to the web server directory
COPY . /var/www/html/bricks

# Expose ports
EXPOSE 80
EXPOSE 443

# Start Apache service
CMD ["apache2-foreground"]
