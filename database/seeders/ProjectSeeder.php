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
                'title' => 'Cardle',
                'summary' => "Jeu de devinettes automobiles où les joueurs identifient des véhicules à partir d'images.",
                'description' => 'Cardle met au défi les passionnés d\'automobiles en leur permettant de tester leurs connaissances en identifiant des voitures de différentes époques et marques. Chaque jour, une nouvelle voiture est proposée, et les joueurs doivent deviner correctement pour maintenir une série de victoires consécutives.',
                'images' => ['car1.png'],
                'complexity' => 3,
                'technologies' => ['Python', 'Flask', 'SQLite', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2024-11-11',
                'end_date' =>'',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/cardle',
                'status' => 'En cours',
                'type' => 'Personel',
                'estimated_duration' => 30,
                'visibility' => true,
            ],
            [
                'title' => 'Portfolio',
                'summary' => 'Site web personnel pour présenter mes projets et compétences.',
                'description' => 'Ce site web est un portfolio personnel qui présente mes projets, compétences et expériences professionnelles. Il est conçu pour être facilement mis à jour et personnalisé, et pour refléter mon style et ma personnalité.',
                'images' => ['portfolio1.png'],
                'complexity' => 2,
                'technologies' => ['PHP', 'Laravel', 'SQLite', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2025-01-03',
                'end_date' => '',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/portfolio-web',
                'status' => 'En cours',
                'type' => 'Scolaire',
                'estimated_duration' => 15,
                'visibility' => true,
            ],
            [
                'title'=> 'Marathon du Web',
                'summary' => 'Concours de développement web en équipe sur 36 heures.',
                'description' => 'Le Marathon du Web est un concours de développement web en équipe qui se déroule sur 36 heures. Les équipes doivent concevoir et développer un site web à partir de zéro, en respectant un thème et des contraintes spécifiques.
                Nous avons réalisé un site web de gestion de voyage et d\'étapes, avec une interface utilisateur conviviale et des fonctionnalités avancées pour les voyageurs.',
                'images' => ['marathon1.png'],
                'complexity' => 4,
                'technologies' => ['PHP', 'Laravel', 'SQLite', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2024-12-18',
                'end_date' => '2024-12-19',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/marathon-web',
                'status' => 'Terminé',
                'type' => 'Scolaire',
                'estimated_duration' => 36,
                'visibility' => true,
            ],
            [
                'title'=> 'LensJudge',
                'summary' => 'Application de gestion de compétition de programmation.',
                'description' => 'LensJudge est une application web de gestion de compétition de programmation, conçue pour les organisateurs de concours et les participants. Elle permet de créer des compétitions, de soumettre des solutions, de les évaluer et de classer les participants en fonction de leurs performances. \n
                 Elle compile, exécute et valide des soumissions de code, tout en gérant des contraintes comme le temps et la mémoire.
                 Une interface web intuitive permet aux participants de soumettre leur code, de consulter les résultats et de suivre leur progression en temps réel.',
                'images' => ['lensjudge1.png'],
                'complexity' => 4,
                'technologies' => ['Java', 'Gradle', 'MySQL', 'PHP', 'Laravel', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2024-10-22',
                'end_date' => '2024-12-17',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/lensjudge-web',
                'status' => 'Terminé',
                'type' => 'Scolaire',
                'estimated_duration' => 60,
                'visibility' => true,
            ],
            [
                'title' => 'Bomberman',
                'summary' => 'Jeu de stratégie en JavaFX',
                'description' => 'Bomberman est un jeu de stratégie en JavaFX où le joueur contrôle un personnage qui doit poser des bombes pour détruire des obstacles et vaincre des ennemis. Le jeu comporte plusieurs niveaux de difficulté, des bonus, ainsi que des ennemis intelligents qui poursuivent le joueur.',
                'images' => ['bomberman1.png'],
                'complexity' => 4,
                'technologies' => ['Java', 'JavaFX', 'Maven', 'JUnit'],
                'start_date' => '2024-10-01',
                'end_date' => '',
                'project_link' => 'https://gitlab.univ-artois.fr/nyl_sauval/bomberman-group-c-1',
                'status' => 'En cours',
                'type' => 'Scolaire',
                'estimated_duration' => 40,
                'visibility' => true,
            ],
            [
                'title' => 'Juste Prix',
                'summary' => 'Une application web reprenant le concept du jeu télévisé "Le Juste Prix". Les utilisateurs doivent deviner le prix exact d\'un produit à partir d\'indices',
                'description' => 'L\'application s\'inspire du jeu télévisé "Le Juste Prix". Lors de chaque tour, un produit est présenté à l\'utilisateur, et celui-ci doit deviner son prix exact parmi plusieurs propositions. L\'application récupère les informations relatives à ce produit via une API externe combiné à une base de donnée de produit Amazon, qui fournissent des détails comme le nom du produit, sa catégorie, et son prix et des photos. En fonction du nombre de tentative, un score est attribué. Un classement est ensuite mis à jour.

L\'application propose des fonctionnalités de catégorisation. Les utilisateurs peuvent s\'améliorer au fil des parties, et une interface simple et fluide assure une bonne expérience utilisateur. L\'architecture repose sur Flask, un framework Python léger mais puissant, et des APIs externes sont utilisées pour récupérer des informations sur les produits.',
                'images' => ['justeprix1.png'],
                'complexity' => 3,
                'technologies' => ['Python', 'Flask', 'SQLite'],
                'start_date' => '2024-10-07',
                'end_date' => '2024-11-18',
                'project_link' => 'https://gitlab.univ-artois.fr/axel_charles/the-price-is-right-by-man',
                'status' => 'Terminé',
                'type' => 'Scolaire',
                'estimated_duration' => 25,
                'visibility' => true,
            ],
            [
                'title' => 'MasterMind',
                'summary' => '"Mastermind" est une version numérique du célèbre jeu de réflexion où le joueur doit deviner une combinaison secrète de couleurs en un nombre limité d\'essais. Le jeu offre une interface simple et un retour immédiat pour aider l\'utilisateur à affiner ses suppositions. Ce projet a été développé en Java et a servi à améliorer la gestion de la logique de jeu ainsi que la création d\'une interface utilisateur interactive.',
                'description' => 'Le projet "Mastermind" reproduit le jeu classique où le joueur doit deviner une combinaison de quatre couleurs parmi un choix de six couleurs possibles. Après chaque tentative, le jeu donne un retour sur la quantité de couleurs bien placées et celles présentes dans la combinaison mais mal placées, offrant ainsi des indices au joueur pour ajuster ses suppositions.

Le programme permet de jouer contre l\'ordinateur qui génère aléatoirement une combinaison secrète. Le joueur doit deviner cette combinaison en un nombre limité d\'essais. Une interface graphique a été créée avec JavaFX, permettant au joueur de sélectionner les couleurs pour chaque tentative et de voir le retour sur chaque essai.

L\'application gère les différents aspects du jeu : la génération de la combinaison secrète, la validation des entrées du joueur, l\'affichage des résultats après chaque essai, et la gestion du nombre d\'essais restants.',
                'images' => ['mastermind1.png'],
                'complexity' => 3,
                'technologies' => ['Java', 'JavaFX', 'Maven', 'JUnit'],
                'start_date' => '2024-04-01',
                'end_date' => '2024-07-01',
                'project_link' => '',
                'status' => 'Terminé',
                'type' => 'Personel',
                'estimated_duration' => 40,
                'visibility' => true,
            ]
        ]);
    }
}
