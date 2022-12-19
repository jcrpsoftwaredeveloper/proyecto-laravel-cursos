<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ref'=>$this->faker->word,
            'titulo'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraphs(2, true),
            'precio'=>100,
            'duracion'=>50,
            'horario'=>'diurno',
            'imagen'=>$this->faker->imageUrl(800,600),
            'activo'=>$this->faker->boolean,
            'categoria_id' => 1,
            'profesor_id' => 1
        ];
    }
}
