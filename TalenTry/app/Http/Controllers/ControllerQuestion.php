<?php

namespace App\Http\Controllers;

use App\Models\ModelQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerQuestion extends Controller
{

    //carga n numero de preguntas con sus respuestas de la categoria especificada y tantas como se hayan indicado.
    public function showCategory(Request $request)
    {
        try {
            $id = $request->get('id');
            $cantidad = $request->get('cantidad');
            $preguntas = ModelQuestion::where('CategoryID', $id)->inRandomOrder()->take($cantidad)->get();
            $respuesta = new ControllerAnswer();
            $respuestas = [];
            $i = 0;
            foreach ($preguntas as $pregunta) {
                $respuestas[$i] = [
                    'pregunta' => $pregunta,
                    'respuestas' => $respuesta->showQuestion($pregunta->QuestionID)
                ];
                $i++;
            }
            return response()->json($respuestas, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $e], 500);
        }
    }
}
