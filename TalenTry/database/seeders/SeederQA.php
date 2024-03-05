<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederQA extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numeroAleatorio = random_int(0,10);
        $numeroAleatorio2 = random_int(0,10);
        DB::table('QA')->insert([
            'RecordID' => $numeroAleatorio,
            'AnswerID' => $numeroAleatorio2,
            'StartDate' => "1-1-2024",
        ]);
    }
}
