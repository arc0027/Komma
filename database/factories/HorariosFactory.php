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
        $horas = ['13:30', '13:45', '14:00', '14:15', '14:30', '14:45', '15:00', '15:15', '15:30','15:45','16:00','20:30', '20:45', '21:00', '21:15','21:30', '21:45', '22:00', '22:15', '22:30', '22:45', '23:00', '23:15', '23:30'];
        return [
            'fecha' => fake()->dateTimeBetween('now', '+30 days')->format('Y-m-d'),
            'hora' => fake()->randomElement($horas),
            'estados' => "Disponible",
        ];
    }
}
