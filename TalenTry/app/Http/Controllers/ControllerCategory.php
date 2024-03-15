<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCategory;

class ControllerCategory extends Controller
{

    public function index(){
        try {
            $category = ModelCategory::all();
            return response()->json($category, 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
        }
    }

    public function show(Request $request){
        try {
            $id = $request->get('id');
            $QA = ModelCategory::where('CategoryID', $id)->firstOrFail();
            return response()->json($QA, 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
        }
    }
}
