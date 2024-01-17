<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\RoleController;

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

// Rutas para Sanctum
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Otras rutas relacionadas con usuarios si es necesario
});

// Rutas para usuarios (PersonaController)
Route::get('/usuarios', [PersonaController::class, 'index']);
Route::get('/usuarios/email/', [PersonaController::class, 'indexUsuario']);
Route::get('/usuarios/email/{id}', [PersonaController::class, 'indexUsuario']);
Route::get('/usuarios/{id}', [PersonaController::class, 'show']);
Route::delete('/usuarios/{id}', [PersonaController::class, 'destroy']);
Route::post('/usuarios', [PersonaController::class, 'store']);
Route::put('/usuarios/{id}', [PersonaController::class, 'update']);
Route::put('/cambiar/estado/user/{id}', [PersonaController::class, 'cambiarEstado']);

Route::get('/ShowBitacora', [BitacoraController::class, 'index']); 

// Rutas para roles)
Route::get('/Rol', [RoleController::class, 'index']); 
Route::post('/create-role', [RoleController::class, 'create']);
Route::put('/cambiar-estado-rol/{id}', [RoleController::class, 'cambiarEstado']);


// Rutas para Paginas
Route::get('/Paginas', [PaginasController::class, 'index']); 
Route::get('/Paginas/{id}', [PaginasController::class, 'show']);
Route::post('/create-Paginas', [PaginasController::class, 'store']);
Route::delete('/Paginas/{id}', [PaginasController::class, 'destroy']);
Route::put('/Paginas/{id}', [PaginasController::class, 'update']);


// Rutas de autenticación con Sanctum
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('register', [AuthController::class, 'register']);
});



