<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederCompany extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('Company')->insert([
                'name' => str::random(10),
                'NIF' => str::random(9),
                'address' => str::random(15),
                'password' => str::random(10),
            ]);
        }
    }
}
