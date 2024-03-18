<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederQuestion extends Seeder
{
    /**
     * Run the database seeds.
     */   
    public function run(): void
    {
        $preguntas = array(
            "¿Qué es un array en PHP y cómo se define?",
            "¿Cuál es la diferencia entre un array asociativo y un array indexado en PHP?",
            "¿Cómo se accede a un elemento específico dentro de un array en PHP?",
            "¿Puedes explicar la función array_push() en PHP y proporcionar un ejemplo de su uso?",
            "¿Qué métodos existen para recorrer un array en PHP?",
            "¿Cómo se ordena un array en PHP según sus valores o claves?",
            "¿Qué es la función array_merge() en PHP y cuál es su propósito?",
            "¿Cuál es la diferencia entre la función array_key_exists() y isset() en PHP?",
            "¿Cómo se elimina un elemento específico de un array en PHP?",
            "¿Puedes explicar cómo funciona la función array_unique() en PHP y proporcionar un ejemplo de su uso?"
        ); 
        for ($i=0; $i < count ($preguntas); $i++) {
            $numeroAleatorio2 = random_int(1,10);
            DB::table('Question')->insert([
                'question' => $preguntas[$i],
                'CategoryID' => $numeroAleatorio2,
            ]);
        }

    }
}
