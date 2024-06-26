<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
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

Route::post('/logintw',[LoginController::class,'logintwo']);
Route::post('/confirmcode',[LoginController::class,'confirmCode']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user',[LoginController::class,'index']);
    Route::get('/logout',[LoginController::class,'destroyT']);
 });
