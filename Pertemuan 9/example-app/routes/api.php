<?php

use Illuminate\Http\Request;
use App\Http\Controllers\StudentApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/mahasiswa',[StudentApiController::class,'store']);

//Menampilkan data mahasiswa melalui API
Route::get('/mahasiswa',[StudentApiController::class,'index']);
Route::get('/mahasiswa/{id}',[StudentApiController::class,'getById']);
Route::get('/mahasiswa/by_nim/{nim}',[StudentApiController::class,'getByNim']);

// Menambah data mahasiswa melalui API
Route::post('/mahasiswa',[StudentApiController::class,'save']);

//Meangubah data mahasiswa melalui API
Route::put('/mahasiswa/{id}',[StudentApiController::class,'update']);

Route::delete('/mahasiswa/{id}',[StudentApiController::class,'delete']);

// Route::put('/mahasiswa/{id}',[StudentApiController::class,'update']);
// Route::delete('/mahasiswa/{id}',[StudentApiController::class,'delete']);
