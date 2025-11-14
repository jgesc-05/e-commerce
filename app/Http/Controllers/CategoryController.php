<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        //dd($request->all());

        Category::create(['name' => $request->get('name')]);

        return "Guardado!";
    }

    public function table()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);

        return view('admin.category.table', compact('categories'));
    }
}
