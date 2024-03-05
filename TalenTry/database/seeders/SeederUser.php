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

        DB::table('QA')->insert([
            'DNI' => str::random(9),
            'name' => str::random(10),
            'password' => str::random(10),
            'email' => 'test@test.com',
            'type' => 'Usuario',
            'phone' => 69420911,
            'visbility' => true,
        ]);
    }
}
