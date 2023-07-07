<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ChatController;

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


Route::get('/login', function () {
    return view('index.login');
});

Route::get('/recompensa', function () {
    return view('index.reward');
})->name('recompensa');

Route::get('/map', [MapController::class, 'showMap'])->name('map');
Route::get('/chat/{location}', [ChatController::class, 'showChat'])->name('chat.show');
Route::post('/chat/{location}', [ChatController::class, 'sendMessage'])->name('chat.send');
