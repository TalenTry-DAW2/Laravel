<?php

namespace App\Http\Controllers;

use App\Models\ModelContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControllerContacto extends Controller
{

    public function index()
    {
        try {
            // Obtener todos los registros de contacto
            $contactos = ModelContacto::all();

            // Devolver los registros como respuesta JSON
            return response()->json(['success' => true, $contactos], 200);
        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra y devolver una respuesta JSON de error
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }



    //Guarda un formulario de contacto en la base de datos
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
            //crea un nuevo formulario y los guarda
            $record = new ModelContacto([
                'UserID' => $user->UserID,
                'nombre' => $request->input('nombre'),
                'email' => $request->input('email'),
                'mensaje' => $request->input('mensaje'),
            ]);
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
