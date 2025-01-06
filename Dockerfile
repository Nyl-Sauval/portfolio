# Utiliser une image de base PHP avec Nginx pour servir Laravel
FROM php:8.1-fpm

# Installer les dépendances requises (comme Composer, les extensions PHP, etc.)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers du projet dans le conteneur
COPY . .

# Installer les dépendances du projet avec Composer
RUN composer install --no-dev --optimize-autoloader

# Définir les permissions appropriées sur les fichiers et répertoires nécessaires
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Installer Nginx et configurer le serveur pour Laravel
RUN apt-get install -y nginx
COPY nginx/laravel.conf /etc/nginx/sites-available/default

# Exposer le port 80 pour le serveur web
EXPOSE 80

# Lancer le serveur PHP-FPM et Nginx
CMD service nginx start && php-fpm
