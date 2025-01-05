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
                'title' => 'Vendeur Polyvalent',
                'type' => 'Etudiant',
                'start_date' => '2021-08-01',
                'end_date' => '2024-08-01',
                'company' => 'Brico Dépôt',
                'location' => 'Faches-Thumesnil',
            ],
            [
                'title' => 'Agent Contractuel',
                'type' => 'Intérim',
                'start_date' => '2020-06-01',
                'end_date' => '2021-06-01',
                'company' => 'QualiService',
                'location' => 'Cambrai',
            ],
        ]);
    }
}
