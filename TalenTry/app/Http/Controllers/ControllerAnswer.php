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
            $request->validate([
                'answer' => 'required',
                'QuestionID' => 'required',
                'QuestionPoints' => 'required',
            ]);
            DB::beginTransaction();
            $answer = new ModelAnswer([
                'answer' => $request->input('answer'),
                'QuestionID' => $request->input('QuestionID'),
                'QuestionPoints' => $request->input('QuestionPoints'),
            ]);
            //save in database
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
            $request->validate([
                'answer' => 'required',
                'QuestionID' => 'required',
                'QuestionPoints' => 'required',
            ]);

            // Validation logic goes here
            $answer = ModelAnswer::findOrFail($id);
            if (!$answer) {
                return response()->json(['success' => false], 404);
            }
            // Use the update method to update the answer
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

            $answer = ModelAnswer::findOrFail($id);
            if (!$answer) {
                return response()->json(['success' => false], 404);
            }
            $answer->delete();

            DB::commit();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();

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

    public function agregarPR(Request $request)
    {
        try {
            DB::beginTransaction();
        
            $request->validate([
                'question' => 'required',
                'answers' => 'required|array',
                'answers.*.answer' => 'required|string', // Cada respuesta debe ser una cadena
                'answers.*.QuestionPoints' => 'required|numeric', // Puntuación de cada respuesta
                'CategoryID' => 'required',
            ]);
            
            $question = new ModelQuestion([
                'question' => $request->input('question'),
                'CategoryID' => $request->input('CategoryID'),
            ]);
            $question->save();
        
            foreach ($request->input('answers') as $answer) {
                $resp = new ModelAnswer([
                    'QuestionID' => $question->id,
                    'answer' => $answer['answer'],
                    'QuestionPoints' => $answer['QuestionPoints'],
                ]);
        
                $resp->save();
            }
        
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }        
        
    }
}
