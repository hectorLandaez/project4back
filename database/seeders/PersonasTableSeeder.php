<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $nombreDeUsuario = $faker->unique()->userName;
            $email = $faker->unique()->email();

            DB::table('personas')->insert([
                'primernombre' => $faker->firstName,
                'segundonombre' => $faker->firstName,
                'primerapellido' => $faker->lastName,
                'segundoapellido' => $faker->lastName,
                'email' =>  $email,
                'nombreDeUsuario' => $nombreDeUsuario,
                'habilitado' => 'si',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Recupera el valor del nombre de usuario después de insertar
            $nombreDeUsuario = DB::table('personas')->where('nombreDeUsuario', $nombreDeUsuario)->value('nombreDeUsuario');
            
            $email = DB::table('personas')->where('nombreDeUsuario', $nombreDeUsuario)->value('email');

            $idPersona = DB::table('personas')->where('nombreDeUsuario', $nombreDeUsuario)->value('id');

            DB::table('users')->insert([
                'idrol' => 2,
                'idpersona' => $idPersona,
                'name' => $nombreDeUsuario,
                'password' => $faker->password,
                'email' => $email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('users')->insert([
            'idrol' => 1,
            'idpersona' => 1,
            'name' => 'admin',
            'password' =>123456,
            'email' => 'admin@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
