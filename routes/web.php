<?php

use Illuminate\Support\Facades\Route;

// 1. Esta ruta controla la página principal (Home)
Route::get('/', function () {
    return view('inicio'); 
});

// 2. Esta ruta controla la página de tus diseños
Route::get('/tienda', function () {
    return view('tienda');
});