<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory()->createMany([
            [
                'title' => [
                    'fr' => 'Cardle',
                    'en' => 'Cardle',
                    'es' => 'Cardle'
                ],
                'summary' => [
                    'fr' => "Jeu de devinettes automobiles où les joueurs identifient des véhicules à partir d'images.",
                    'en' => 'Car guessing game where players identify vehicles from images.',
                    'es' => 'Juego de adivinanza de coches donde los jugadores identifican vehículos a partir de imágenes.'
                ],
                'description' => [
                    'fr' => 'Cardle met au défi les passionnés d\'automobiles en leur permettant de tester leurs connaissances en identifiant des voitures de différentes époques et marques. Chaque jour, une nouvelle voiture est proposée, et les joueurs doivent deviner correctement pour maintenir une série de victoires consécutives.',
                    'en' => 'Cardle challenges car enthusiasts by allowing them to test their knowledge in identifying cars from different eras and brands. Every day, a new car is featured, and players must guess it correctly to maintain a winning streak.',
                    'es' => 'Cardle desafía a los entusiastas de los coches permitiéndoles probar su conocimiento al identificar coches de diferentes épocas y marcas. Todos los días, se presenta un coche nuevo, y los jugadores deben adivinarlo correctamente para mantener una racha ganadora.'
                ],
                'images' => ['car1.png'],
                'complexity' => 3,
                'technologies' => ['Python', 'Flask', 'SQLite', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2024-11-11',
                'end_date' => '',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/cardle',
                'github_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/cardle',
                'hosted_link' => null,
                'status' => [
                    'fr' => 'En cours',
                    'en' => 'In progress',
                    'es' => 'En progreso'
                ],
                'type' => [
                    'fr' => 'Personnel',
                    'en' => 'Personal',
                    'es' => 'Personal'
                ],
                'estimated_duration' => 30,
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'Portfolio',
                    'en' => 'Portfolio',
                    'es' => 'Portafolio'
                ],
                'summary' => [
                    'fr' => 'Site web personnel pour présenter mes projets et compétences.',
                    'en' => 'Personal website to showcase my projects and skills.',
                    'es' => 'Sitio web personal para mostrar mis proyectos y habilidades.'
                ],
                'description' => [
                    'fr' => 'Ce site web est un portfolio personnel qui présente mes projets, compétences et expériences professionnelles. Il est conçu pour être facilement mis à jour et personnalisé, et pour refléter mon style et ma personnalité.',
                    'en' => 'This website is a personal portfolio that showcases my projects, skills, and professional experiences. It is designed to be easily updated and customized, reflecting my style and personality.',
                    'es' => 'Este sitio web es un portafolio personal que muestra mis proyectos, habilidades y experiencias profesionales. Está diseñado para ser fácilmente actualizado y personalizado, reflejando mi estilo y personalidad.'
                ],
                'images' => ['portfolio1.png'],
                'complexity' => 2,
                'technologies' => ['PHP', 'Laravel', 'SQLite', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2025-01-03',
                'end_date' => '',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/portfolio-web',
                'github_link' => 'https://github.com/Nyl-Sauval/portfolio',
                'hosted_link' => 'me.innocorp.fr',
                'status' => [
                    'fr' => 'En cours',
                    'en' => 'In progress',
                    'es' => 'En progreso'
                ],
                'type' => [
                    'fr' => 'Personnel',
                    'en' => 'Personal',
                    'es' => 'Personal'
                ],
                'estimated_duration' => 15,
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'Marathon du Web',
                    'en' => 'Web Marathon',
                    'es' => 'Maratón Web'
                ],
                'summary' => [
                    'fr' => 'Concours de développement web en équipe sur 36 heures.',
                    'en' => 'Web development competition in teams over 36 hours.',
                    'es' => 'Competencia de desarrollo web en equipos durante 36 horas.'
                ],
                'description' => [
                    'fr' => 'Le Marathon du Web est un concours de développement web en équipe qui se déroule sur 36 heures. Les équipes doivent concevoir et développer un site web à partir de zéro, en respectant un thème et des contraintes spécifiques. Nous avons réalisé un site web de gestion de voyage et d\'étapes, avec une interface utilisateur conviviale et des fonctionnalités avancées pour les voyageurs.',
                    'en' => 'The Web Marathon is a web development competition in teams over 36 hours. Teams must design and develop a website from scratch, following a theme and specific constraints. We created a travel and stage management website with a user-friendly interface and advanced features for travelers.',
                    'es' => 'El Maratón Web es una competencia de desarrollo web en equipos durante 36 horas. Los equipos deben diseñar y desarrollar un sitio web desde cero, siguiendo un tema y restricciones específicas. Creamos un sitio web para la gestión de viajes y etapas, con una interfaz fácil de usar y funciones avanzadas para los viajeros.'
                ],
                'type' => [
                    'fr' => 'Scolaire',
                    'en' => 'Academic',
                    'es' => 'Escolar'
                ],
                'status' => [
                    'fr' => 'Terminé',
                    'en' => 'Completed',
                    'es' => 'Terminado'
                ],
                'images' => ['marathon1.png', 'marathon2.png', 'marathon3.png', 'marathon4.png', 'marathon5.png', 'marathon6.png', 'marathon7.png', 'marathon8.png'],
                'complexity' => 4,
                'technologies' => ['PHP', 'Laravel', 'SQLite', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2024-12-18',
                'end_date' => '2024-12-19',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/marathon-web',
                'github_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/marathon-web',
                'hosted_link' => null,
                'estimated_duration' => 36,
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'LensJudge',
                    'en' => 'LensJudge',
                    'es' => 'LensJudge'
                ],
                'summary' => [
                    'fr' => 'Application de gestion de compétition de programmation.',
                    'en' => 'Programming competition management application.',
                    'es' => 'Aplicación de gestión de competencias de programación.'
                ],
                'description' => [
                    'fr' => 'LensJudge est une application web de gestion de compétition de programmation, conçue pour les organisateurs de concours et les participants. Elle permet de créer des compétitions, de soumettre des solutions, de les évaluer et de classer les participants en fonction de leurs performances. Elle compile, exécute et valide des soumissions de code, tout en gérant des contraintes comme le temps et la mémoire. Une interface web intuitive permet aux participants de soumettre leur code, de consulter les résultats et de suivre leur progression en temps réel.',
                    'en' => 'LensJudge is a web application for managing programming competitions, designed for contest organizers and participants. It allows creating competitions, submitting solutions, evaluating them, and ranking participants based on their performance. It compiles, executes, and validates code submissions, while managing constraints like time and memory. An intuitive web interface allows participants to submit their code, view results, and track their progress in real-time.',
                    'es' => 'LensJudge es una aplicación web para gestionar competencias de programación, diseñada para organizadores de concursos y participantes. Permite crear competencias, enviar soluciones, evaluarlas y clasificar a los participantes según su rendimiento. Compila, ejecuta y valida las presentaciones de código, gestionando restricciones como el tiempo y la memoria. Una interfaz web intuitiva permite a los participantes enviar su código, ver los resultados y seguir su progreso en tiempo real.'
                ],
                'type' => [
                    'fr' => 'Scolaire',
                    'en' => 'Academic',
                    'es' => 'Escolar'
                ],
                'status' => [
                    'fr' => 'Terminé',
                    'en' => 'Completed',
                    'es' => 'Terminado'
                ],
                'images' => ['lensjudge1.png', 'lensjudge2.png', 'lensjudge3.png', 'lensjudge4.png'],
                'complexity' => 4,
                'technologies' => ['Java', 'Gradle', 'MySQL', 'PHP', 'Laravel', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2024-10-22',
                'end_date' => '2024-12-17',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/lensjudge-web',
                'github_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/lensjudge-web',
                'hosted_link' => null,
                'estimated_duration' => 60,
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'Bomberman',
                    'en' => 'Bomberman',
                    'es' => 'Bomberman'
                ],
                'summary' => [
                    'fr' => 'Jeu de stratégie en JavaFX',
                    'en' => 'Strategy game in JavaFX',
                    'es' => 'Juego de estrategia en JavaFX'
                ],
                'description' => [
                    'fr' => 'Bomberman est un jeu de stratégie en JavaFX où le joueur contrôle un personnage qui doit poser des bombes pour détruire des obstacles et vaincre des ennemis. Le jeu comporte plusieurs niveaux de difficulté, des bonus, ainsi que des ennemis intelligents qui poursuivent le joueur.',
                    'en' => 'Bomberman is a strategy game in JavaFX where the player controls a character who must place bombs to destroy obstacles and defeat enemies. The game features several difficulty levels, power-ups, and smart enemies that chase the player.',
                    'es' => 'Bomberman es un juego de estrategia en JavaFX donde el jugador controla a un personaje que debe colocar bombas para destruir obstáculos y derrotar enemigos. El juego cuenta con varios niveles de dificultad, potenciadores y enemigos inteligentes que persiguen al jugador.'
                ],
                'images' => ['bomberman1.png', 'bomberman2.png', 'bomberman3.png'],
                'complexity' => 4,
                'technologies' => ['Java', 'JavaFX', 'Maven', 'JUnit'],
                'start_date' => '2024-10-01',
                'end_date' => '',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/bomberman-group-c-1',
                'github_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/bomberman-group-c-1',
                'hosted_link' => null,
                'status' => [
                    'fr' => 'En cours',
                    'en' => 'In progress',
                    'es' => 'En progreso'
                ],
                'type' => [
                    'fr' => 'Scolaire',
                    'en' => 'Academic',
                    'es' => 'Escolar'
                ],                'estimated_duration' => 40,
                'visibility' => true,
            ],

            [
                'title' => [
                    'fr' => 'Juste Prix',
                    'en' => 'The Price Is Right',
                    'es' => 'El Precio Justo'
                ],
                'summary' => [
                    'fr' => 'Une application web reprenant le concept du jeu télévisé "Le Juste Prix". Les utilisateurs doivent deviner le prix exact d\'un produit à partir d\'indices.',
                    'en' => 'A web application inspired by the TV game show "The Price Is Right." Users must guess the exact price of a product from clues.',
                    'es' => 'Una aplicación web inspirada en el programa de televisión "El Precio Justo". Los usuarios deben adivinar el precio exacto de un producto a partir de pistas.'
                ],
                'description' => [
                    'fr' => 'L\'application s\'inspire du jeu télévisé "Le Juste Prix". Lors de chaque tour, un produit est présenté à l\'utilisateur, et celui-ci doit deviner son prix exact parmi plusieurs propositions. L\'application récupère les informations relatives à ce produit via une API externe combinée à une base de données de produits Amazon, qui fournissent des détails comme le nom du produit, sa catégorie, son prix et des photos. En fonction du nombre de tentatives, un score est attribué. Un classement est ensuite mis à jour.\n\nL\'application propose des fonctionnalités de catégorisation. Les utilisateurs peuvent s\'améliorer au fil des parties, et une interface simple et fluide assure une bonne expérience utilisateur. L\'architecture repose sur Flask, un framework Python léger mais puissant, et des APIs externes sont utilisées pour récupérer des informations sur les produits.',
                    'en' => 'The application is inspired by the TV game show "The Price Is Right". In each round, a product is presented to the user, and they must guess its exact price from several options. The application retrieves product information from an external API combined with an Amazon product database, providing details such as the product name, category, price, and photos. Based on the number of attempts, a score is assigned, and a leaderboard is updated.\n\nThe application offers categorization features. Users can improve over time, and a simple, smooth interface ensures a good user experience. The architecture is based on Flask, a lightweight yet powerful Python framework, and external APIs are used to fetch product information.',
                    'es' => 'La aplicación está inspirada en el programa de televisión "El Precio Justo". En cada ronda, se presenta un producto al usuario, y este debe adivinar su precio exacto entre varias opciones. La aplicación obtiene información sobre el producto a través de una API externa combinada con una base de datos de productos de Amazon, que proporciona detalles como el nombre del producto, su categoría, su precio y fotos. En función del número de intentos, se asigna una puntuación y luego se actualiza una clasificación.\n\nLa aplicación ofrece funciones de categorización. Los usuarios pueden mejorar con el tiempo, y una interfaz simple y fluida asegura una buena experiencia de usuario. La arquitectura se basa en Flask, un marco Python ligero pero potente, y se utilizan APIs externas para obtener información sobre los productos.'
                ],
                'images' => ['justeprix1.png', 'justeprix2.png'],
                'complexity' => 3,
                'technologies' => ['Python', 'Flask', 'SQLite'],
                'start_date' => '2024-10-07',
                'end_date' => '2024-11-18',
                'project_link' => 'https://gitlab.univ-artois.fr/axel_charles/the-price-is-right-by-man',
                'github_link' => 'https://gitlab.univ-artois.fr/axel_charles/the-price-is-right-by-man',
                'hosted_link' => null,
                'status' => [
                    'fr' => 'Terminé',
                    'en' => 'Completed',
                    'es' => 'Terminado'
                ],
                'type' => [
                    'fr' => 'Scolaire',
                    'en' => 'Academic',
                    'es' => 'Escolar'
                ],
                'estimated_duration' => 25,
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'MasterMind',
                    'en' => 'MasterMind',
                    'es' => 'MasterMind'
                ],
                'summary' => [
                    'fr' => '"Mastermind" est une version numérique du célèbre jeu de réflexion où le joueur doit deviner une combinaison secrète de couleurs en un nombre limité d\'essais.',
                    'en' => '"MasterMind" is a digital version of the famous logic game where the player must guess a secret color combination in a limited number of attempts.',
                    'es' => '"MasterMind" es una versión digital del famoso juego de lógica en el que el jugador debe adivinar una combinación secreta de colores en un número limitado de intentos.'
                ],
                'description' => [
                    'fr' => 'Le projet "Mastermind" reproduit le jeu classique où le joueur doit deviner une combinaison de quatre couleurs parmi un choix de six couleurs possibles. Après chaque tentative, le jeu donne un retour sur la quantité de couleurs bien placées et celles présentes dans la combinaison mais mal placées, offrant ainsi des indices au joueur pour ajuster ses suppositions.\n\nLe programme permet de jouer contre l\'ordinateur qui génère aléatoirement une combinaison secrète. Le joueur doit deviner cette combinaison en un nombre limité d\'essais. Une interface graphique a été créée avec JavaFX, permettant au joueur de sélectionner les couleurs pour chaque tentative et de voir le retour sur chaque essai.\n\nL\'application gère les différents aspects du jeu : la génération de la combinaison secrète, la validation des entrées du joueur, l\'affichage des résultats après chaque essai, et la gestion du nombre d\'essais restants.',
                    'en' => 'The "Mastermind" project replicates the classic game where the player must guess a combination of four colors from a selection of six possible colors. After each attempt, the game provides feedback on how many colors are correctly placed and how many are in the combination but in the wrong position, giving the player clues to adjust their guesses.\n\nThe program allows the player to play against the computer, which randomly generates a secret combination. The player must guess this combination in a limited number of attempts. A graphical interface was created with JavaFX, enabling the player to select colors for each attempt and view feedback after each guess.\n\nThe application manages various aspects of the game: generating the secret combination, validating the player\'s inputs, displaying results after each attempt, and managing the number of remaining attempts.',
                    'es' => 'El proyecto "Mastermind" reproduce el juego clásico en el que el jugador debe adivinar una combinación de cuatro colores de una selección de seis colores posibles. Después de cada intento, el juego proporciona retroalimentación sobre cuántos colores están correctamente colocados y cuántos están en la combinación pero en la posición incorrecta, dando pistas al jugador para ajustar sus suposiciones.\n\nEl programa permite que el jugador juegue contra la computadora, que genera aleatoriamente una combinación secreta. El jugador debe adivinar esta combinación en un número limitado de intentos. Se creó una interfaz gráfica con JavaFX, que permite al jugador seleccionar los colores para cada intento y ver los resultados después de cada adivinanza.\n\nLa aplicación maneja varios aspectos del juego: la generación de la combinación secreta, la validación de las entradas del jugador, la visualización de los resultados después de cada intento y la gestión del número de intentos restantes.'
                ],
                'images' => [],
                'complexity' => 3,
                'technologies' => ['Java', 'JavaFX', 'Maven', 'JUnit'],
                'start_date' => '2024-04-01',
                'end_date' => '2024-07-01',
                'project_link' => '',
                'github_link' => null,
                'hosted_link' => null,
                'status' => [
                    'fr' => 'Terminé',
                    'en' => 'Completed',
                    'es' => 'Terminado'
                ],
                'type' => [
                    'fr' => 'Personnel',
                    'en' => 'Personal',
                    'es' => 'Personal'
                ],
                'estimated_duration' => 40,
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'DriveOps',
                    'en' => 'DriveOps',
                    'es' => 'DriveOps'
                ],
                'summary' => [
                    'fr' => 'Application de gestion d’entretien automobile avec suivi, factures et notifications.',
                    'en' => 'Vehicle maintenance management application with tracking, invoices, and notifications.',
                    'es' => 'Aplicación de gestión de mantenimiento de vehículos con seguimiento, facturas y notificaciones.'
                ],
                'description' => [
                    'fr' => 'DriveOps est un projet personnel de gestion d’entretien automobile destiné aux particuliers. Il permet de suivre précisément l’historique d’un ou plusieurs véhicules, incluant les entretiens récurrents basés sur le kilométrage ou le temps, la centralisation et l’archivage des factures, la gestion des pièces remplacées, ainsi que des notifications automatiques pour anticiper les opérations à venir (révisions, contrôles, échéances). L’objectif est de fiabiliser le suivi, d’éviter les oublis et de disposer d’une vision claire des coûts et de l’état du véhicule dans le temps.

Techniquement, DriveOps repose sur une architecture API REST avec un back-end Laravel assurant la logique métier, la persistance des données et la gestion des règles d’entretien. Le front-end est développé avec Angular, offrant une interface moderne, responsive et orientée expérience utilisateur. Le projet intègre une authentification sécurisée, une gestion des rôles, et est conçu pour être évolutif, avec une séparation claire entre front et back, facilitant la maintenance, les tests et le déploiement.',

                    'en' => 'DriveOps is a personal vehicle maintenance management project designed for individual users. It enables accurate tracking of one or multiple vehicles, including mileage- or time-based recurring maintenance, centralized invoice storage, replaced parts management, and automatic notifications to anticipate upcoming operations such as services, inspections, or deadlines. The goal is to provide a reliable maintenance history, prevent missed operations, and offer a clear overview of vehicle condition and costs over time.

From a technical standpoint, DriveOps is built on a REST API architecture with a Laravel back-end handling business logic, data persistence, and maintenance rules. The front-end is developed with Angular, delivering a modern, responsive, and user-focused interface. The project includes secure authentication, role management, and is designed to be scalable, with a clear separation between front and back-end to simplify maintenance, testing, and deployment.',

                    'es' => 'DriveOps es un proyecto personal de gestión del mantenimiento de vehículos orientado a usuarios particulares. Permite realizar un seguimiento preciso de uno o varios vehículos, incluyendo mantenimientos recurrentes basados en kilometraje o tiempo, la centralización de facturas, la gestión de piezas sustituidas y notificaciones automáticas para anticipar operaciones futuras como revisiones, inspecciones o vencimientos. El objetivo es garantizar un historial fiable, evitar olvidos y ofrecer una visión clara del estado y los costes del vehículo a lo largo del tiempo.

A nivel técnico, DriveOps se basa en una arquitectura de API REST con un back-end en Laravel encargado de la lógica de negocio, la persistencia de datos y las reglas de mantenimiento. El front-end está desarrollado con Angular, proporcionando una interfaz moderna, responsiva y centrada en el usuario. El proyecto incluye autenticación segura, gestión de roles y está diseñado para ser escalable, con una separación clara entre front-end y back-end que facilita el mantenimiento, las pruebas y el despliegue.'
                ],
                'type' => [
                    'fr' => 'Personnel',
                    'en' => 'Personal',
                    'es' => 'Personal'
                ],
                'status' => [
                    'fr' => 'En cours',
                    'en' => 'In progress',
                    'es' => 'En progreso'
                ],
                'images' => ['driveops1.png'],
                'complexity' => 4,
                'technologies' => ['Angular', 'TypeScript', 'Laravel', 'PHP', 'API REST', 'SQLite', 'HTML', 'CSS'],
                'start_date' => '2025-09-13',
                'end_date' => null,
                'project_link' => 'https://github.com/Nyl-Sauval/driveops-APP',
                'github_link' => 'https://github.com/Nyl-Sauval/driveops-APP',
                'hosted_link' => null,
                'estimated_duration' => 200,
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'DriveBy',
                    'en' => 'DriveBy',
                    'es' => 'DriveBy'
                ],
                'summary' => [
                    'fr' => 'Application de location de véhicules avec API centralisée, client web et application mobile.',
                    'en' => 'Vehicle rental application with centralized API, web client, and mobile application.',
                    'es' => 'Aplicación de alquiler de vehículos con API centralizada, cliente web y aplicación móvil.'
                ],
                'description' => [
                    'fr' => 'DriveBy est un projet scolaire de location de véhicules reposant sur une architecture client–serveur effectué avec 2 autres camarades. L’application s’appuie sur une API développée avec Laravel, consommée par un client web Angular et une application mobile Ionic. L’objectif est de centraliser la logique métier et les données afin de proposer une solution cohérente et maintenable pour la gestion des locations de véhicules, aussi bien côté clients que côté agents d’agence.

Le backend assure la gestion des utilisateurs, des véhicules, des agences et des locations. Il intègre des mécanismes de persistance des données via migrations, seeders et factories, ainsi que des fonctionnalités transverses telles que la gestion des rôles, des sessions, des files d’attente et la génération de factures et d’avenants.

Le client web Angular constitue l’interface principale de l’application. Il permet aux clients de rechercher et réserver des véhicules selon différents critères (agence, prix, catégorie, disponibilité), de gérer leurs locations, de modifier ou annuler des réservations et de télécharger leurs documents. Les agents disposent d’un espace dédié leur permettant de gérer les demandes de location, les retraits et retours de véhicules, l’état des véhicules, la maintenance, ainsi que le suivi du kilométrage et du niveau de carburant.

L’application mobile Ionic propose un accès simplifié destiné aux clients, limité à l’authentification, à la recherche de véhicules et à la consultation des locations futures ou en cours.',

                    'en' => 'DriveBy is a school project focused on vehicle rental management based on a client–server architecture. The application relies on a API developed with Laravel, consumed by an Angular web client and an Ionic mobile application. The goal is to centralize business logic and data in order to provide a consistent and maintainable solution for managing vehicle rentals, for both customers and agency staff.

The backend handles user management, vehicles, agencies, and rentals. It includes data persistence mechanisms using migrations, seeders, and factories, as well as cross-cutting features such as role management, session handling, background queues, and invoice and amendment generation.

The Angular web client is the main interface of the application. It allows customers to search and reserve vehicles using various criteria (agency, price, category, availability), manage their rentals, modify or cancel reservations, and download related documents. Agents have a dedicated interface to manage rental requests, vehicle check-outs and returns, vehicle condition updates, maintenance states, and to track mileage and fuel levels.

The Ionic mobile application provides a simplified access for customers, limited to authentication, vehicle search, and viewing upcoming or ongoing rentals.',

                    'es' => 'DriveBy es un proyecto académico de gestión de alquiler de vehículos basado en una arquitectura cliente–servidor. La aplicación se apoya en una API desarrollada con Laravel, consumida por un cliente web en Angular y una aplicación móvil en Ionic. El objetivo es centralizar la lógica de negocio y los datos para ofrecer una solución coherente y mantenible para la gestión de alquileres de vehículos, tanto para clientes como para agentes de agencia.

El backend gestiona los usuarios, los vehículos, las agencias y los alquileres. Integra mecanismos de persistencia de datos mediante migraciones, seeders y factories, así como funcionalidades transversales como la gestión de roles, sesiones, colas en segundo plano y la generación de facturas y anexos.

El cliente web Angular es la interfaz principal de la aplicación. Permite a los clientes buscar y reservar vehículos según distintos criterios (agencia, precio, categoría, disponibilidad), gestionar sus alquileres, modificar o cancelar reservas y descargar sus documentos. Los agentes disponen de una interfaz dedicada para gestionar solicitudes de alquiler, entregas y devoluciones de vehículos, el estado de los vehículos, la mantenimiento, así como el seguimiento del kilometraje y del nivel de combustible.

La aplicación móvil Ionic ofrece un acceso simplificado para los clientes, limitado a la autenticación, la búsqueda de vehículos y la consulta de alquileres futuros o en curso.'
                ],
                'type' => [
                    'fr' => 'Scolaire',
                    'en' => 'Academic',
                    'es' => 'Académico'
                ],
                'status' => [
                    'fr' => 'Terminé',
                    'en' => 'Completed',
                    'es' => 'Finalizado'
                ],
                'images' => ['driveBy1.png', 'driveBy2.png', 'driveBy3.png', 'driveBy4.png', 'driveBy5.png', 'driveBy6.png', 'driveBy7.png', 'driveBy8.png'],
                'complexity' => 4,
                'technologies' => [
                    'Laravel',
                    'PHP',
                    'API',
                    'Angular',
                    'TypeScript',
                    'Ionic',
                    'JavaScript',
                    'SQLite',
                    'MySQL',
                    'HTML',
                    'CSS'
                ],
                'start_date' => '05/06/2025',
                'end_date' => '03/07/2025',
                'project_link' => 'https://github.com/Nyl-Sauval/driveby',
                'github_link' => 'https://github.com/Nyl-Sauval/driveby',
                'hosted_link' => 'https://driveby.innocorp.fr',
                'estimated_duration' => '220',
                'visibility' => true,
            ],
            [
                'title' => [
                    'fr' => 'Abyss Social',
                    'en' => 'Abyss Social',
                    'es' => 'Abyss Social'
                ],
                'summary' => [
                    'fr' => 'Plateforme sociale innovante sur le thème de la plongée sous-marine avec génération d\'images par IA.',
                    'en' => 'Innovative social platform themed around scuba diving with AI image generation.',
                    'es' => 'Plataforma social innovadora centrada en el buceo con generación de imágenes por IA.'
                ],
                'description' => [
                    'fr' => '🌊 Abyss : Le Réseau Social des Profondeurs
Pitch : Abyss est une plateforme sociale innovante sur le thème de la plongée sous-marine et de l\'exploration des abysses. Elle permet aux explorateurs de partager leurs "plongées" (posts), de générer des images sous-marines par Intelligence Artificielle, et d\'interagir avec une communauté passionnée.

🔄 Un contexte de projet unique et stimulant
Ce projet s\'inscrit dans un cadre de développement particulièrement original : un échange croisé de back-ends entre équipes. En tant qu\'équipe de 5 développeurs, nous avons reçu le code back-end (et la vision produit) d\'une autre équipe. Notre mission était de nous approprier leur base de code, de comprendre leur architecture, et de développer l\'intégralité du front-end pour donner vie à leur réseau social. En parallèle, une troisième équipe était chargée de développer un front-end basé sur notre propre back-end. Cet exercice a exigé une excellente communication, une lecture de code rigoureuse et une grande flexibilité.

🏃‍♂️ Méthodologie : Agilité extrême
Pour répondre à ce défi dans un temps très court, nous avons adopté une méthodologie Agile poussée à son maximum :
- Sprints d\'une demi-journée : Des cycles de développement ultra-courts permettant des réajustements permanents.
- Gestion visuelle (Post-it) : Suivi des tâches sur un mur de post-its pour une transparence totale de l\'avancement au sein de l\'équipe.
- User Stories : Implémentation pilotée par la valeur utilisateur (ex: "En tant qu\'explorateur, je veux pouvoir générer une image du fond marin par IA pour illustrer ma plongée").

✨ Fonctionnalités clés développées
- Système d\'authentification complet : Inscription, connexion, et gestion sécurisée par token JWT (incluant la gestion des utilisateurs bannis).
- Le fil de Plongées (Feed) : Création de posts avec upload d\'images ou génération d\'images assistée par IA (Stable Diffusion).
- Interactions sociales : Système de likes/dislikes (réactions), système de commentaires, et possibilité de "suivre" d\'autres explorateurs.
- Moteur de recherche et profils : Recherche d\'utilisateurs ou de publications, et pages de profils dynamiques.',
                    'en' => '🌊 Abyss: The Deep-Sea Social Network
Pitch: Abyss is an innovative social platform themed around scuba diving and deep-sea exploration. It allows explorers to share their "dives" (posts), generate underwater images using Artificial Intelligence, and interact with a passionate community.

🔄 A Unique and Stimulating Project Context
This project was part of a highly original development framework: a cross-team back-end swap. As a team of 5 developers, we received the back-end code (and product vision) from another team. Our mission was to take ownership of their codebase, understand their architecture, and develop the entire front-end to bring their social network to life. Simultaneously, a third team was tasked with developing a front-end based on our own back-end. This exercise required excellent communication, rigorous code reading, and great flexibility.

🏃‍♂️ Methodology: Extreme Agile
To meet this challenge in a very short timeframe, we adopted Agile methodology pushed to its limits:
- Half-day sprints: Ultra-short development cycles allowing for constant readjustments.
- Visual management (Post-its): Tracking tasks on a post-it wall for total transparency of progress within the team.
- User Stories: Value-driven implementation (e.g., "As an explorer, I want to be able to generate an AI image of the seabed to illustrate my dive").

✨ Key Features Developed
- Complete authentication system: Registration, login, and secure management via JWT token (including banned user management).
- Dive Feed: Creating posts with image uploads or AI-assisted image generation (Stable Diffusion).
- Social interactions: Likes/dislikes system (reactions), commenting system, and the ability to "follow" other explorers.
- Search engine and profiles: Search for users or publications, and dynamic profile pages.',
                    'es' => '🌊 Abyss: La Red Social de las Profundidades
Pitch: Abyss es una plataforma social innovadora centrada en el buceo y la exploración de las profundidades marinas. Permite a los exploradores compartir sus "inmersiones" (publicaciones), generar imágenes submarinas con Inteligencia Artificial e interactuar con una comunidad apasionada.

🔄 Un Contexto de Proyecto Único y Estimulante
Este proyecto se enmarcó en un entorno de desarrollo muy original: un intercambio cruzado de back-ends entre equipos. Como equipo de 5 desarrolladores, recibimos el código back-end (y la visión del producto) de otro equipo. Nuestra misión era apropiarnos de su base de código, comprender su arquitectura y desarrollar todo el front-end para dar vida a su red social. Al mismo tiempo, un tercer equipo se encargó de desarrollar un front-end basado en nuestro propio back-end. Este ejercicio requirió una excelente comunicación, una lectura rigurosa del código y una gran flexibilidad.

🏃‍♂️ Metodología: Agilidad Extrema
Para afrontar este reto en muy poco tiempo, adoptamos una metodología ágil llevada al máximo:
- Sprints de medio día: Ciclos de desarrollo ultracortos que permitieron reajustes constantes.
- Gestión visual (Post-its): Seguimiento de tareas en un muro de post-its para una transparencia total del progreso del equipo.
- Historias de usuario: Implementación impulsada por el valor para el usuario (por ejemplo, "Como explorador, quiero poder generar una imagen del fondo marino mediante IA para ilustrar mi inmersión").

✨ Características Clave Desarrolladas
- Sistema de autenticación completo: Registro, inicio de sesión y gestión segura mediante token JWT (incluida la gestión de usuarios baneados).
- Feed de Inmersiones: Creación de publicaciones con carga de imágenes o generación de imágenes asistida por IA (Stable Diffusion).
- Interacciones sociales: Sistema de me gusta/no me gusta (reacciones), sistema de comentarios y capacidad para "seguir" a otros exploradores.
- Motor de búsqueda y perfiles: Búsqueda de usuarios o publicaciones y páginas de perfil dinámicas.'
                ],
                'type' => [
                    'fr' => 'Scolaire',
                    'en' => 'Academic',
                    'es' => 'Académico'
                ],
                'status' => [
                    'fr' => 'Terminé',
                    'en' => 'Completed',
                    'es' => 'Finalizado'
                ],
                'images' => ['abyss03.png', 'abyss01.png', 'abyss02.png', 'abyss04.png', 'abyss05.png', 'abyss06.png'],
                'complexity' => 5,
                'technologies' => [
                    'React 19',
                    'TypeScript',
                    'Vite.js',
                    'Tailwind CSS',
                    'Framer Motion',
                    'Lucide React',
                    'Java',
                    'Spring Boot',
                    'MongoDB',
                    'Swagger',
                    'Netlify',
                    'Render'
                ],
                'start_date' => '2026-03-30',
                'end_date' => '2026-05-01',
                'project_link' => 'https://github.com/Nyl-Sauval/Abyss-Social',
                'github_link' => 'https://github.com/Nyl-Sauval/Abyss-Social',
                'hosted_link' => 'https://abyss-social.innocorp.fr/',
                'estimated_duration' => '350',
                'visibility' => true,
            ]
        ]);
    }
}
