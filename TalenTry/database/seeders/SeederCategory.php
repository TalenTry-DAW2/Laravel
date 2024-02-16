<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numeroAleatorio = random_int(0,100);
        DB::table('Category')->insert([
            'CategoryID' => $numeroAleatorio,
            'CategoryName' => str::random(10),
        ]);
    }
}
