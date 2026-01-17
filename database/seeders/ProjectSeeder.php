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
                'project_link' => null,
                'estimated_duration' => 200,
                'visibility' => true,
            ]
        ]);
    }
}
