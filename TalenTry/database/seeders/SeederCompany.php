<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederCompany extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('Users')->insert([
                'DNI' => '12345678K',
                'name' => 'TestEmpresa',
                'password' => '456789123',
                'email' => 'TestEmpresa@test.com',
                'type' => 'Empresa',
                'visibility' => false,
            ]);
        }
    }
}
