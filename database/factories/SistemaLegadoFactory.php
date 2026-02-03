<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SistemaLegado>
 */
class SistemaLegadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->company() . ' System',
            'linguagem' => fake()->randomElement(['Php', 'Js', 'Ts', 'Ruby', 'C#']),
            'status' => fake()->randomElement(['ativo', 'em_manutencao', 'descontinuado']),
            'descricao' => fake()->sentence(10),
        ];
    }
}
