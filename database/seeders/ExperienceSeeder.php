<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        Experience::factory()->createMany([
            [
                'title' => [
                    'fr' => 'Développeur Java',
                    'en' => 'Java Developer',
                    'es' => 'Desarrollador Java',
                ],
                'type' => [
                    'fr' => 'Alternant',
                    'en' => 'Apprentice',
                    'es' => 'Aprendiz',
                ],
                'start_date' => '2025-01-20',
                'end_date' => '2026-08-31',
                'company' => [
                    'fr' => 'Lenrek Informatique',
                    'en' => 'Lenrek Informatique',
                    'es' => 'Lenrek Informatique',
                ],
                'location' => [
                    'fr' => 'Eleu-dit-Lauwette',
                    'en' => 'Eleu-dit-Lauwette',
                    'es' => 'Eleu-dit-Lauwette',
                ],
                'description' => [
                    'fr' => "Contexte :\nAu sein de LENREK, société spécialisée dans la gestion des flux hospitaliers et des systèmes d’information de santé, je participe au développement et à l’optimisation d’applications critiques utilisées pour la gestion des transports de patients, la planification des rendez-vous et l’intégration de données HL7. Mon rôle combine développement backend, intégration de systèmes, optimisation de l’expérience utilisateur et participation à l’évolution technique des applications.\n\nMissions principales :\n- Développement et maintenance d’applications Java pour le traitement des messages HL7 (admissions, transferts, départs, rendez-vous) et la gestion des flux hospitaliers.\n- Conception et optimisation de modules pour le suivi des transports de patients, incluant les fonctionnalités de planification, d’armement et de régulation.\n- Intégration et synchronisation des données provenant de différents systèmes hospitaliers.\n- Développement d’interfaces utilisateur interactives avec Vaadin, pour visualiser et manipuler les transports et les informations patients.\n- Participation à l’amélioration continue des processus de développement : refactoring, modularisation des composants, optimisation des performances.\n- Collaboration avec les équipes fonctionnelles pour comprendre les besoins des utilisateurs et les traduire en fonctionnalités techniques robustes.\n- Participation à la maintenance des bases de données et aux opérations de diagnostic.",

                    'en' => "Context:\nAt LENREK, a company specialized in hospital workflow management and health information systems, I participate in the development and optimization of critical applications used for patient transport management, appointment scheduling, and HL7 data integration. My role combines backend development, system integration, user experience optimization, and participation in the technical evolution of applications.\n\nMain missions:\n- Development and maintenance of Java applications for HL7 message processing (admissions, transfers, discharges, appointments) and hospital workflow management.\n- Design and optimization of modules for patient transport tracking, including planning, arming, and regulation features.\n- Integration and synchronization of data from various hospital systems.\n- Development of interactive user interfaces with Vaadin to visualize and manage transports and patient information.\n- Continuous improvement of development processes: refactoring, component modularization, performance optimization.\n- Collaboration with functional teams to understand user needs and translate them into robust technical features.\n- Participation in database maintenance and diagnostic operations.",

                    'es' => "Contexto:\nEn LENREK, una empresa especializada en la gestión de flujos hospitalarios y sistemas de información de salud, participo en el desarrollo y optimización de aplicaciones críticas utilizadas para la gestión del transporte de pacientes, la planificación de citas y la integración de datos HL7. Mi rol combina desarrollo backend, integración de sistemas, optimización de la experiencia del usuario y participación en la evolución técnica de las aplicaciones.\n\nPrincipales misiones:\n- Desarrollo y mantenimiento de aplicaciones Java para el procesamiento de mensajes HL7 (admisiones, traslados, altas, citas) y gestión de flujos hospitalarios.\n- Diseño y optimización de módulos para el seguimiento de transporte de pacientes, incluyendo planificación, armado y funciones de regulación.\n- Integración y sincronización de datos de varios sistemas hospitalarios.\n- Desarrollo de interfaces de usuario interactivas con Vaadin para visualizar y gestionar transportes e información de pacientes.\n- Participación en la mejora continua de los procesos de desarrollo: refactorización, modularización de componentes, optimización del rendimiento.\n- Colaboración con equipos funcionales para comprender las necesidades de los usuarios y traducirlas en funcionalidades técnicas sólidas.\n- Participación en el mantenimiento de bases de datos y operaciones de diagnóstico.",
                ],
                'competencies' => [
                    'fr' => "Java, JavaScript, Vaadin, SQL, Oracle, PostgreSQL, HL7, SVN, Ant, Maven, Quartz, Hibernate, JPA, Wildfly, Travail d'équipe",
                    'en' => "Java, JavaScript, Vaadin, SQL, Oracle, PostgreSQL, HL7, SVN, Ant, Maven, Quartz, Hibernate, JPA, Wildfly, Team working",
                    'es' => "Java, JavaScript, Vaadin, SQL, Oracle, PostgreSQL, HL7, SVN, Ant, Maven, Quartz, Hibernate, JPA, Wildfly, Trabajo en equipo",
                ],
            ],
            [
                'title' => [
                    'fr' => 'Vendeur Polyvalent',
                    'en' => 'Versatile Salesperson',
                    'es' => 'Vendedor Polivalente',
                ],
                'type' => [
                    'fr' => 'Etudiant',
                    'en' => 'Student',
                    'es' => 'Estudiante',
                ],
                'start_date' => '2021-08-01',
                'end_date' => '2024-08-01',
                'company' => [
                    'fr' => 'Brico Dépôt',
                    'en' => 'Brico Dépôt',
                    'es' => 'Brico Dépôt',
                ],
                'location' => [
                    'fr' => 'Faches-Thumesnil',
                    'en' => 'Faches-Thumesnil',
                    'es' => 'Faches-Thumesnil',
                ],
                'description' => [
                    'fr' => "Vendeur et conseiller dans le secteur électricité en job étudiant à temps partiel (15h/semaine). Accueil des clients, conseil sur les produits électriques, gestion des stocks et mise en rayon.",
                    'en' => "Salesperson and advisor in the electrical sector during a part-time student job (15h/week). Welcoming customers, advising on electrical products, managing stock, and shelving.",
                    'es' => "Vendedor y asesor en el sector eléctrico durante un trabajo estudiantil a tiempo parcial (15h/semana). Atención a clientes, asesoramiento sobre productos eléctricos, gestión de stock y colocación en estanterías.",
                ],

                'competencies' => [
                    'fr' => "Vente, Conseil client, Électricité, Gestion de stock, Mise en rayon, Travail d'équipe",
                    'en' => "Sales, Customer advice, Electricity, Stock management, Shelving, Team working",
                    'es' => "Ventas, Asesoramiento al cliente, Electricidad, Gestión de stock, Colocación en estanterías, Trabajo en equipo",
                ],
            ],
            [
                'title' => [
                    'fr' => 'Agent Contractuel',
                    'en' => 'Contract Worker',
                    'es' => 'Agente Contratado',
                ],
                'type' => [
                    'fr' => 'Intérim',
                    'en' => 'Temporary Worker',
                    'es' => 'Trabajador Temporal',
                ],
                'start_date' => '2020-06-01',
                'end_date' => '2021-06-01',
                'company' => [
                    'fr' => 'QualiService',
                    'en' => 'QualiService',
                    'es' => 'QualiService',
                ],
                'location' => [
                    'fr' => 'Cambrai',
                    'en' => 'Cambrai',
                    'es' => 'Cambrai',
                ],
                'description' => [
                    'fr' => "Travail en manutention et logistique : préparation de commandes, mise en boîte, installation de PLV, et autres tâches liées à la chaîne de production et à l'organisation des stocks.",
                    'en' => "Handling and logistics work: order preparation, packing, setting up point-of-sale displays (PLV), and other tasks related to the production line and stock organization.",
                    'es' => "Trabajo en manutención y logística: preparación de pedidos, embalaje, instalación de material publicitario en punto de venta (PLV) y otras tareas relacionadas con la cadena de producción y organización del stock.",
                ],

                'competencies' => [
                    'fr' => "Manutention, Logistique, Préparation de commandes, Mise en boîte, PLV, Organisation, Travail d'équipe",
                    'en' => "Handling, Logistics, Order preparation, Packing, POS displays (PLV), Organization, Team working",
                    'es' => "Manutención, Logística, Preparación de pedidos, Embalaje, Material publicitario en punto de venta (PLV), Organización, Trabajo en equipo",
                ],
            ]
        ]);
    }
}
