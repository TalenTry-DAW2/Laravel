<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederAnswer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $respuestas = array(
            "En PHP, un array es una estructura de datos que puede contener una colección de elementos, cada uno identificado por un índice o clave. Se define utilizando la función array() o con la sintaxis de corchetes [].",
            "Un array indexado en PHP utiliza índices numéricos consecutivos para acceder a sus elementos, mientras que un array asociativo utiliza claves personalizadas para acceder a sus elementos.",
            "Puedes acceder a un elemento específico dentro de un array en PHP utilizando su índice (para arrays indexados) o su clave (para arrays asociativos) dentro de corchetes [].",
            "La función array_push() en PHP se utiliza para agregar uno o más elementos al final de un array.",
            "Algunos métodos para recorrer un array en PHP incluyen el uso de bucles foreach, for, while, y las funciones array_map(), array_walk(), etc.",
            "Puedes ordenar un array en PHP utilizando las funciones sort(), rsort(), asort(), arsort(), ksort(), krsort(), entre otras, dependiendo de si deseas ordenarlo por valores o claves y de forma ascendente o descendente.",
            "La función array_merge() en PHP se utiliza para combinar dos o más arrays en uno solo.",
            "array_key_exists() verifica si una clave específica existe en un array, mientras que isset() verifica si una variable está definida y no es nula.",
            "Puedes eliminar un elemento específico de un array en PHP utilizando la función unset() pasando el índice o la clave del elemento que deseas eliminar.",
            "La función array_unique() en PHP elimina valores duplicados de un array y devuelve el array resultante."
        );
        
        for($i =0; $i < count ($respuestas); $i++)
        {
            $numeroAleatorio2 = random_int(1,10);
            $numeroAleatoriod = random_int(1,100)/10;
            DB::table('Answer')->insert([
                'answer' => $respuestas[$i],
                'QuestionID' => $numeroAleatorio2,
                'QuestionPoints' => $numeroAleatoriod,
            ]);
        }
    }
}
