<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
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
        $brands = Brand::all();
        $categories = Category::all(); 

        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }

    //Productos por id
    public function show($id, $category = null)
    {
        return view('products.show');
    }
}
