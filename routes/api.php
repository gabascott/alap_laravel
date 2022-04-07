<?php

use App\Http\Controllers\bejegyzesekController;
use App\Http\Controllers\tevekenysegController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('tevekenysegek', [tevekenysegController::class, 'index']);
Route::get('bejegyzesek', [bejegyzesekController::class, 'bejegyzesek_listaz']);
//Route::get('bejegyzesek', [bejegyzesekController::class, 'index']);
