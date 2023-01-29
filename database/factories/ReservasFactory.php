<?php

namespace Database\Factories;

use App\Models\Horarios;
use App\Models\User;
use App\Models\Menus;
use App\Models\Mesas;
use App\Models\Invitados;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservas>
 */
class ReservasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_users' => fake()->randomElement(User::all())['id'],
            'id_menus' => fake()->randomElement(Menus::all())['id'],
            'id_mesas' => fake()->randomElement(Mesas::all())['id'],
            'fecha_reservas' =>  fake()->randomElement(Horarios::all())['id'],
            'numero_tarjetas' => fake()->randomNumber(8).fake()->randomNumber(8),
            'numero_personas' => fake()->numberBetween(4, 8),
        ];
    }
}
