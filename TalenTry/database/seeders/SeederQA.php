<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str
use Illuminate\Support\Carbon;

class SeederQA extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numeroAleatorio = random_int(1,10);
        $numeroAleatorio2 = random_int(1,10);
        $numeroAleatorio3 = random_int(1,10);
        $startDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
        $finishDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
        DB::table('QA')->insert([
            'RecordID' => $numeroAleatorio,
            'QuestionID' => $numeroAleatorio2,
            'Answer' => $numeroAleatorio3,
            'QuestionPoints'=>$numeroAleatorio3 * $numeroAleatorio2/$numeroAleatorio,
            'StartDate' => $startDate,
            'FinishDate'=> $finishDate,
        ]);
    }
}
