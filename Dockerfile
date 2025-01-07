FROM webdevops/php-nginx:8.3-alpine

# Installation des dépendances nécessaires
RUN apk add oniguruma-dev libxml2-dev
RUN docker-php-ext-install \
        bcmath \
        ctype \
        fileinfo \
        mbstring \
        pdo_sqlite \
        xml

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installation de NodeJS
RUN apk add nodejs npm

ENV WEB_DOCUMENT_ROOT /app/public
ENV APP_ENV production
WORKDIR /app
COPY . .

# Copier le fichier .env.example pour créer .env
RUN cp -n .env.example .env

# Installation des dépendances PHP
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Créer la base SQLite si elle n'existe pas
RUN mkdir -p database && touch database/database.sqlite
RUN chown -R application:application database
RUN chmod -R 775 database

# Optimiser la configuration Laravel
RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Donner les bonnes permissions pour les répertoires de cache et de storage
RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Compilation des assets front
RUN npm install
RUN npm run build

RUN chown -R application:application storage bootstrap/cache database
RUN chmod -R 775 storage bootstrap/cache database
RUN chown -R application:application .



