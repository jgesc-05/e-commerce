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

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:999999.99',
            'category' => 'required|exists:category,id',
            'brand' => 'required|exists:brand,id'
        ]);


        $product = new Product();

        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');

        $product->save();

        return redirect()->route('admin.products.table');
    }

    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.table', ['products' => $products]);
    }
}
