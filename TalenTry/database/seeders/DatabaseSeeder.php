<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SeederUser::class);
        $this->call(SeederCategory::class);
        $this->call(SeederQuestion::class);
        $this->call(SeederRecord::class);

        $this->call(SeederQA::class);



        $this->call(SeederCompany::class);
        //$this->call(SeederShare::class);
        $this->call(SeederAnswer::class);
    }
}
