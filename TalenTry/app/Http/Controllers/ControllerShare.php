<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelShare;
use Illuminate\Support\Facades\DB;

class ControllerShare extends Controller
{
     //carga todos los share (!funcion admin!)
     public function index() {
        try {
           $share = ModelShare::all();
            return response()->json([$share], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar las configuraciones: ' . $th->getMessage()], 500);
        }
    }

    //carga las configuraciones del usuario actual
    public function show()
    {
        try {
            $user = Auth::guard('sanctum')->user();
            $share = ModelShare::where('UserID', $user->UserID)->get();
            return response()->json([$share], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la configuración: ' . $th->getMessage()], 500);
        }
    }

    //carga las configuraciones del usuario especifico (!funcion admin!)
    public function showFromAdmin($id)
    {
        try {
            $share = ModelShare::where('UserID', $id)->get();
            return response()->json([$share], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la configuración: ' . $th->getMessage()], 500);
        }
    }

    //guarda una politica de privacidad para el usuario actual (solo para Usuario)
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = Auth::guard('sanctum')->user();
            $request->validate([
                'CompanyID' => 'required',
                'ExpiredDate' => 'required',
            ]);
            $share = new ModelShare([
                'UserID' => $user->UserID,
                'CompanyID' => $request['companyID'],
                'ExpiredDate' => $request['ExpiredDate'],
            ]);
            if ($share->save()) {
                DB::commit();
                return response()->json(['saved' => true], 200);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'Hubo un error en:' . $th->getMessage()], 500);
        }
    }

    //actualiza la fecha de caducidad de un share (alargando su plazo o cancelando esta) (solo para Usuario)
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = Auth::guard('sanctum')->user();
            $request->validate([
                'CompanyID' => 'required',
                'ExpiredDate' => 'required',
            ]);

            // Validation logic goes here
            $share = ModelShare::where('UserID', $user->UserID)->where('CompanyID', $request->CompanyID)->firstOrFail();;

            $share->update([
                'ExpiredDate' => $request['ExpiredDate'],
            ]);
            DB::commit();
            return response()->json(['saved' => true], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'Ha ocurrido un error al actualizar la politica de privacidad: ' . $th->getMessage()], 500);
        }
    }

    //elimina un share (!funcion admin!)
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            
            $share = ModelShare::findOrFail($id);
            $share->delete();
            
            DB::commit();
            
            return response()->json(['success' => true, 'message' => 'Share eliminado correctamente'],200);
        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json(['success' => false, 'message' => 'No se pudo eliminar: '.$e->getMessage()],500);
        }
    }
}
