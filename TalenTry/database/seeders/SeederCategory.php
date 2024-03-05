<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Category')->insert([
            'CategoryName' => str::random(10),
        ]);
    }
}
