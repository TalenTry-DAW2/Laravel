<?php

namespace App\Http\Controllers;

use App\Models\ModelQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerQuestion extends Controller
{
    //devuelve todas las preguntas
    public function index()
    {
        try {
            $questions = ModelQuestion::orderBy('questionID')->get();
            return response()->json([$questions], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las preguntas: ' . $e], 500);
        }
    }

    //obtiene la pregunta seleccionada
    public function show($id)
    {
        try {
            $pregunta = ModelQuestion::where('QuestionID', $id)->get();
            return response()->json([$pregunta], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la pregunta: ' . $e], 500);
        }
    }

    //obtiene todas las preguntas de una categoria en concreto
    public function showQuestionsCategory($id)
    {
        try {
            $preguntas = ModelQuestion::where('CategoryID', $id)->get();
            return response()->json([$preguntas], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las preguntas: ' . $e], 500);
        }
    }

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


    //crea una pregunta para la categoria seleccionada
    public function create()
    {
        try {
            $request->validate([
                'question' => 'required',
                'CategoryID' => 'required',
            ]);
            DB::beginTransaction();
            $question = new ModelQuestion([
                'question' => $request->input('question'),
                'CategoryID' => $request->input('CategoryID'),
            ]);
                //save in database
            if ($question->save()) {
                DB::commit();
                return response()->json(['saved' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al guardar la pregunta: ' . $e], 500);
        }
    }

    //actualiza la pregunta
    public function update($id)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'question' => 'required',
                'CategoryID' => 'required',
            ]);

            // Validation logic goes here
            $question = ModelQuestion::findOrFail($id);

            $question->update([
                'question' => $request->input('question'),
                'CategoryID' => $request->input('CategoryID'),
            ]);
            DB::commit();
            return response()->json(['updated' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al actualizar la pregunta: ' . $e], 500);
        }
    }

    //elimina la pregunta seleccionada
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            
            $question = ModelQuestion::findOrFail($id);
            $question->delete();
            
            DB::commit();
            
            return response()->json(['success' => true, 'message' => 'Pregunta eliminada correctamente'],200);
        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json(['success' => false, 'message' => 'No se pudo eliminar. '.$e],500);
        }
    }  
}
