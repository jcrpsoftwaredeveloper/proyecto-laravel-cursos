<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ref'=>$this->faker->unique()->word,
            'titulo'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraphs(2, true),
            'imagen'=>$this->faker->imageUrl(800,600),
            'activo'=>$this->faker->boolean
        ];
    }
}
