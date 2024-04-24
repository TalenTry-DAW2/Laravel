<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
    }

    public function create()
    {
        return view('contactos.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required',
    ]);

    Contacto::create($request->all());

    return response()->json(['message' => 'Mensaje enviado correctamente.'], 200);
}


    public function show(Contacto $contacto)
    {
        return view('contactos.show', compact('contacto'));
    }

    public function edit(Contacto $contacto)
    {
        return view('contactos.edit', compact('contacto'));
    }

    public function update(Request $request, Contacto $contacto)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);

        $contacto->update($request->all());

        return redirect()->route('contactos.index')
                         ->with('success', 'Contacto actualizado exitosamente.');
    }

    public function destroy(Contacto $contacto)
    {
        $contacto->delete();

        return redirect()->route('contactos.index')
                         ->with('success', 'Contacto eliminado exitosamente.');
    }
}
