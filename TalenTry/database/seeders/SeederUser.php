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
                'name' => 'TestEmpresa',
                'password' => $pHash,
                'email' => 'empresa1@gmail.com',
                'type' => 'Empresa',
                'phone' => 69420112,
                'photo' => '',
                'visibility' => false,
            ]);
            DB::table('Users')->insert([
                'DNI' => '12345678C',
                'name' => 'TestEmpresa',
                'password' => $pHash,
                'email' => 'empresa2@gmail.com',
                'type' => 'Empresa',
                'phone' => 69420122,
                'photo' => '',
                'visibility' => false,
            ]);
            DB::table('Users')->insert([
                'DNI' => '12345678D',
                'name' => 'TestEmpresa',
                'password' => $pHash,
                'email' => 'empresa3@gmail.com',
                'type' => 'Empresa',
                'phone' => 69420132,
                'photo' => '',
                'visibility' => false,
            ]);
            DB::table('Users')->insert([
                'DNI' => '12345678E',
                'name' => 'TestAdministrador',
                'password' => $pHash,
                'email' => 'admin@talentry.com',
                'type' => 'Administrador',
                'phone' => 69420124,
                'photo' => '',
                'visibility' => false,
            ]);
    }
}
