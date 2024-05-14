<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCategory;

class ControllerCategory extends Controller
{
    //muestra todas las categorias
    public function index()
    {
        try {
            $category = ModelCategory::all();
            return response()->json([$category], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //muestra la categoria pedida
    public function show($id)
    {
        try {
            $category = ModelCategory::where('CategoryID', $id)->firstOrFail();
            return response()->json([$category], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //guarda una categoria nueva en la base de datos
    public function store(Request $request)
    {
        try {
            //valida los datos recividos
            $request->validate([
                'CategoryName' => 'required',
                'description' => 'required',
            ]);
            DB::beginTransaction();
            //crea un objeto de Category y lo guarda en la base de datos
            $category = new ModelCategory([
                'CategoryName' => $request->input('CategoryName'),
                'description' => $request->input('description'),
            ]);
            $category->save();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //actualiza la categoria seleccionada en la base de datos
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'CategoryName' => 'required',
                'description' => 'required',
            ]);
            DB::beginTransaction();
            $category = ModelCategory::findOrFail($id);
            if (!$category) {
                return response()->json(['success' => false], 404);
            }
            $category->update([
                'CategoryName' => $request->input('CategoryName'),
                'description' => $request->input('description'),
            ]);
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //elimina la categoria seleccionada
    public function delete(Request $request, $id)
    {
        try {
            $request->validate([
                'CategoryName' => 'required',
                'description' => 'required',
            ]);
            DB::beginTransaction();
            $category = ModelCategory::findOrFail($id);
            if (!$category) {
                return response()->json(['success' => false], 404);
            }
            $category->delete();
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
