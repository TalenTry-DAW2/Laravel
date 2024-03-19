<?php

namespace App\Http\Controllers;

use App\Models\ModelAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerAnswer extends Controller
{

    //devuelve TODAS las respuestas ordenadas por pregunta en orden de creacion
    public function index()
    {
        try {
            $answers = ModelAnswer::orderBy('questionID')->get();
            return response()->json([$answers], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las respuestas: ' . $e], 500);
        }
    }

    //obtiene las respuestas a una pregunta, solo para funciones internas, no api!
    public function showQuestion($id)
    {
        try {
            $respuestas = ModelAnswer::where('QuestionID', $id)->get();
            return $respuestas;
        } catch (\Exception $e) {
            return "Error";
        }
    }


    //crea una respuesta para la pregunta seleccionada
    public function create()
    {
        try {
            $request->validate([
                'answer' => 'required',
                'QuestionID' => 'required',
                'QuestionPoints' => 'required',
            ]);
            DB::beginTransaction();
            //creates a ner record with the record model
            $record = new ModelAnswer([
                'answer' => $request->input('answer'),
                'QuestionID' => $request->input('QuestionID'),
                'QuestionPoints' => $request->input('QuestionPoints'),
            ]);
                //save in database
            if ($record->save()) {
                DB::commit();
                return response()->json(['saved' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al guardar la respuesta: ' . $e], 500);
        }
    }

    //actualiza la respuesta seleccionada
    public function update($id)
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

            // Use the update method to update the answer
            $answer->update([
                'answer' => $request->input('answer'),
                'QuestionID' => $request->input('QuestionID'),
                'QuestionPoints' => $request->input('QuestionPoints'),
            ]);
            DB::commit();
            return response()->json(['updated' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al actualizar la respuesta: ' . $e], 500);
        }
    }

    //elimina la respuesta seleccionada
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            
            $company = ModelAnswer::findOrFail($id);
            $company->delete();
            
            DB::commit();
            
            return response()->json(['success' => true, 'message' => 'Respuesta eliminada correctamente'],200);
        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json(['success' => false, 'message' => 'No se pudo eliminar. '.$e],500);
        }
    }  
}
