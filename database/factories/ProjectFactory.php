<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'title' => 'Cardle',
            'summary' => 'Jeu inspiré de Wordle basé sur des voitures.',
            'description' => 'Cardle est un jeu où les joueurs devinent la marque et le modèle d\'une voiture à partir d\'une image.',
            'images' => ['car1.png'],
            'complexity' => 4,
            'technologies' => ['PHP', 'Laravel', 'TailwindCSS'],
            'start_date' => now()->subMonths(2),
            'end_date' => now(),
            'project_link' => 'https://cardle-game.com',
            'status' => 'completed',
            'type' => 'web',
            'estimated_duration' => 200,
            'visibility' => true,
        ];
    }
}
