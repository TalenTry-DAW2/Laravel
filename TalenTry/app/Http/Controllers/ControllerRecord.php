<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControllerQA;
use App\Models\ModelRecord;
use Illuminate\Support\Facades\Auth;

class ControllerRecord extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        try {
            $records = ModelRecord::all();
            return response()->json([$records], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin las preguntas: ' . $th->getMessage()], 500);
        }
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        try {
            $request->validate([
                'UserID' => 'required',
                'score' => 'required',
                'StartDate' => 'required|date',
                'FinishDate' => 'required|date',
            ]);
            //creates a ner record with the record model
            $record = new ModelRecord([
                'UserID' => $request->input('UserID'),
                'score' => $request->input('score'),
                'StartDate' => $request->input('StartDate'),
                'FinishDate' => $request->input('FinishDate'),
            ]);
            DB::beginTransaction();
            //save in database
            $record->save();
            // Create an instance of ControllerQA
            $QA = new ControllerQA();
            if ($QA->store($request)) {
                DB::commit();
                return response()->json(['message' => 'Entrevista guardada correctamente'], 200);
            } else {
                throw new \Exception('Error a la hora de guardar la entrevista.');
            }

        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al hacer login: ' . $th->getMessage()], 500);
        }
    }

    // Display the user's resource.
    public function show()
    {
        $user = Auth::guard('sanctum')->user();
        try {
            $records = ModelRecord::where('UserID', $user->UserID)->get();
            return response()->json([$records], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin las preguntas: ' . $e->getMessage()], 500);
        }
    }

        // Display the specified user's resource.
        public function showone($id)
        {
            $user = Auth::guard('sanctum')->user();
            try {
                $records = ModelRecord::where('UserID', $user->UserID)->where('RecordID', $id)->firstOrFail();
                return response()->json([$records], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin las preguntas: ' . $e->getMessage()], 500);
            }
        }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'UserID' => 'required',
                'score' => 'required',
                'StartDate' => 'required|date',
                'FinishDate' => 'required|date',
            ]);

            // Validation logic goes here
            $record = ModelRecord::findOrFail($id);

            // Use the update method to update the record
            $record->update([
                'UserID' => $request->input('UserID'),
                'score' => $request->input('score'),
                'StartDate' => $request->input('StartDate'),
                'FinishDate' => $request->input('FinishDate'),
            ]);
            return response()->json(['message' => 'Se ha actualizado la entrevista correctamente.'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al actualizar la entrevista sin las preguntas: ' . $th->getMessage()], 500);
        }
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $record = ModelRecord::findOrFail($id);
            $record->delete();
            // Create an instance of ControllerQA
            $QA = new ControllerQA();
            if ($QA->delete($id)) {
                DB::commit();
                return response()->json(['message' => 'Entrevista guardada correctamente'], 200);
            } else {
                throw new \Exception('Error a la hora de eliminar la entrevista.');
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin las preguntas: ' . $th->getMessage()], 500);
        }
    }
}
