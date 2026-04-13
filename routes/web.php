<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;

// 1. Página principal
Route::get('/', function () {
    return view('inicio'); 
});

// 2. Catálogo de la tienda
// Usamos el controlador para que gestione la carga de la vista
Route::get('/tienda', [TiendaController::class, 'index'])->name('tienda.index');

// 3. Detalle de producto (La que arregla el error 500)
Route::get('/producto/{id}', [TiendaController::class, 'show'])->name('producto.show');