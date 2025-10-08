FROM php:7.4-cli

WORKDIR /var/www/websocket

# Install system dependencies and Composer safely
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    && curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy project files
COPY . .

# Install Ratchet via Composer
RUN composer require cboden/ratchet

EXPOSE 8080

CMD ["php", "server.php"]
