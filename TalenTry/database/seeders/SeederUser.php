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
        for ($i=0; $i < 10; $i++) { 
            $numero_aleatorio = mt_rand(100000000, 999999999);
            DB::table('Users')->insert([
                'DNI' => str::random(9),
                'name' => str::random(10),
                'password' => str::random(10),
                'email' => str::random(10) . '@test.com',
                'type' => 'Usuario',
                'phone' => $numero_aleatorio,
            ]);
        }

    }
}
