<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederRecord extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $numeroAleatorio = random_int(0,100);
            $numeroAleatorio2 = random_int(0,100);
            DB::table('QA')->insert([
                'RecordID' => $numeroAleatorio,
                'UserID' => 1,
                'score' => $numeroAleatorio2,
                'StartDate' => "1-1-2024",
                'FinishDate' => "1-1-2024",
            ]);
        }
    }
}
