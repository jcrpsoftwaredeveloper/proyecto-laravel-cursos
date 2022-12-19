<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perfil>
 */
class PerfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->word(),
            'apellido1'=>$this->faker->word(),
            'apellido2'=>$this->faker->word(),
            'observaciones'=>$this->faker->sentence(),
            'direccion'=>$this->faker->sentence(),
            'telefono'=>666222111,
            'user_id'=>1 //ESTE CAMPO ES ÚNICO TODO
        ];
    }
}
