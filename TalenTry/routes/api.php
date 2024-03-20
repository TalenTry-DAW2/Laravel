<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerRecord;
use App\Http\Controllers\ControllerQA;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerQuestion;
use App\Http\Controllers\ControllerAnswer;
use App\Http\Controllers\ControllerCompany;
use App\Http\Controllers\ControllerShare;

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

// Routes accessible only to unauthenticated users using Sanctum
Route::post('/registro', [ControllerUser::class, 'store']);

Route::post('/login', [ControllerUser::class, 'login']);

Route::post('/registroEmpresa', [ControllerCompany::class, 'store']);


  //funciones de controlador User
  Route::post('/logout', [ControllerUser::class, 'logout']);
Route::middleware('auth:sanctum')->group(function () {


  Route::prefix('/user')->group(function () {
    //Route::get('/',[ControllerUser::class, 'index']);
  });

  //funciones de controlador Share
  Route::prefix('/share')->group(function () {
    Route::get('/', [ControllerShare::class, 'show']);
  });

  //funciones de controlador Company
  Route::prefix('/company')->group(function () {
    Route::get('/', [ControllerCompany::class, 'index']);
    Route::get('/{id}', [ControllerCompany::class, 'show']);
  });

  //funciones de controlador Category
  Route::prefix('/category')->group(function () {
    Route::get('/', [ControllerCategory::class, 'index']);
    Route::get('/{id}', [ControllerCategory::class, 'show']);
  });

  //funciones de controlador Question
  Route::prefix('/question')->group(function () {
    // Route::get('/',[ControllerQuestion::class, 'index']);
    Route::get('/getFromCategory', [ControllerQuestion::class, 'showCategory']);
  });

  //funciones de controlador Answer
  Route::prefix('/answer')->group(function () {
    Route::get('/getFromQuestion/{id}', [ControllerAnswer::class, 'showQuestion']);
  });

  //funciones de controlador Record
  Route::prefix('/record')->group(function () {
    Route::get('/', [ControllerRecord::class, 'show']);
    Route::get('/{id}', [ControllerRecord::class, 'showOne']);
  });

  //funciones de controlador QA
  Route::prefix('/QA')->group(function () {
    Route::get('/{id}', [ControllerQA::class, 'show']);
    Route::get('/store', [ControllerQA::class, 'store']);
  });

  Route::middleware(['auth:sanctum', 'check.role:Usuario'])->group(function () {

    //funciones de controlador Share
    Route::prefix('/share')->group(function () {
      Route::post('/store', [ControllerShare::class, 'store']);
      Route::put('/update', [ControllerShare::class, 'update']);
    });
  });

  Route::middleware(['auth:sanctum', 'check.role:Empresa'])->group(function () {

    //funciones de controlador Company
    Route::prefix('/company')->group(function () {
      Route::put('/update/{id}', [ControllerCompany::class, 'update']);
    });

    //funciones de controlador Record
    Route::prefix('/record')->group(function () {
      Route::get('/store', [ControllerRecord::class, 'store']);
      Route::get('/update/{id}', [ControllerRecord::class, 'update']);
    });

    //funciones de controlador QA
    Route::prefix('/QA')->group(function () {
      Route::get('/showQuestionAnswers', [ControllerQA::class, 'showQuestionAnswers']);
    });

    //funciones de controlador Answer
    Route::prefix('/answer')->group(function () {
      Route::get('/create', [ControllerAnswer::class, 'create']);
    });
  });

  Route::middleware(['auth:sanctum', 'check.role:Administrador'])->group(function () {

    //funciones de controlador Company
    Route::prefix('/company')->group(function () {
      Route::delete('/delete/{id}', [ControllerCompany::class, 'destroy']);
    });

    //funciones de controlador Record
    Route::prefix('/record')->group(function () {
      Route::get('/delete/{id}', [ControllerRecord::class, 'destroy']);
    });

    //funciones de controlador QA
    Route::prefix('/QA')->group(function () {
      Route::get('/', [ControllerQA::class, 'index']);
      Route::get('/update/{id}', [ControllerQA::class, 'update']);
      Route::get('/destroy/{id}', [ControllerQA::class, 'destroy']);
    });

    //funciones de controlador Answer
    Route::prefix('/answer')->group(function () {
      Route::get('/listAll', [ControllerAnswer::class, 'index']);
      Route::get('/create', [ControllerAnswer::class, 'create']);
      Route::get('/update', [ControllerAnswer::class, 'update']);
      Route::get('/delete', [ControllerAnswer::class, 'delete']);
    });
  });
});
