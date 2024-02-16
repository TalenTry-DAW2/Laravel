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
        $numeroAleatorio = random_int(0,100);
        DB::table('QA')->insert([
            'QAID' => $numeroAleatorio,
            'RecordID' => $numeroAleatorio,
            'AnswerID' => $numeroAleatorio,
            'StartDate' => "1-1-2024",
        ]);
    }
}
