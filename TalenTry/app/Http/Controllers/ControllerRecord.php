<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControllerQA;
use App\Models\ModelRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ControllerRecord extends Controller
{
    // muestra todas la entrevistas (info general) (!funcion admin!).
    public function index()
    {
        try {
            $records = ModelRecord::all();
            if (!$records) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$records], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // devuelve todas las entrevistas del usuario actual.
    public function show()
    {
        $user = Auth::guard('sanctum')->user();
        try {
            $records = ModelRecord::where('UserID', $user->UserID)
                ->join('Category', 'Record.CategoryID', '=', 'Category.CategoryID')
                ->select('Record.*', 'Category.CategoryName')
                ->get();
            if (!$records) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$records], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // devuelve la entrevista en concreto del usuario actual.
    public function showOne($id)
    {
        $user = Auth::guard('sanctum')->user();
        try {
            $records = ModelRecord::where('UserID', $user->UserID)->where('RecordID', $id)->firstOrFail();
            if (!$records) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$records], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // guarda la info general de una entrevista para el usuario actual.
    public function store(Request $request)
    {
        try {
            $user = Auth::guard('sanctum')->user();
            //formatea las fechas y comprueba que los datos introducidos sean correctos
            $startDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('StartDate'))->format('Y-m-d H:i:s');
            $request->merge(['StartDate' => $startDate]);
            $finishDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('FinishDate'))->format('Y-m-d H:i:s');
            $request->merge(['FinishDate' => $finishDate]);
            $request->validate([
                'CategoryID' => 'required',
                'score' => 'required',
                'StartDate' => 'required',
                'FinishDate' => 'required',
            ]);
            
            DB::beginTransaction();
            //crea un aentrevista y la guarda en la base de datos
            $record = new ModelRecord([
                'UserID' => $user->UserID,
                'CategoryID' => $request->input('CategoryID'),
                'score' => $request->input('score'),
                'StartDate' => $request->input('StartDate'),
                'FinishDate' => $request->input('FinishDate'),
            ]);
            if ($record->save()) {
                DB::commit();
                $record->get('RecordID');
                return response()->json(['success' => true, 'RecordID' => $record->id], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // actualiza la informacion general de una entrevista.
    public function update(Request $request, $id)
    {
        try {
            //formatea las fechas y comprueba que los datos necesarios esten introducidos
            $startDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('StartDate'))->format('Y-m-d H:i:s');
            $request->merge(['StartDate' => $startDate]);
            $finishDate = Carbon::createFromFormat('d-m-Y H:i:s', $request->input('FinishDate'))->format('Y-m-d H:i:s');
            $request->merge(['FinishDate' => $finishDate]);
            $request->validate([
                'score' => 'required',
                'StartDate' => 'required',
                'FinishDate' => 'required',
            ]);
            DB::beginTransaction();
            $record = ModelRecord::findOrFail($id);
            if (!$record) {
                return response()->json(['success' => false], 404);
            }
            //crea una entrevista para actualizar la existente en la base de datos
            $record->update([
                'score' => $request->input('score'),
                'StartDate' => $request->input('StartDate'),
                'FinishDate' => $request->input('FinishDate'),
            ]);
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // elimina la entrevista especificada (!funcion de admin!)
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $record = ModelRecord::findOrFail($id);
            if (!$record) {
                return response()->json(['success' => false], 404);
            }
            $record->delete();
            $QA = new ControllerQA();
            if ($QA->destroy($id)) {
                DB::commit();
                return response()->json(['success' => true], 200);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
