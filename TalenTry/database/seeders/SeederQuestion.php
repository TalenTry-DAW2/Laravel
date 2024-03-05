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
        $numeroAleatorio = random_int(0,100);
        DB::table('Question')->insert([
            'QuestionID' => $numeroAleatorio,
            'question' => 1,
            'CategoryID' => 1,
        ]);
    }
}
