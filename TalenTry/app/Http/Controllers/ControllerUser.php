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
            if (!Auth::attempt($credentials)) {
                // Usuario no existe
                return response()->json(['message' => 'Usuario no encontrado.'], 404);
            }

             $user = Auth::user();

             if (!password_verify($request->input('password'), $user->password)) {
                 // Incorrect password
                 return response()->json(['message' => 'La contraseña no es correcta'], 401);
             }
            
            // Successful login
            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'access_token' => $token,
                'token_type' => 'bearer',
                'role' => $user->rol,
            ],200);
        } catch (\Exception $e) {
            // Database error or other unexpected error
            return response()->json(['message' => 'Hubo un error, vuelva a intentarlo en unos minutos.', 'error' => $e->getMessage()], 500);
        };
    }


    //cierra la sesion !!!!!!!!!!no esta bien hecha!!!!!!!!!!
    public function logout(Request $request)
    {
        try {
            // Revoke the current user's access token, effectively logging them out
            if (Auth::check()) { return response()->json(['message' => 'Sesion cerrada correctamente'], 200);
                Auth::user()->tokens()->delete(); // Logout the user by revoking tokens
               
            }

            
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the process
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
                'type' => 'required|in:Usuario,Empresa,Administrador',
                'phone' => 'required',
            ]);

            $pHash = bcrypt($request->input('password'));
            $usuario = new ModelUsers([
                'DNI' => $request->input('DNI'),
                'name' => $request->input('name'),
                'password' => $pHash,
                'email' => $request->input('email'),
                'type' => $request->input('type'),
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
