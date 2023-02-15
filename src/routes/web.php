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

Route::get('/', 'App\Http\Controllers\PacientesController@home');

Route::get('/pacientes/novo', 'App\Http\Controllers\PacientesController@create')->name('criar_paciente');
Route::post('/pacientes/novo', 'App\Http\Controllers\PacientesController@store')->name('registrar_paciente');
Route::get('/pacientes/ver/{id}', 'App\Http\Controllers\PacientesController@show')->name('ver_paciente');
Route::get('/pacientes/editar/{id}', 'App\Http\Controllers\PacientesController@edit')->name('editar_paciente');
Route::post('/pacientes/editar/{id}', 'App\Http\Controllers\PacientesController@update')->name('alterar_paciente');
Route::get('/pacientes/excluir/{id}', 'App\Http\Controllers\PacientesController@delete')->name('excluir_paciente');