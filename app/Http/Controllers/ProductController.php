<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        // Obtener las categorías para mostrarlas como filtros
        $categories = Category::all();
    
        // Obtener el id de categoría enviado por la URL
        $categoryId = $request->input('category');
    
        // Construir la consulta base
        $query = Product::query();
    
        // Si se envía categoría, filtrar por esa categoría
        if (!empty($categoryId) && $categoryId !== 'all') {
            $query->where('category_id', $categoryId);
        }
    
        // Paginar resultados
        $products = $query->paginate(12)->withQueryString();
    
        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
            'activeCategory' => $categoryId, // saber cuál está activa
        ]);
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

    public function delete(int $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin.products.table');

    }

    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.table', ['products' => $products]);
    }
}
