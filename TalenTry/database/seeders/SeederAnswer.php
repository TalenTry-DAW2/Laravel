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
            $numeroAleatorio = random_int(0,100);
            $numeroAleatorio2 = random_int(0,100);
            $numeroAleatoriod = random_int(0,100)/10;
            DB::table('Answer')->insert([
                'AnswerID' => $numeroAleatorio,
                'answer' => str::random(10),
                'QuestionID' => $numeroAleatorio2,
                'QuestionPoints' => $numeroAleatoriod,
            ]);
        }
    }
}
