<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Grupo de rutas de productos, con la anotación prefix se agrega el prefijo products a las rutas, que hace innecesario agregar el prefijo products a cada ruta, con controller
//se agrega la anotación controller para que se pueda usar el controlador ProductController en las rutas.
Route::prefix('products')->controller(ProductController::class)->group(function(){
    
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}/{category?}', 'show');
});




