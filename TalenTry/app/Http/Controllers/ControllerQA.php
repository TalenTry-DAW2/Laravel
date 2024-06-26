<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelQA;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ControllerQA extends Controller
{
    // devuelve todas las respuestas hechas en entrevistas (funcion de admin!)
    public function index()
    {
        try {
            $QA = ModelQA::all();
            if (!$QA) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$QA], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // muestra las respuestas de una entrevista en concreto.
    public function show($id)
    {
        try {
            //une las QA con sus respectivas preguntas a las que responde
            $QA = DB::table('QA')
                ->join('question', 'QA.QuestionID', '=', 'question.QuestionID')
                ->select('QA.*', 'question.question')
                ->where('QA.RecordID', $id)
                ->get();
            if (!$QA) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$QA], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // guarda la respuesta de la entrevista (1 a la vez).
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $respuestasArray = $request->json()->all();

            // formatea las fechas y guarda las respustas 1 a 1
            foreach ($respuestasArray as $respuestas) {
                $startDate = Carbon::createFromFormat('d-m-Y H:i:s', $respuestas['StartDate'])->format('Y-m-d H:i:s');
                $finishDate = Carbon::createFromFormat('d-m-Y H:i:s', $respuestas['FinishDate'])->format('Y-m-d H:i:s');
                // crea el modelo QA y lo guarda en la base de datos
                $qa = new ModelQA([
                    'RecordID' => $respuestas['RecordID'],
                    'QuestionID' => $respuestas['QuestionID'],
                    'answer' => $respuestas['answer'], 
                    'QuestionPoints' => $respuestas['score'], 
                    'StartDate' => $startDate, 
                    'FinishDate' => $finishDate, 
                ]);

                $qa->save();
            }
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // Actualiza la puntacion / tiempo en una respuesta de entrevista (!funcion de admin!).
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            //formatea las fechas y valida que esten los datos necesarios
            $startDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('StartDate'))->format('Y-m-d H:i:s');
            $request->merge(['StartDate' => $startDate]);
            $finishDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('FinishDate'))->format('Y-m-d H:i:s');
            $request->merge(['FinishDate' => $finishDate]);
            $request->validate([
                'score' => 'required',
                'StartDate' => 'required',
                'FinishDate' => 'required',
            ]);

            $QA = ModelQA::findOrFail($id);
            if (!$QA) {
                return response()->json(['success' => false], 404);
            }
            //actualiza la respuesta en la base de datos
            $QA->update([
                'score' => $request->input('score'),
                'StartDate' => $request->input('StartDate'),
                'FinishDate' => $request->input('FinishDate'),
            ]);
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // elimina la respuesta especifica de la entrevista (!funcion de admin!)(funcion sin api, solo de uso interno!!!).
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $relatedQAs = ModelQA::where('RecordID', $id)->get();
            if (!$relatedQAs) {
                return false;
            }
            // Delete all related QA records
            foreach ($relatedQAs as $relatedQA) {
                $relatedQA->delete();
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }

    //funciones para estadisticas!!--!!--!!--!!(estas funciones no se usan)

    // muestra todas las respuestas de una pregunta en concreto (funcion de empresa!).!!!!!!!!!!!funcion sin usar!!!!!!!!!!!!!
    public function showQuestionAnswers($id, $comanyID)
    {
        try {
            $currentDate = Carbon::now();
            $QA = DB::table('QA')
                ->join('Record', 'QA.RecordID', '=', 'Record.RecordID')
                ->join('Share', 'Record.UserID', '=', 'Share.UserID')
                ->where('QuestionID', $id)
                ->where('Share.CompanyID', '=', $comanyID)
                ->where('Share.ExpiredDate', '>=', $currentDate)
                ->select('QA.*')
                ->get();
            if (!$QA) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$QA], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
