<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PacientesController as APIPacientesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/pacientes', [APIPacientesController::class, 'index'])->name('api.pacientes.index');
Route::get('/pacientes/{id}', [APIPacientesController::class, 'show'])->name('api.pacientes.show');

Route::get('/pacientes', [PacientesController::class,'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacientesController::class,'create'])->name('pacientes.create');
Route::post('/pacientes/store', [PacientesController::class,'store'])->name('pacientes.store');
Route::get('/pacientes/{id}/edit', [PacientesController::class,'edit'])->name('pacientes.edit');
Route::put('/pacientes/{id}/update', [PacientesController::class,'update'])->name('pacientes.update');
Route::delete('/pacientes/{id}/destroy', [PacientesController::class,'destroy'])->name('pacientes.destroy');