<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->ref = "SPB001";
        $curso->titulo = "Introduccion a Spring Boot";
        $curso->descripcion = "Controllers, Hibernate/JPA, etc";
        $curso->categoria_id = 1;
        $curso->profesor_id = 1;
        $curso->save();
    }
}
