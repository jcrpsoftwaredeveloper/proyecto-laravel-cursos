<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alumno;
use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Perfil;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        Categoria::factory(100)->create();

        $this->call(UserSeeder::class);
        User::factory(100)->create();

        $this->call(AlumnoSeeder::class);
        Alumno::factory(100)->create();

        $this->call(ProfesorSeeder::class);
        Profesor::factory(100)->create();

        $this->call(CursoSeeder::class);
        Curso::factory(100)->create();

        $this->call(PerfilSeeder::class);
        Perfil::factory(100)->create();
    }
}
