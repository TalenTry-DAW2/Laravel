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
}
