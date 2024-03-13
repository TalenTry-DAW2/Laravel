<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerRecord;
use App\Http\Controllers\ControllerQA;

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
    Route::middleware(['auth:sanctum', 'check.role:Administrador'])->group(function () {
      //enseña TODAS las entrevistas
    Route::get('/all',[ControllerRecord::class, 'index']);
        //elimina la entrevista que se ha seleccionado
    Route::delete('/destroy',[ControllerRecord::class, 'destroy']);
    });
    //enseña todas la entrevistas del usuario
    Route::get('/',[ControllerRecord::class, 'show']);
    //enseña la entrevista especificada si es del usuario
    Route::get('/{id}',[ControllerRecord::class, 'showone']);
    //guarda una entrevista a nombre del usuario actual
    Route::post('/create',[ControllerRecord::class, 'store']);

});
});
Route::prefix('/QA')->group(function () {
  Route::middleware(['auth:sanctum', 'check.role:Administrador'])->group(function () {
    //enseña TODAS las respuestas de personas
  Route::get('/all',[ControllerQA::class, 'index']);
      //elimina la respuesta que se ha seleccionado
  Route::delete('/destroy',[ControllerQA::class, 'destroy']);
  });
  //enseña todas la entrevistas del usuario
  Route::get('/',[ControllerQA::class, 'show']);
  //guarda todas las respuestas que recibe
  Route::post('/create',[ControllerQA::class, 'store']);
});
Route::prefix('/pregunta')->group(function () {

});
Route::prefix('/respuesta')->group(function () {

});
Route::prefix('/empresa')->group(function () {

});
Route::prefix('/share')->group(function () {

});







