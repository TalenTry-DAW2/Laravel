<?php

namespace App\Http\Controllers;

use App\Models\ModelQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerQuestion extends Controller
{
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
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
        }
    }
}
