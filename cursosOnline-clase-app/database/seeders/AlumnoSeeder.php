<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumno = new Alumno();
        $alumno->user_id = 1;
        $alumno->created_at = now();
        $alumno->updated_at = now();
        $alumno->save();
    }
}
