<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/test-jquery', function () {
    return view('test-jquery');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TareaController::class, 'index'])->name('home.index');
Route::get('/fase2', [App\Http\Controllers\TareaController::class, 'index2'])->name('fase2.index2');
Route::post('/fase2/cantar', [App\Http\Controllers\TareaController::class, 'cantar'])->name('fase2.cantar');


Route::get('/home/eliminar/{id}',[App\Http\Controllers\TareaController::class, 'eliminar'])->name('tareas.eliminar');;


Route::post('/home/agregar', [App\Http\Controllers\TareaController::class, 'agregar'])->name('tareas.agregar');

Route::post('/home/filtrar', [App\Http\Controllers\TareaController::class, 'filtrar'])->name('tareas.filtrar');
Route::post('/home/filtrarorden', [App\Http\Controllers\TareaController::class, 'filtrarOrden'])->name('tareas.filtrarOrden');
