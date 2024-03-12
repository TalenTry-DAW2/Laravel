<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerRecord;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login',[ControllerUser::class, 'login']);
Route::post('/registro',[ControllerUser::class, 'store']);

Route::middleware('auth:sanctum')->group(function () { 
  Route::post('/logout',[ControllerUser::class, 'logout'])->name('logout');
  //rutas de entrevista
  Route::prefix('/entrevista')->group(function () {
    Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/',[ControllerRecord::class, 'index']);
    });
    Route::get('/',[ControllerRecord::class, 'show']);
    Route::get('/{id}',[ControllerRecord::class, 'showone']);
    Route::post('/create',[ControllerRecord::class, 'create']);
    Route::delete('/destroy',[ControllerRecord::class, 'destroy']);
});
});







