<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
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
Route::get('/dogs', [DogController::class, 'index']);
Route::post('create', [DogController::class, 'store']);
Route::get('/dogs/{dog}', [DogController::class, 'show']);
Route::put('/update/{dog}', [DogController::class, 'update']);
Route::delete('/delete/{dog}', [DogController::class, 'destroy']);