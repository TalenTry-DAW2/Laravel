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
            if (!$questions) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$questions], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }

    //obtiene la pregunta seleccionada
    public function show($id)
    {
        try {
            $question = ModelQuestion::where('QuestionID', $id)->get();
            if (!$question) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$question], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }

    //obtiene todas las preguntas de una categoria en concreto
    public function showQuestionsCategory(Request $request)
    {
        try{
            $questions = ModelQuestion::where('CategoryID', $request->id)->get();
           
            if (!$questions) {
                return response()->json(['success' => false], 404);
            }
            
            return response()->json([$questions], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
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
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }


    //crea una pregunta para la categoria seleccionada
    public function create(Request $request)
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
                //guarda en la base de datos
            if ($question->save()) {
                DB::commit();
                return response()->json(['success' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }

    //actualiza la pregunta
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            //valida que esten los datos necesarios
            $request->validate([
                'question' => 'required',
                'CategoryID' => 'required',
            ]);

            $question = ModelQuestion::findOrFail($id);
            if (!$question) {
                return response()->json(['success' => false], 404);
            }
            //crea una pregunta y la guarda en la base de datos
            $question->update([
                'question' => $request->input('question'),
                'CategoryID' => $request->input('CategoryID'),
            ]);
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }

    //elimina la pregunta seleccionada
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            
            $question = ModelQuestion::findOrFail($id);
            if (!$question) {
                return response()->json(['success' => false], 404);
            }
            $question->delete();
            
            DB::commit();
            
            return response()->json(['success' => true],200);
        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json(['success' => false, 'error'=> $e->getMessage()],500);
        }
    }  
}
