<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederQuestion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numeroAleatorio = random_int(0,10);
        $numeroAleatorio2 = random_int(0,10);
        DB::table('Question')->insert([
            'question' => $numeroAleatorio,
            'CategoryID' => $numeroAleatorio2,
        ]);
    }
}
