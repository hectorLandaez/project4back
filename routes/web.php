<?php

use App\Http\Controllers\personaController;
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

Route::get('/usuarios', [PersonaController::class, 'index']);

/* 
Route::controller(personaController::class, function () {
    Route::get('/usuarios', 'index');
    Route::get('/usuarios/{id}', 'show');
    Route::delete('/usuarios/{id}', 'destroy');
    Route::post('/usuarios', 'store');
    Route::put('/usuarios/{id}', 'update');
});
 */