<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCompany;

class ControllerCompany extends Controller
{
    //carga todas las empresas
    public function index() {
        
        try {
           $company = ModelCompany::all();
            return response()->json([$company], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las empresas: ' . $th->getMessage()], 500);
        }
    }

    //carga una empresa en concreto
    public function show($id)
    {
        try {
            $company = ModelCompany::findOrFail($id);
            return response()->json([$company], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la empresa: ' . $th->getMessage()], 500);
        }
    }

    //cre una empresa nueva
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            
            $request->validate([
                'name' => 'required',
                'NIF' => 'required',
                'address' => 'required',
                'password' => 'required',
            ]);
            $company = new ModelCompany([
                'name' => $request['RecordID'],
                'NIF' => $request['QuestionID'],
                'address' => $request['answer'],
                'password' => $request['QuestionPoints'],
            ]);
            if ($comapny->save()) {
                DB::commit();
                return response()->json(['saved' => true], 200);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'Hubo un error en:' . $th], 500);
        }
    }
}
