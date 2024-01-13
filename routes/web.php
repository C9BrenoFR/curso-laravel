<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/series', 'App\Http\Controllers\SeriesController@index')->
    name('listar_series');
Route::get('/series/criar', 'App\Http\Controllers\SeriesController@create')
    ->name('form_criar_serie');
Route::post('/series/criar', 'App\Http\Controllers\SeriesController@store');
Route::delete('/series/remover/{id}', 'App\Http\Controllers\SeriesController@destroy');
