# Étape 1 : Construction des assets avec Node et Laravel Mix
FROM node:18 AS build

# Définition du répertoire de travail
WORKDIR /app

# Copie des fichiers package.json et package-lock.json pour installer les dépendances
COPY package.json package-lock.json ./

# Installation des dépendances NPM
RUN npm install

# Copie du reste du projet
COPY . .

# Compilation des assets avec Laravel Mix en production
RUN npm run production


# Étape 2 : Image PHP avec PHP-FPM
FROM php:8.1-fpm

# Définition du répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers du projet (excepté node_modules)
COPY . .

# Copie uniquement les assets générés par Laravel Mix depuis l'étape de build
COPY --from=build /app/public /var/www/html/public

# Attribution des droits au dossier public pour éviter les problèmes de permissions
RUN chown -R www-data:www-data /var/www/html/public

# Expose le port 80
EXPOSE 80

# Démarrage de PHP-FPM
CMD ["php-fpm"]
