<?php

namespace Database\Factories;

use App\Models\Diploma;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiplomaFactory extends Factory
{
    protected $model = Diploma::class;

    public function definition(): array
    {
        return [
                'title' => $this->faker->jobTitle,
                'type' => $this->faker->randomElement(['Etudiant', 'Lycéen']),
                'start_date' => $this->faker->date,
                'end_date' => $this->faker->date,
                'institution' => $this->faker->company,
                'location' => $this->faker->city,
        ];
    }
}
