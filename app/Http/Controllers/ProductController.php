<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    //Lista de productos
    function index()
    {
        return view('products.index');
    }

    //Formulario de creación de productos
    public function create()
    {
        return view('products.create');
    }

    //Productos por id
    public function show($id, $category = null)
    {
        return view('products.show');
    }
}
