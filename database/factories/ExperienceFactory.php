<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    protected $model = Experience::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'type' => $this->faker->randomElement(['Etudiant', 'Intérim']),
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'company' => $this->faker->company,
            'location' => $this->faker->city,
        ];
    }
}
