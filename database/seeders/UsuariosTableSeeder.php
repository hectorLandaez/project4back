<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Inserta 5 registros aleatorios en la tabla "usuarios"
        for ($i = 0; $i < 5; $i++) {
            DB::table('usuarios')->insert([
                'idrol' => 2,
                'clave' => bcrypt($faker->password),
                'habilitado' => 'si',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        DB::table('usuarios')->insert([
            'idrol' => 1,
            'idpersona' => 1,
            'created_at' => now(),
            'nombreDeUsuario' => null,
            'clave' =>'admin',
            'email' => 'admin',
            'habilitado' => 'si',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
