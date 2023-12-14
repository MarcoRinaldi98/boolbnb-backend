<?php

use App\Http\Controllers\Api\ApartmentController;
use App\Http\Controllers\Api\TomtomController;
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

Route::get('/geodata', [TomtomController::class, 'getGeoData']);
//Route::get('/geodata', [MapboxController::class, 'getGeoData']);
Route::get('/apartments/sponsored', [ApartmentController::class, 'sponsored']);
Route::get('/apartments/search', [ApartmentController::class, 'search']);
Route::get('/apartments/sqlinjection', [ApartmentController::class, 'sqlinjection']);
Route::get('/apartments/show', [ApartmentController::class, 'show']);
