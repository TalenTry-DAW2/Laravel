<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerRecord extends Controller
{
        // Display a listing of the resource.
        public function index()
        {
            $records = ModelRecords::all();
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
                $record = new ModelRecord([
                    'DNI' => $request->input('DNI'),
                    'name' => $request->input('name'),
                    'password' => $pHash,
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                ]);
                $record->save();
                return response()->json(['message' => 'User registered successfully']);
            } catch (\Throwable $th) {
                return response()->json(['message' => 'Ha ocurrido un error al hacer login: ' . $th->getMessage()], 500);
            }
        }
    
        // Display the specified resource.
        public function show($id)
        {
            $record = ModelRecord::findOrFail($id);
            // return view('users.show', compact('user'));
        }
    
        // Show the form for editing the specified resource.
        public function edit($id)
        {
            $record = ModelRecord::findOrFail($id);
            // return view('users.edit', compact('user'));
        }
    
        // Update the specified resource in storage.
        public function update(Request $request, $id)
        {
            // Validation logic goes here
            $record = ModelRecord::findOrFail($id);
            $record->update($request->all());
            // return redirect()->route('users.index')->with('success', 'User updated successfully');
        }
    
        // Remove the specified resource from storage.
        public function destroy($id)
        {
            $record = ModelRecord::findOrFail($id);
            $record->delete();
            // return redirect()->route('users.index')->with('success', 'User deleted successfully');
        }
}
