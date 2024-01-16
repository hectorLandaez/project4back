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
                'idpersona' => $faker->unique()->numberBetween(1, 100),
                'primernombre' => $faker->firstName,
                'segundonombre' => $faker->firstName,
                'primerapellido' => $faker->lastName,
                'segundoapellido' => $faker->lastName,
                'email' =>  $email,
                'nombreDeUsuario' => $nombreDeUsuario,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Recupera el valor del nombre de usuario después de insertar
            $nombreDeUsuario = DB::table('personas')->where('nombreDeUsuario', $nombreDeUsuario)->value('nombreDeUsuario');
            
            $email = DB::table('personas')->where('nombreDeUsuario', $nombreDeUsuario)->value('email');

            $idPersona = DB::table('personas')->where('nombreDeUsuario', $nombreDeUsuario)->value('idpersona');

            DB::table('usuarios')->insert([
                'idrol' => 2,
                'idpersona' => $idPersona,
                'nombreDeUsuario' => $nombreDeUsuario,
                'password' => $faker->password,
                'email' => $email,
                'habilitado' => 'si',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('usuarios')->insert([
            'idrol' => 1,
            'idpersona' => 1,
            'nombreDeUsuario' => 'admin',
            'clave' =>'admin',
            'email' => 'admin',
            'habilitado' => 'si',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
