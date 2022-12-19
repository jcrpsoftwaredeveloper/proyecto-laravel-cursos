<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria;
        $categoria->ref = "SPB001";
        $categoria->titulo = "Introduccion a Spring Boot";
        $categoria->descripcion = "Controllers, Hibernate/JPA, etc";
        $categoria->save();
    }
}
