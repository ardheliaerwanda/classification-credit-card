<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('/simulation');
});
*/

/*Route::get('/simulasi','App\Http\Controllers\SimulasiController@index');
Route::get('/simulasihasil','App\Http\Controllers\SimulasiController@hasil');
Route::post('/simulasi','App\Http\Controllers\SimulasiController@store');
*/

Route::get('/simulation','App\Http\Controllers\ClassificationController@index');
Route::post('/simulation','App\Http\Controllers\ClassificationController@store');
// Route::view('/result', 'result');
Route::get('/result','App\Http\Controllers\ResultController@index');
