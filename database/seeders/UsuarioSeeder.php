<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Usuario;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<10; $i++){
            $usuario = new Usuario();
            $usuario->nombre = $faker->firstNameMale;
            $usuario->email = $faker->email;
            $usuario->save();
        }
    }
}
