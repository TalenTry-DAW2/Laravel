<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsers;
use Illuminate\Support\Facades\Auth;

class ControllerUser extends Controller
{

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
            return response()->json(['message' => 'Hubo un error, vuelva a intentarlo en unos minutos.', 'error' => $e->getMessage()], 500);
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
            return response()->json(['message' => 'Ha ocurrido un error al hacer logout: ' . $e->getMessage()], 500);
        }
    }

    // Display a listing of the resource.
    public function index()
    {
        $users = ModelUsers::all();
        // return view('users.index', compact('users'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        // return view('users.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        try {
            $request->validate([
                'DNI' => 'required',
                'name' => 'required',
                'password' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
            ]);

            $pHash = bcrypt($request->input('password'));
            $usuario = new ModelUsers([
                'DNI' => $request->input('DNI'),
                'name' => $request->input('name'),
                'password' => $pHash,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
            ]);
            $usuario->save();
            return response()->json(['message' => 'User registered successfully']);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al hacer login: ' . $th->getMessage()], 500);
        }
    }

    // Display the specified resource.
    public function show($id)
    {
        $user = ModelUsers::findOrFail($id);
        // return view('users.show', compact('user'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $user = ModelUsers::findOrFail($id);
        // return view('users.edit', compact('user'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Validation logic goes here
        $user = ModelUsers::findOrFail($id);
        $user->update($request->all());
        // return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $user = ModelUsers::findOrFail($id);
        $user->delete();
        // return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
