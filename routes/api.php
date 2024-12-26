<?php

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

//Route::apiResource('hotels', HotelController::class);
Route::apiResource('hotels', 'App\Http\Controllers\HotelController');
Route::get('acomodacion', 'App\Http\Controllers\HotelController@acomodacion')->name('acomodacion');   
Route::get('tipo_habitacion', 'App\Http\Controllers\HotelController@tipo_habitacion')->name('tipo_habitacion');
//Route::apiResource('habitaciones', HabitacionController::class);