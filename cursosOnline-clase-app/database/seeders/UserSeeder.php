<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "jose";
        $user->email = "jose@gmail.com";
        $user->password = "castelar";
        $user->activo = true;
        $user->bloqueado = false;
        $user->num_intentos = 3;
        $user->remember_token = "castelar";
        $user->email_verified_at = now();
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
    }
}
