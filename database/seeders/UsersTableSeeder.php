<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {

            $email = $faker->unique()->email() ;
            $randomIdPersona = $faker->numberBetween(1, 1000);
            $userName = $faker->unique()->userName;

            $user = User::create([
                'name' => $userName,
                'email' =>  $email,
                'password' => $userName,
                'idrol' => 2,
                'habilitado' => 'si',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
             ]);

            $user->persona()->create([
                'idusuario' => $user->id,
                'idpersona' => $randomIdPersona,
                'nombreDeUsuario' => $user->name,
                'primernombre' => $faker->firstName,
                'segundonombre' => $faker->firstName,
                'primerapellido' => $faker->lastName,
                'segundoapellido' => $faker->lastName,
                'email' =>  $email,
            ]);
        }
    }
}
