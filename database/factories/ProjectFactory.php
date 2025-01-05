<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'summary' => $this->faker->paragraph,
            'description' => $this->faker->text,
            'images' => [$this->faker->imageUrl()], // Ensure this is an array
            'complexity' => $this->faker->numberBetween(1, 5),
            'technologies' => $this->faker->words(3), // Renvoie un tableau de 3 mots directement
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->optional()->date,
            'project_link' => $this->faker->url,
            'status' => $this->faker->randomElement(['ongoing', 'completed']),
            'type' => $this->faker->randomElement(['web', 'mobile', 'desktop']),
            'estimated_duration' => $this->faker->numberBetween(50, 500),
            'visibility' => $this->faker->boolean,
        ];
    }
}
