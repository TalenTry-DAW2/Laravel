<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControllerQA;
use App\Models\ModelRecord;

class ControllerRecord extends Controller
{
        // Display a listing of the resource.
        public function index()
        {
            try {
                $records = ModelRecords::all();
                return response()->json([$record],200);
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
                    'Startdate' => 'required|date',
                    'FinishDate' => 'required|date',
                ]);
                //creates a ner record with the record model
                $record = new ModelRecord([
                    'UserID' => $request->input('UserID'),
                    'score' => $request->input('score'),
                    'StartDate' => $request->input('StartDate'),
                    'FinishDate' => $request->input('FinishDate'),
                ]);
                //create esta en proceso!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                DB::beginTransaction();
                //save in database
                $record->save();
                // Create an instance of ControllerQA
                $QA = new ControllerQA();
        if($QA->store($request)){
        DB::commit();
        return response()->json(['message' => 'Entrevista guardada correctamente'], 200);
        }else{
            throw new \Exception('Error a la hora de guardar la entrevista.');
        }
        
            } catch (\Throwable $th) {
                DB::rollBack();
                return response()->json(['message' => 'Ha ocurrido un error al hacer login: ' . $th->getMessage()], 500);
            }
        }
    
        // Display the specified resource.
        public function show($id)
        {
            try {
                $record = ModelRecord::findOrFail($id);
                return response()->json([$record],200);
            } catch (\Throwable $th) {
                return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin las preguntas: ' . $th->getMessage()], 500);
            }
            // return view('users.show', compact('user'));
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
        //update esta en proceso!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                return 9;
            } catch (\Throwable $th) {
                return response()->json(['message' => 'Ha ocurrido un error al actualizar la entrevista sin las preguntas: ' . $th->getMessage()], 500);
            }
            // return redirect()->route('users.index')->with('success', 'User updated successfully');
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
                if($QA->delete($id)){
                DB::commit();
                return response()->json(['message' => 'Entrevista guardada correctamente'], 200);
                }else{
                    throw new \Exception('Error a la hora de eliminar la entrevista.');
                }
            } catch (\Throwable $th) {
                DB::rollback();
                return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin las preguntas: ' . $th->getMessage()], 500);
            }
        }
}
