<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControllerUser extends Controller
{

    // Display a listing of the resource.
    public function index()
    {
        try {
        $users = ModelUsers::all();
            return response()->json([$users],200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar los usuarios: ' . $e], 500);
        }
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        try {
            $request->validate([
                'DNI' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'phone' => 'required',
            ]);
            DB::beginTransaction();
            $pHash = bcrypt($request->input('password'));
            $usuario = new ModelUsers([
                'DNI' => $request->input('DNI'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $pHash,
                'phone' => $request->input('phone'),
            ]);
            $usuario->save();
            DB::commit();
            return response()->json(['message' => 'Usuario registtrado'],200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => 'Ha ocurrido un error al hacer login: ' . $e], 500);
        }
    }

    // Display the specified resource.
    public function show($id)
    {
        try {
             $user = ModelUsers::find($id);
            return response()->json([$user],200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['Usuario no encontrado: '.$e],404);
        }
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $user = ModelUsers::find($id);
        if (!$user) {
            return response()->json('Usuario no encontrado');
        }
        $user->DNI = $request->input('DNI');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $user->save();
        return response()->json('Usuario actualizado correctamente');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $user = ModelUsers::find($id);
        if (!$user) {
            return response()->json(['Usuario no encontrado']);
        }
        $user->delete();
        return response()->json(['Usuario borrado']);
    }

    //Funcion de login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|max:255|exists:users',
            'password' => 'required|min:3|max:255',
        ]);

        try {
            if (Auth::attempt($credentials)) {

                // Si las credenciales son correctas
                $user = Auth::user();
                $token = $user->createToken('authToken')->plainTextToken;
                $type = Auth::user()->type;

                // Deuvelve el token de acceso y el tipo de token
                return response()->json([
                    'access_token' => $token,
                    'token_type' => 'bearer',
                    'role' => $type,
                ], 200);
            } else {
                // Si no, deuvelve credenciales incorrectas
                return response()->json(['message' => 'Credenciales incorrectas'], 401);
            } 
        } catch (\Exception $e) {
            // Database error or other unexpected error
            return response()->json(['message' => 'Hubo un error, vuelva a intentarlo en unos minutos.', 'error' => $e], 500);
        };
    }

    //cierra la sesion
    public function logout() {

        try {
            // Busca el usuario
            $user = Auth::guard('sanctum')->user();

            if ($user) {
                // Y elimina el token de acceso del usuario
                $user->currentAccessToken()->delete();

                // Devuelve un OK
                return response()->json(['message' => 'Se ha cerrado la sesión de forma satisfactoria'], 200);
            } else {
                // Si no se ha podido encontrar el usuario
                return response()->json(['message' => 'Usuario no encontrado.'], 404);
            }

        } catch (\Exception $e) {
            // Si hay algun error se muestra
            return response()->json(['message' => 'Ha ocurrido un error al hacer logout: ' . $e], 500);
        }
    }
}
