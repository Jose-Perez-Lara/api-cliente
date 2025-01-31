<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->name();
        $email = $this->faker->email();
        $edad = $this->faker->randomNumber(2);
        return [
            'nombre' => $nombre,
            'email' => $email,
            'edad' => $edad
        ];
    }
}
