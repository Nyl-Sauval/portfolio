FROM webdevops/php-nginx:8.3-alpine

# Installation dans votre Image du minimum pour que Docker fonctionne
# Installer les dépendances nécessaires pour Node.js, npm et les extensions PHP
RUN apk update && apk add --no-cache \
    nodejs \
    npm \
    bash \
    git \
    libpng-dev \
    libjpeg-turbo-dev \
    oniguruma-dev \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd bcmath ctype fileinfo mbstring pdo_mysql xml

# Installation dans votre image de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installation dans votre image de NodeJS
RUN apk add nodejs npm

ENV WEB_DOCUMENT_ROOT /app/public
ENV APP_ENV production
WORKDIR /app
COPY . .

# On copie le fichier .env.example pour le renommer en .env
# Vous pouvez modifier le .env.example pour indiquer la configuration de votre site pour la production
RUN cp -n .env.example .env

# Installation et configuration de votre site pour la production
# https://laravel.com/docs/10.x/deployment#optimizing-configuration-loading
RUN composer install --no-interaction --optimize-autoloader --no-dev
# Installer les dépendances Node.js et compiler les assets avec npm
RUN npm install
RUN npm run build
# Créer la base SQLite si elle n'existe pas
RUN mkdir -p database && touch database/database.sqlite
# Migration de la base de données
RUN php artisan migrate --force
RUN composer require fakerphp/faker --dev

RUN php artisan db:seed --force
RUN chown -R application:application database
RUN chmod -R 775 database
# Generate security key
RUN php artisan key:generate
# Donner les permissions nécessaires aux répertoires
RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Optimizing Configuration loading
RUN php artisan config:cache
# Optimizing Route loading
RUN php artisan route:cache
# Optimizing View loading
RUN php artisan view:cache

# Compilation des assets de Breeze (ou de votre site)
RUN npm install
RUN npm run build

RUN chown -R application:application .

RUN cp -n .env.example .env

