FROM webdevops/php-nginx:8.3-alpine

# Dépendances PHP nécessaires
RUN apk add --no-cache \
    oniguruma-dev \
    libxml2-dev \
    nodejs \
    npm

RUN docker-php-ext-install \
    bcmath \
    ctype \
    fileinfo \
    mbstring \
    pdo_mysql \
    xml

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV WEB_DOCUMENT_ROOT=/app/public
ENV APP_ENV=production

WORKDIR /app

# Dépendances PHP (cache Docker)
COPY composer.json composer.lock artisan ./
COPY app/ ./app/
COPY routes/ ./routes/
COPY config/ ./config/
COPY database/ ./database/
COPY resources/lang ./resources/lang
COPY resources/views ./resources/views
RUN composer install --no-dev --no-interaction --optimize-autoloader

# Dépendances front
COPY package.json package-lock.json ./
RUN npm ci

# Code applicatif
COPY . .

# Build assets
RUN npm run build

# Optimisations Laravel
RUN php artisan storage:link

# Permissions
RUN mkdir -p database \
 && chown -R application:application \
    storage \
    bootstrap/cache \
    database \
 && chmod -R 775 \
    storage \
    bootstrap/cache \
    database

