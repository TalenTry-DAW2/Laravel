<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str; 
use Illuminate\Support\Carbon;

class SeederRecord extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1_id = DB::table('users')->where('DNI', '12345678A')->value('UserID');
        $user2_id = DB::table('users')->where('DNI', '12345678B')->value('UserID');

        for ($i = 0; $i < 5; $i++) {
            $numeroAleatorio = random_int(1, 10);
            $startDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
            $finishDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
            DB::table('Record')->insert([
                'UserID' => $user1_id,
                'CategoryID' => 2,
                'score' => $numeroAleatorio,
                'StartDate' => $startDate,
                'FinishDate' => $finishDate,
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
            $numeroAleatorio = random_int(1, 10);
            $startDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
            $finishDate = Carbon::createFromFormat('m/d/Y', '1/1/2024')->format('Y-m-d');
            DB::table('Record')->insert([
                'UserID' => $user2_id,
                'CategoryID' => 2,
                'score' => $numeroAleatorio,
                'StartDate' => $startDate,
                'FinishDate' => $finishDate,
            ]);
        }
    }
}