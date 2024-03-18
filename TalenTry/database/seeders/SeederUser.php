<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('Users')->insert([
                'DNI' => '12345678A',
                'name' => 'TestUsuario',
                'password' => '123456789',
                'email' => 'TestUsuario@test.com',
                'type' => 'Usuario',
                'phone' => 69420123,
                'visibility' => false,
            ]);
            DB::table('Users')->insert([
                'DNI' => '12345678B',
                'name' => 'TestAdministrador',
                'password' => '987654321',
                'email' => 'TestAdministrador@test.com',
                'type' => 'Administrador',
                'visibility' => false,
            ]);


    }
}
