<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCategory;

class ControllerCategory extends Controller
{

    public function index(){
        try {
            $QA = ModelCategory::findOrFail();
            return response()->json([$QA], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
        }
    }

    public function show($id){
        try {
            $QA = ModelCategory::findOrFail($id);
            return response()->json([$QA], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
        }
    }
}
