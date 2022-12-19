<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Categoria;
use App\Models\Perfil;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil = new Perfil();
        $perfil->nombre = "Jose";
        $perfil->apellido1 = "R";
        $perfil->apellido2 = "P";
        $perfil->observaciones = "Perfil de prueba";
        $perfil->direccion = "Extremadura, Badajoz";
        $perfil->telefono = "666222333";
        $perfil->user_id = 1;
        $perfil->save();
    }
}
