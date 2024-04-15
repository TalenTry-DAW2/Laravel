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
                'name' => 'EmpresaGenerica1',
                'NIF' => '123456789D',
                'address' => 'MiKasa 2',
                'UserID' => '2',
            ]);

            DB::table('Company')->insert([
                'name' => 'EmpresaGenerica2',
                'NIF' => '987654321Y',
                'address' => 'Reino Champiñón',
                'UserID' => '2',
            ]);

            DB::table('Company')->insert([
                'name' => 'EmpresaGenerica3',
                'NIF' => '748362746H',
                'address' => 'Ciudad Gótica',
                'UserID' => '2',    
            ]);
        }
    }
}
