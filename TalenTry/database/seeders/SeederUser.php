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
        $numeroAleatorio = random_int(0,100);
        $numeroAleatorio2 = random_int(0,100);
        DB::table('QA')->insert([
            'UserID' => $numeroAleatorio,
            'DNI' => '12345678K',
            'name' => str::random(10),
            'password' => str::random(10),
            'email' => 'test@test.com',
            'type' => 'Usuario',
            'phone' => 69420911,
            'visbility' => true,
        ]);
    }
}
