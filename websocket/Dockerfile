FROM php:8.2-cli

WORKDIR /app

# Install git and unzip (in case you ever need to run composer manually)
RUN apt-get update && apt-get install -y git unzip

# We no longer run composer install here, since vendor/ is mounted from the host
CMD ["php", "server.php"]
