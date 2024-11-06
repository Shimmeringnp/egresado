<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControlador;
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

Route::get('/', function () {
    return view('login.index');
});

Route::get('/segundaPagina', [LoginControlador::class, 'segundaPagina']);
Route::get('/terceraPagina', [LoginControlador::class, 'terceraPagina']);
Route::get('/cuartaPagina', [LoginControlador::class, 'cuartaPagina']);
Route::get('/quintaPagina', [LoginControlador::class, 'quintaPagina']);
Route::get('/sextaPagina', [LoginControlador::class, 'sextaPagina']);
Route::get('/septimaPagina', [LoginControlador::class, 'septimaPagina']);
Route::get('/octavaPagina', [LoginControlador::class, 'octavaPagina']);
Route::get('/novenaPagina', [LoginControlador::class, 'novenaPagina']);
Route::get('/decimaPagina', [LoginControlador::class, 'decimaPagina']);