<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederAnswer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =0; $i<=10; $i++)
        {
            $numeroAleatorio2 = random_int(1,10);
            $numeroAleatoriod = random_int(1,100)/10;
            DB::table('Answer')->insert([
                'answer' => str::random(10),
                'QuestionID' => $numeroAleatorio2,
                'QuestionPoints' => $numeroAleatoriod,
            ]);
        }
    }
}
