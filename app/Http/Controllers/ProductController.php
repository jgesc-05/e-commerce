<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    //Lista de productos
    function index()
    {
        return "Lista de productos";
    }

    //Formulario de creación de productos
    public function create()
    {
        return "Formulario de creación de productos";
    }

    //Productos por id
    public function show($id, $category = null)
    {
        if ($category === null) {
            return "Detalle del producto: " . $id;
        }
    
        return "Detalle del producto: " . $id . "; de la categoría: " . $category;
    }
}
