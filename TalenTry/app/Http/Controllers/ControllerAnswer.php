<?php

namespace App\Http\Controllers;

use App\Models\ModelAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerAnswer extends Controller
{
    //obtiene las respuestas a una pregunta, solo para funciones internas, no api!
    public function showQuestion($id)
    {
        try {
            $respuestas = ModelAnswer::where('QuestionID', $id)->get();
            return $respuestas;
        } catch (\Throwable $th) {
            return "Error";
        }
    }
}
