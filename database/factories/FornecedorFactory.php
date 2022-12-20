<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fornecedor;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'uf' => fake()->randomNumber(2),
            'email' => fake()->unique()->safeEmail(),
            'site' => fake()->text(100),
        ];
    }
}
