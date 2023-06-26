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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('index.register');
});

Route::get('/confi', function () {
    return view('index.confi');
});


Route::get('/login', function () {
    return view('index.login');
});
Route::group(['prefix' => 'configuracion'], function () {
    Route::post('/cambiar-contrasena', 'ConfiguracionController@cambiarContrasena')->name('configuracion.cambiar-contrasena');
    Route::post('/cambiar-descripcion', 'ConfiguracionController@cambiarDescripcion')->name('configuracion.cambiar-descripcion');
});