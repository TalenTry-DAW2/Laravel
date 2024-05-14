<?php

namespace App\Http\Controllers;

use App\Models\ModelAnswer;
use App\Models\ModelQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerAnswer extends Controller
{

    //devuelve TODAS las respuestas ordenadas por pregunta en orden de creacion
    public function index()
    {
        try {
            $answers = ModelAnswer::orderBy('questionID')->get();
            if (!$answers) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$answers], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //crea una respuesta para la pregunta seleccionada
    public function create(Request $request)
    {
        try {
            //valida los datos
            $request->validate([
                'answer' => 'required',
                'QuestionID' => 'required',
                'QuestionPoints' => 'required',
            ]);
            DB::beginTransaction();
            //crea un objeto "answer"
            $answer = new ModelAnswer([
                'answer' => $request->input('answer'),
                'QuestionID' => $request->input('QuestionID'),
                'QuestionPoints' => $request->input('QuestionPoints'),
            ]);
            //si se guarda correctamente hace commit
            if ($answer->save()) {
                DB::commit();
                return response()->json(['success' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //actualiza la respuesta seleccionada
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            //valida los campos
            $request->validate([
                'answer' => 'required',
                'QuestionID' => 'required',
                'QuestionPoints' => 'required',
            ]);

            //busca la respuesta introducida
            $answer = ModelAnswer::findOrFail($id);
            if (!$answer) {
                return response()->json(['success' => false], 404);
            }
            // actualiza la respuesta en la base de datos
            $answer->update([
                'answer' => $request->input('answer'),
                'QuestionID' => $request->input('QuestionID'),
                'QuestionPoints' => $request->input('QuestionPoints'),
            ]);
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //elimina la respuesta seleccionada
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            //busca la respuesta seleccionada
            $answer = ModelAnswer::findOrFail($id);
            if (!$answer) {
                return response()->json(['success' => false], 404);
            }
            //elimina la respuesta
            $answer->delete();

            DB::commit();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //Crea una pregunta y sus respuestas
    public function agregarPR(Request $request)
    {
        try {
            DB::beginTransaction();
            //valida los datos recividos
            $request->validate([
                'CategoryID' => 'required',
                'question' => 'required',
                'answers' => 'required|array',
                'answers.*' => 'required|string', // Cada respuesta debe ser una cadena
                'QuestionPoints' => 'required|array',
                'QuestionPoints.*' => 'required|numeric', // Puntuación de cada respuesta
            ]);
            //crea un objeto de "question" y lo guarda en la base de datos
            $question = new ModelQuestion([
                'question' => $request->input('question'),
                'CategoryID' => $request->input('CategoryID'),
            ]);
            $question->save();
            //$i es un contador para las respuestas
            $i = 0;
            foreach ($request->input('answers') as $answer) {
                $resp = new ModelAnswer([
                    'QuestionID' => $question->id,
                    'answer' => $request->input('answers')[$i],
                    'QuestionPoints' => $request->input('QuestionPoints')[$i],
                ]);
                $i++;
                //guarda la respuesta creada
                $resp->save();
            }

            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

//------------------------------------------------------------------------------
    //obtiene las respuestas a una pregunta, solo para funciones internas, no api!!!
    public function showQuestion($id)
    {
        try {
            $respuestas = ModelAnswer::where('QuestionID', $id)->get();
            return $respuestas;
        } catch (\Exception $e) {
            return "Error";
        }
    }
}
