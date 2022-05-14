<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PacientesController as PacientesController;

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

Route::get('/pacientes', [PacientesController::class,'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacientesController::class,'create'])->name('pacientes.create');
Route::post('/pacientes/store', [PacientesController::class,'store'])->name('pacientes.store');
Route::get('/pacientes/{id}/edit', [PacientesController::class,'edit'])->name('pacientes.edit');
Route::put('/pacientes/{id}/update', [PacientesController::class,'update'])->name('pacientes.update');
Route::delete('/pacientes/{id}/destroy', [PacientesController::class,'destroy'])->name('pacientes.destroy');