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
        $pHash = bcrypt('123456789');
            DB::table('Users')->insert([
                'DNI' => '12345678A',
                'name' => 'TestUsuario',
                'password' => $pHash,
                'email' => 'usuario@gmail.com',
                'type' => 'Usuario',
                'phone' => 69420123,
                'photo' => '',
                'visibility' => false,
            ]);
            DB::table('Users')->insert([
                'DNI' => '12345678B',
                'name' => 'TestAdministrador',
                'password' => $pHash,
                'email' => 'adminTalenTry@gmail.com',
                'type' => 'Administrador',
                'phone' => 69420124,
                'photo' => '',
                'visibility' => false,
            ]);
    }
}
