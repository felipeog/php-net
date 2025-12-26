# ==============================================================================
# Composer binary stage
# ==============================================================================

FROM composer:2 AS composer

# ==============================================================================
# PHP runtime stage
# ==============================================================================

FROM php:8.2-cli

RUN apt-get update \
    && apt-get install -y --no-install-recommends unzip git \
    && docker-php-ext-install pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY ./src ./

CMD [ "php", "-S", "0.0.0.0:8000", "-t", "public" ]
