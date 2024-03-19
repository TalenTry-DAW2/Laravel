<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCategory;

class ControllerCategory extends Controller
{
    //muestra todas las categorias
    public function index(){
        try {
            $category = ModelCategory::all();
            return response()->json($category, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $e], 500);
        }
    }

    //muestra la categoria pedida
    public function show($id){
        try {
            $QA = ModelCategory::where('CategoryID', $id)->firstOrFail();
            return response()->json($QA, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $e], 500);
        }
    }

    public function store(Request $request)
    {
        $QA = new ModelCategory();
        $QA->CategoryName = $request->input('CateGoryName');
        $QA->description = $request->input('description');

        return response()->json('Categoria creada correctamente');
    }

    public function update(Request $request, $id)
    {
        $QA = ModelCategory::find($id);
        if (!$QA) {
            return response()->json('Usuario no encontrado');
        }
        $QA->CategoryName = $request->input('CateGoryName');
        $QA->description = $request->input('description');
        $QA->save();
        return response()->json('Categoria actualizada correctamente');
    }

    public function destroy($id)
    {
        $QA = ModelCategory::find($id);
        if (!$QA) {
            return response()->json(['Categoria no encontrada']);
        }
        $QA->delete();
        return response()->json(['Categoria borrada']);
    }
}
