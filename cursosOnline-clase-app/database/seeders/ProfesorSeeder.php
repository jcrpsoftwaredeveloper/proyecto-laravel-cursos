<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Categoria;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesor = new Profesor();
        $profesor->sueldo_hora = 50;
        $profesor->user_id = 1;
        $profesor->created_at = now();
        $profesor->updated_at = now();
        $profesor->save();
    }
}
