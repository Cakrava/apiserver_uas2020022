<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GuruController;
use App\Http\Resources\GuruResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(LoginRegisterController::class)->group(function () {
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [LoginRegisterController::class, 'logout']);

    Route::apiResource('guru', GuruController::class);
    Route::apiResource('buku', BukuController::class);
    
});


