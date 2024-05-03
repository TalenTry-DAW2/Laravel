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
                'name' => 'Tecnologías Avanzadas S.A.',
                'NIF' => 'ES12345678A',
                'address' => 'Calle Mayor, 10, Madrid',
                'UserID' => '2',    
            ]);
            
            DB::table('Company')->insert([
                'name' => 'Productos Ecológicos Verdes S.L.',
                'NIF' => 'ES87654321B',
                'address' => 'Avenida del Bosque, 25, Barcelona',
                'UserID' => '3',    
            ]);
            
            DB::table('Company')->insert([
                'name' => 'Grupo Logístico Global S.L.',
                'NIF' => 'ES56789012C',
                'address' => 'Plaza Central, 7, Valencia',
                'UserID' => '4',    
            ]);
        }
    }
}
