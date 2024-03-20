<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControllerUser extends Controller
{

    // muestra todos los usuarios (funcion admin).
    public function index()
    {
        try {
        $users = ModelUsers::all();
        if (!$users) {
            return response()->json(['success' => false], 404);
        }
            return response()->json([$users],200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }

    // Crea un usuario nuevo.
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
            return response()->json(['success' => true],200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }

    // muestra el usuario seleccionado (funcion de admin de momento!!!!).
    public function show($id)
    {
        try {
             $user = ModelUsers::find($id);
             if (!$user) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$user],200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error'=> $e->getMessage()],500);
        }
    }

    // muestra el usuario de la sesion actual.
    public function showSelf()
    {
        try {
            $user = Auth::guard('sanctum')->user();
            if (!$user) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$user],200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error'=> $e->getMessage()],404);
        }
    }

    // Actualiza la informacion del usuario actual.
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = Auth::guard('sanctum')->user();
            if (!$user) {
                return response()->json(['success' => false], 404);
            }
            //makes the $user into a user object
            $user = ModelUsers::find($user->UserID);
            $user->update([
                'name' => $request->filled('name') ? $request->input('name') : $user->name,
                'email' => $request->filled('email') ? $request->input('email') : $user->email,
                'phone' => $request->filled('phone') ? $request->input('phone') : $user->phone,
                'pasword' => $request->filled('pasword') ? $request->input('password') : $user->pasword,
            ]);
            DB::commit();
        return response()->json(['success' => true],200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error'=> $e->getMessage()],404);
        }
    }

    // Elimina un usuario especificado.
    public function delete($id)
    {
        $user = ModelUsers::find($id);
        if (!$user) {
            return response()->json(['success' => false],404);
        }
        $user->delete();
        return response()->json(['success' => true],200);
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
                if (!$user) {
                    return response()->json(['success' => false], 404);
                }
                $token = $user->createToken('authToken')->plainTextToken;

                // Deuvelve el token de acceso y el tipo de token
                return response()->json([
                    'access_token' => $token,
                    'token_type' => 'bearer',
                    'type' => $user->type,
                ], 200);
            } else {
                // Si no, deuvelve credenciales incorrectas
                return response()->json(['success' => false], 401);
            } 
        } catch (\Exception $e) {
            // Database error or other unexpected error
            return response()->json(['success' => false, 'error' => $e], 500);
        };
    }

    //funcion de logout
    public function logout() {

        try {
            // Busca el usuario
            $user = Auth::guard('sanctum')->user();
            if ($user) {
                // Y elimina el token de acceso del usuario
                $user->currentAccessToken()->delete();

                // Devuelve un OK
                return response()->json(['success' => true], 200);
            } else {
                // Si no se ha podido encontrar el usuario
                return response()->json(['success' => false], 404);
            }

        } catch (\Exception $e) {
            // Si hay algun error se muestra
            return response()->json(['success' => false, 'error'=> $e->getMessage()], 500);
        }
    }
}
