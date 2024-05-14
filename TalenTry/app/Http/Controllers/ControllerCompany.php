<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCompany;
use App\Models\ModelUsers;
use Illuminate\Support\Facades\DB;

class ControllerCompany extends Controller
{
    //carga todas las empresas
    public function index()
    {

        try {
            $company = ModelCompany::all();
            if (!$company) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$company], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //carga una empresa en concreto
    public function show($id)
    {
        try {
            $company = ModelCompany::findOrFail($id);
            if (!$company) {
                return response()->json(['success' => false], 404);
            }
            return response()->json([$company], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //crea una empresa nueva y su usuario asociado
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $pHash = bcrypt($request->input('password'));
            $user = new ModelUserS([
                'DNI' => $request['DNI'],
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'password' => $pHash,
                'type' => 'Empresa',
            ]);

            // guarda el usuario
            if (!$user->save()) {
                throw new \Exception('Failed to create user.');
            }
            DB::commit();

            $user->select();
            if (!$user) {
                throw new \Exception('User not found.');
            }
            DB::beginTransaction();
            // Crea la empresa y la guarda
            $company = new ModelCompany([
                'name' => $request['name2'],
                'NIF' => $request['NIF'],
                'address' => $request['address'],
                'UserID' => $user->UserID,
            ]);

            if (!$company->save()) {
                throw new \Exception('Failed to create company.');
            }
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //actualiza la informacion de una empresa (funcion de empresa o admin!)
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            //valida los datos recividos
            $request->validate([
                'name' => 'required',
                'NIF' => 'required',
                'address' => 'required',
                'password' => 'required',
            ]);

            $company = ModelCompany::findOrFail($id);
            if (!$company) {
                return response()->json(['success' => false], 404);
            }
            // actualiza la empresa en la base de datos
            $company->update([
                'name' => $request->input('name'),
                'NIF' => $request->input('NIF'),
                'address' => $request->input('address'),
                'password' => $request->input('password'),
            ]);
            DB::commit();
            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    //elimina la empresa (funcion de admin!)
    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $company = ModelCompany::findOrFail($id);
            if (!$company) {
                return response()->json(['success' => false], 404);
            }
            $company->delete();

            DB::commit();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
