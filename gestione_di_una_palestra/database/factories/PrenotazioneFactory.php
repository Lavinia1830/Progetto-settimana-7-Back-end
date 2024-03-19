<?php

namespace Database\Factories;

use App\Models\Corsi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prenotazione>
 */
class PrenotazioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'corso_id' => Corsi::inRandomOrder()->first()->id,
            'stato' => $this->faker->randomElement(['accettato', 'respinto', 'in_attesa']),
        ];
    }
}
