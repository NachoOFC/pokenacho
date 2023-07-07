<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::post('verificar-email', [AuthController::class, 'verificarEmail']);

Route::post('verifica-recompensa', [RecompensaController::class, 'verificaRecompensa']);

Route::post('verifica-tiempo/{id}', [RecompensaController::class, 'verificaTiempo']);

Route::post('guarda-recompensa/{id}', [RecompensaController::class, 'guardaRecompensa']);