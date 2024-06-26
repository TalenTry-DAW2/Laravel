<?php

namespace App\Http\Controllers;

use App\Models\ModelShare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControllerShare extends Controller
{
    //carga todos los share (!funcion admin!)
    public function index()
    {
        try {
            $share = ModelShare::all();
            if (!$share) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$share], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //carga las configuraciones del usuario actual
    public function show()
    {
        try {
            $user = Auth::guard('sanctum')->user();
            $share = ModelShare::where('UserID', $user->UserID)->get();
            if (!$share) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$share], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //carga las configuraciones del usuario especifico (!funcion admin!)
    public function showFromAdmin($id)
    {
        try {
            $share = ModelShare::where('UserID', $id)->get();
            if (!$share) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$share], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
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
            //crea un share para guardarlo en la base de datos
            $share = new ModelShare([
                'UserID' => $user->UserID,
                'CompanyID' => $request['CompanyID'],
                'ExpiredDate' => $request['ExpiredDate'],
            ]);
            if ($share->save()) {
                DB::commit();
                return response()->json(['success' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
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
                'ExpiredDate' => 'required|date_format:Y-m-d',
            ]);

            try {
                // crea un share para actualizar el existente
                $share = ModelShare::where('UserID', $user->UserID)
                    ->where('CompanyID', $request->CompanyID)
                    ->firstOrFail();
            } catch (\Exception $exception) {
                return response()->json(['success' => false, 'message' => 'Share not found'], 404);
            }

            $share->ExpiredDate = $request->input('ExpiredDate');
            $share->save();

            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //elimina un share (!funcion admin!)
    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $share = ModelShare::findOrFail($id);
            if (!$share) {
                return response()->json(['success' => false], 404);
            }
            $share->delete();

            DB::commit();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
