<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarjetas>
 */
class TarjetasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numero_tarjeta' =>fake()->randomNumber(8).fake()->randomNumber(8),
            'fecha_vencimiento' => fake()->numberBetween(2022, 2045).'-'.fake()->numberBetween(1, 12).'-'.fake()->numberBetween(1, 31),
            'cvv' => fake()->randomNumber(3),
            'id_users' => fake()->randomElement(User::all())['id']
        ];
    }
}
