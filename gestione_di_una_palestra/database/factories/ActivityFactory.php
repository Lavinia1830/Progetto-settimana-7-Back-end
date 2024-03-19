<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome_activites=['Allenamento con i pesi', 'Cardio fitness', 'Yoga', 'Pilates', 'Zumba', 'Spinning', 'Boxe fitness',
                        'Bodyweight training', 'Allenamento funzionale', 'Stretching', 'HIIT (High-Intensity Interval Training)',
                        'Aquafitness', 'Powerlifting', 'CrossFit', 'Tai chi', 'Barre fitness', 'Kickboxing', 'Allenamento per la forza e la resistenza',
                        'Danza aerobica', 'Allenamento TRX'];
        $livello = ['Principiante', 'Intermedio', 'Avanzato'];
        return [
            'nome' => fake()->randomElement($nome_activites),
            'descrizione' => fake()->text(200),
            'data' => date('Y-m-d', strtotime('+'.mt_rand(0, 60).' days')), // Genera una data casuale tra oggi e 60 giorni nel futuro
            'orario' => fake()->time(),
            'durata' => fake()->numberBetween(30, 90),
            'livello' => fake()->randomElement($livello),
        ];
    }
}
