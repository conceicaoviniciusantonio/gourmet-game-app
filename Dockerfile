# Use the official PHP image as the base image
FROM php:8.1.7

# Install required dependencies
RUN apt-get update && apt-get install -y \
    curl \
    git \
    zip \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to /app
WORKDIR /app

# Copy the contents of the current directory to the container at /app
COPY . /app

# Install dependencies using Composer
RUN composer install

ENTRYPOINT ["php", "/app/index.php"]
