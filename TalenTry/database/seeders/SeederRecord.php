<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str
use Illuminate\Support\Carbon;

class SeederRecord extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            for ($i=0; $i < 10; $i++) { 
                $numeroAleatorio2 = random_int(1,10);
                $startDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
                $finishDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
                DB::table('Record')->insert([
                    'UserID' => 1,
                    'CategoryID'=> 2,
                    'score' => $numeroAleatorio2,
                    'StartDate' => $startDate,
                    'FinishDate' => $finishDate,
                ]);
            }

        }
    }
}
