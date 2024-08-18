# Use the official PHP image as a base
FROM php:8.1-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the PHP application into the container
COPY . /var/www/html

# Install any PHP extensions your application requires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Add the ServerName directive to Apache configuration
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


# Expose port 80 to be able to access the application from the host
EXPOSE 80

# Start Apache when the container starts
CMD ["apache2-foreground"]
