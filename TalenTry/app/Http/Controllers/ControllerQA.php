<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\ModelQA;
use Illuminate\Support\Facades\DB;

class ControllerQA extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        try {
            $QA = ModelQA::all();
            return response() - json([$QA], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las respuestas de la entrevista: ' . $th->getMessage()], 500);
        }
    }

    // Store a newly created resource in storage.
   public function store(Request $request)
    {!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        try {
            $recordsData = $request->json()->get('respuestas');
            foreach ($recordsData as $recordData) {  
            DB::beginTransaction();
            dd($recordData);
            $startDate = \Carbon\Carbon::parse($recordData->StartDate)->toDateTimeString();
            $recordData->merge(['StartDate' => $startDate]);
            $finishDate = \Carbon\Carbon::parse($recordData->FinishDate)->toDateTimeString();
            $recordData->merge(['FinishDate' => $finishDate]);
            $recordData->validate([
                $recordData['RecordID']=> 'required',
                $recordData['QuestionID']=> 'required',
                $recordData['answer']=> 'required',
                $recordData['QuestionPoints']=> 'required',
                $recordData['StartDate']=> 'required|date_format:Y-m-d H:i:s',
                $recordData['FinishDate']=> 'required|date_format:Y-m-d H:i:s',
            ]);
                $QA = new ModelQA([
                    'RecordID' => $recordData['RecordID'],
                    'QuestionID' => $recordData['QuestionID'],
                    'answer' => $recordData['answer'],
                    'QuestionPoints' => $recordData['QuestionPoints'],
                    'StartDate' => $recordData['StartDate'],
                    'FinishDate' => $recordData['FinishDate'],
                ]);
                if($QA->save()){
                 DB::commit();
                 return response()->json(['saved'=>true],200);    
                }else{
                    DB::rollBack();
                }      
            }
                  
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message'=>'hubo un error en:'.$th],500);
        }
    }

    // Display the specified resource.
    public function show($id)
    {
        try {
            $QA = ModelQA::findOrFail($id);
            return response()->json([$QA], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
        }
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        try {
            $startDate = \Carbon\Carbon::parse($request->input('StartDate'))->toDateTimeString();
            $request->merge(['StartDate' => $startDate]);
            $finishDate = \Carbon\Carbon::parse($request->input('FinishDate'))->toDateTimeString();
            $request->merge(['FinishDate' => $finishDate]);
            $request->validate([
                'UserID' => 'required',
                'score' => 'required',
                'StartDate' => 'required|date_format:Y-m-d H:i:s',
                'FinishDate' => 'required|date_format:Y-m-d H:i:s',
            ]);

            // Validation logic goes here
            $QA = ModelQA::findOrFail($id);

            // Use the update method to update the record
            $QA->update([
                'UserID' => $request->input('UserID'),
                'score' => $request->input('score'),
                'StartDate' => $request->input('StartDate'),
                'FinishDate' => $request->input('FinishDate'),
            ]);
                DB::commit();
                 return response()->json(['saved'=>true],200);  
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al actualizar la entrevista sin las preguntas: ' . $th->getMessage()], 500);
        }
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        DB::beginTransaction();
        $QA = ModelQA::findOrFail($id);
        if ($QA->delete()) {
            DB::commit();
            return true;
        } else {
            DB::rollback();
            return false;
        }
    }
}
