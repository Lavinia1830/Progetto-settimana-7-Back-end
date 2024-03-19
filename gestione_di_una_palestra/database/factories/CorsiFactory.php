<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corsi>
 */
class CorsiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'totale_partecipanti' => fake()->numberBetween(5, 20), // Assume tra 5 e 20 partecipanti
            'activitie_id' => Activity::get()->random()->id,
        ];
    }
}
