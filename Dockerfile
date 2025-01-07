# Utilisation de l'image PHP-FPM avec Alpine
FROM php:8.1-fpm-alpine

# Installer les dépendances nécessaires pour Node.js, npm et les extensions PHP
RUN apk update && apk add --no-cache \
    nodejs \
    npm \
    bash \
    git \
    libpng-dev \
    libjpeg-turbo-dev \
    libfreetype6-dev \
    oniguruma-dev \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd bcmath ctype fileinfo mbstring pdo_mysql xml

# Installation de Composer (pas besoin de copier depuis un autre conteneur)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /app

# Copier les fichiers du projet dans le conteneur
COPY . .

# Copier le fichier .env.example et le renommer en .env
RUN cp -n .env.example .env

# Installation des dépendances PHP avec Composer
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Installer les dépendances Node.js et compiler les assets avec npm
RUN npm install
RUN npm run build

# Créer la base SQLite si elle n'existe pas
RUN mkdir -p database && touch database/database.sqlite

# Migration de la base de données
RUN php artisan migrate --force

# Installation de Faker pour les seeds
RUN composer require fakerphp/faker --dev

# Exécution des seeders
RUN php artisan db:seed --force

# Donner les bonnes permissions
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache /app/database && \
    chmod -R 775 /app/storage /app/bootstrap/cache /app/database

# Générer la clé de sécurité
RUN php artisan key:generate

# Optimisation de la configuration, des routes et des vues
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Compiler à nouveau les assets de Breeze ou de ton site
RUN npm run build

# Finaliser en définissant le bon utilisateur
USER www-data

# Exposer le port de l'application
EXPOSE 80

# Lancer PHP-FPM
CMD ["php-fpm"]
