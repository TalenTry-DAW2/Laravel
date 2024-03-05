<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;

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
  Route::post('/entrevista',[ControllerRecord::class, 'index']);
  Route::post('/entrevista',[ControllerRecord::class, 'index']);
  Route::post('/entrevista',[ControllerRecord::class, 'index']);
});







