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
                'title' => 'BUT Informatique',
                'type' => 'Etudiant',
                'start_date' => '2023-09-01',
                'end_date' => '2026-07-01',
                'institution' => 'IUT de Lens',
                'location' => 'Lens',
            ],
            [
                'title' => 'BAC Général S SI Phy/Chimie',
                'type' => 'Lycéen',
                'start_date' => '2018-07-01',
                'end_date' => '',
                'institution' => 'Lycée Paul Duez',
                'location' => 'Cambrai',
            ],
        ]);
    }
}
