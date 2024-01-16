<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'idrol' => 1,
            'rol' => 'admin',
            'estado' =>'Activo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'idrol' => 2,
            'rol' => 'usuario',
            'estado' =>'Activo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}