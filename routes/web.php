<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Ruta productos
Route::get('/products', function () {
    return "Lista de productos";
});

Route::get('/products/create', function ()  {
    return "Formulario de creación de productos";
});

Route::get('/products/{id}/{category?}', function ($name, $category = null)  {

    if ($category === null) {
        return "Detalle del producto: " . $name;
    }

    return "Detalle del producto: " . $name . "; de la categoría: " . $category;
});
