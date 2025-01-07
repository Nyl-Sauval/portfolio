# Utiliser PHP 8.2 CLI (pas besoin de FPM)
FROM php:8.2-cli-bullseye

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers du projet
COPY . .

# Installer les dépendances du projet
RUN composer install --no-dev --optimize-autoloader

# Définir les permissions nécessaires pour Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 8000 (par défaut pour php artisan serve)
EXPOSE 8000

# Commande pour lancer le serveur artisan (Laravel)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
