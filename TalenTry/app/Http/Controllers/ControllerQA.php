<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\ModelQA;

class ControllerQA extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        try {
            $QA = ModelQA::all();
            return response()-json([$QA]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las respuestas de la entrevista: ' . $th->getMessage()], 500);
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
            //creates a new record with the record model
            $QA = new ModelQA([
                'UserID' => $request->input('UserID'),
                'score' => $request->input('score'),
                'StartDate' => $request->input('StartDate'),
                'FinishDate' => $request->input('FinishDate'),
            ]);
            //create esta en proceso!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            DB::beginTransaction();
            //save in database
            $QA->save();
            // Create an instance of ControllerQA
            $QA = new ControllerQA();
            // Call the function from ControllerQA
            $QA->store($request);
            DB::commit();
            
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al guardar la entrevista: ' . $th->getMessage()], 500);
        }
    }

    // Display the specified resource.
    public function show($id)
    {
        try {
            $QA= ModelQA::findOrFail($id);
            return response()->json([$record],200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
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
            $QA = ModelQA::findOrFail($id);
    
            // Use the update method to update the record
            $QA->update([
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
        DB::beginTransaction();
        $QA = ModelQA::findOrFail($id);
        if($QA->delete()){
            DB::commit();
            return true;
            }else{
                DB::rollback();
                return false;
            }
    }
}
