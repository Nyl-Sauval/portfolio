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
            ]
        ]);
    }
}
