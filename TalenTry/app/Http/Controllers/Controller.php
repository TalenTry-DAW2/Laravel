<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\ControllerCategory;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

// Display the specified resource.
public function showRandomQuestions($id)
{
    try {
        $controllerCategory = new ControllerCategory();
        $QA = $controllerCategory->index($id);
        return response()->json([$QA], 200);
    } catch (\Throwable $th) {
        return response()->json(['message' => 'Ha ocurrido un error al cargar la entrevista sin preguntas: ' . $th->getMessage()], 500);
    }
}
}
