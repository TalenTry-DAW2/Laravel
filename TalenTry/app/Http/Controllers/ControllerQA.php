<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelQA;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ControllerQA extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        try {
            $QA = ModelQA::all();
            return response()->json([$QA], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las respuestas de la entrevista: ' . $th->getMessage()], 500);
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

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $startDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('StartDate'))->format('Y-m-d H:i:s');
             $request->merge(['StartDate' => $startDate]);
            $finishDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('FinishDate'))->format('Y-m-d H:i:s');
             $request->merge(['FinishDate' => $finishDate]);
            
            $request->validate([
                'RecordID' => 'required',
                'QuestionID' => 'required',
                'answer' => 'required',
                'QuestionPoints' => 'required',
                'StartDate' => 'required',
                'FinishDate' => 'required',
            ]);
            $QA = new ModelQA([
                'RecordID' => $request['RecordID'],
                'QuestionID' => $request['QuestionID'],
                'answer' => $request['answer'],
                'QuestionPoints' => $request['QuestionPoints'],
                'StartDate' => $request['StartDate'],
                'FinishDate' => $request['FinishDate'],
            ]);
            if ($QA->save()) {
                DB::commit();
                return response()->json(['saved' => true], 200);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'hubo un error en:' . $th], 500);
        }
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        try {
            $startDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('StartDate'))->format('Y-m-d H:i:s');
             $request->merge(['StartDate' => $startDate]);
            $finishDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('FinishDate'))->format('Y-m-d H:i:s');
             $request->merge(['FinishDate' => $finishDate]);
            $request->validate([
                'UserID' => 'required',
                'score' => 'required',
                'StartDate' => 'required',
                'FinishDate' => 'required',
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
            return response()->json(['saved' => true], 200);
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
