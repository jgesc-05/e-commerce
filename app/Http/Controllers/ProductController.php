<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
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

    public function store(Request $request){

        $product = new Product();

        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');

        $product->save();

        return "SAVED PRODUCT!";
    }
}
