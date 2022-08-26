<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('medicamentos', App\Http\Controllers\MedicamentoController::class)->middleware('auth');
Route::resource('laboratorios', App\Http\Controllers\LaboratorioController::class)->middleware('auth');
Route::resource('sitios', App\Http\Controllers\SitioController::class)->middleware('auth');
Route::resource('presentaciones', App\Http\Controllers\PresentacioneController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
