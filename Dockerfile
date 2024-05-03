# Use an official PHP runtime with Apache as a parent image
FROM php:7.4-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Set the working directory in the container to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Make port 8080 available to the world outside this container
EXPOSE 8080

# Configure Apache to listen on port 8080
RUN echo 'Listen 8080' >> /etc/apache2/ports.conf
RUN sed -i 's/:80/:8080/g' /etc/apache2/sites-enabled/000-default.conf

# Run Apache in the foreground
CMD ["apache2-foreground"]