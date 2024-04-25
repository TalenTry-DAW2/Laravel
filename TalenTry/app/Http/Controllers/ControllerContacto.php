<?php

namespace App\Http\Controllers;

use App\Models\ModelContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControllerContacto extends Controller
{

    public function store(Request $request)
    {
        try {
            $user = Auth::guard('sanctum')->user();
            $request->merge(['UserID' => $user->UserID]);
            $request->validate([
                'nombre' => 'required',
                'email' => 'required',
                'mensaje' => 'required',
            ]);
            DB::beginTransaction();
            //creates a ner record with the record model
            $record = new ModelContacto([
                'UserID' => $user->UserID,
                'nombre' => $request->input('nombre'),
                'email' => $request->input('email'),
                'mensaje' => $request->input('mensaje'),
            ]);
                //save in database
            if ($record->save()) {
                DB::commit();
                return response()->json(['success' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }
}
