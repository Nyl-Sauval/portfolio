<?php

namespace Database\Seeders;

use App\Models\Diploma;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class DiplomaSeeder extends Seeder
{
    public function run()
    {
        Diploma::factory()->createMany([
            [
                'title' => [
                    'fr' => 'BUT Informatique',
                    'en' => 'Bachelor’s Degree in Computer Science',
                    'es' => 'Grado en Informática',
                ],
                'type' => [
                    'fr' => 'Etudiant',
                    'en' => 'Student',
                    'es' => 'Estudiante',
                ],
                'start_date' => '2023-09-01',
                'end_date' => '2026-07-01',
                'institution' => [
                    'fr' => 'IUT de Lens',
                    'en' => 'IUT de Lens',
                    'es' => 'IUT de Lens',
                ],
                'location' => [
                    'fr' => 'Lens',
                    'en' => 'Lens',
                    'es' => 'Lens',
                ],
            ],
            [
                'title' => [
                    'fr' => 'BAC Général S SI Phy/Chimie',
                    'en' => 'General Baccalaureate S SI Physics/Chemistry',
                    'es' => 'Bachillerato General S SI Física/Química',
                ],
                'type' => [
                    'fr' => 'Lycéen',
                    'en' => 'High School Student',
                    'es' => 'Estudiante de Secundaria',
                ],
                'start_date' => '2018-07-01',
                'end_date' => null,
                'institution' => [
                    'fr' => 'Lycée Paul Duez',
                    'en' => 'Lycée Paul Duez',
                    'es' => 'Lycée Paul Duez',
                ],
                'location' => [
                    'fr' => 'Cambrai',
                    'en' => 'Cambrai',
                    'es' => 'Cambrai',
                ],
            ],
        ]);
    }
}
