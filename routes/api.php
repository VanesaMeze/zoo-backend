<?php

use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\AuthController;
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

Route::get('/animals', [AnimalsController::class, 'index']);
Route::get('/animals/{id}', [AnimalsController::class, 'show']);
Route::post('/animals', [AnimalsController::class, 'store']);
Route::put('/animals/{id}', [AnimalsController::class, 'update']);
Route::delete('/animals/{id}', [AnimalsController::class, 'destroy']);


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});