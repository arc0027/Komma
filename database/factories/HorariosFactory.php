<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horarios>
 */
class HorariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $horas = ['13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '20:30', '21:00', '21:30', '22:00', '22:30', '23:00', '23:30'];
        return [
            'fecha' => fake()->dateTimeBetween('now', '+30 days')->format('Y-m-d'),
            'hora' => fake()->randomElement($horas),
            'estados' => "Disponible",
        ];
    }
}
