<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCompany;
use App\Models\ModelUsers;
use Illuminate\Support\Facades\DB;

class ControllerCompany extends Controller
{
    //carga todas las empresas
    public function index() {
        
        try {
           $company = ModelCompany::all();
            return response()->json([$company], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las empresas: ' . $e], 500);
        }
    }

    //carga una empresa en concreto
    public function show($id)
    {
        try {
            $company = ModelCompany::findOrFail($id);
            return response()->json([$company], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la empresa: ' . $e], 500);
        }
    }

    //crea una empresa nueva
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
                'name' => $request['name'],
                'NIF' => $request['NIF'],
                'address' => $request['address'],
                'password' => $request['password'],
            ]);
            if ($company->save()) {
                DB::commit();
                return response()->json(['saved' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Hubo un error en:' . $e], 500);
        }
    }

    //actualiza la informacion de una empresa (funcion de empresa o admin!)
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'name' => 'required',
                'NIF' => 'required',
                'address' => 'required',
                'password' => 'required',
            ]);

            // Validation logic goes here
            $company = ModelQA::findOrFail($id);

            // Use the update method to update the record
            $company->update([
                'name' => $request->input('name'),
                'NIF' => $request->input('NIF'),
                'address' => $request->input('address'),
                'password' => $request->input('password'),
            ]);
            DB::commit();
            return response()->json(['updated' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al actualizar le empresa: ' . $e], 500);
        }
    }

    //elimina la empresa (funcion de admin!)
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            
            $company = ModelCompany::findOrFail($id);
            $company->delete();
            
            DB::commit();
            
            return response()->json(['success' => true, 'message' => 'Empresa eliminada correctamente'],200);
        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json(['success' => false, 'message' => 'No se pudo eliminar. '.$e],500);
        }
    }
}
