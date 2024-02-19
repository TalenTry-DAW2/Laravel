<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;
use Illuminate\Support\Facades\Auth;

class ControllerUser extends Controller
{
    //Funcion de login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!Auth::attempt($credentials)) {
                // Usuario no existe
                return response()->json(['message' => 'Usuario no encontrado.'], 404);
            }

            $user = Auth::Modeluser();

            if (!password_verify($request->input('password'), $user->password)) {
                // Incorrect password
                return response()->json(['message' => 'La contraseña no es correcta'], 401);
            }

            // Successful login
            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json(['message' => 'Inicio de sesion exitoso', 'token' => $token]);
        } catch (\Exception $e) {
            // Database error or other unexpected error
            return response()->json(['message' => 'Hubo un error, vuelva a intentarlo en unos minutos.', 'error' => $e->getMessage()], 500);
        };
    }

    // Display a listing of the resource.
    public function index()
    {
        $users = ModelUser::all();
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
        // Validation logic goes here
        $user = ModelUser::create($request->all());
        // return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    // Display the specified resource.
    public function show($id)
    {
        $user = ModelUser::findOrFail($id);
        // return view('users.show', compact('user'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $user = ModelUser::findOrFail($id);
        // return view('users.edit', compact('user'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Validation logic goes here
        $user = ModelUser::findOrFail($id);
        $user->update($request->all());
        // return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $user = ModelUser::findOrFail($id);
        $user->delete();
        // return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
