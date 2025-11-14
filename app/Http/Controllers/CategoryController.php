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

        $request->validate([
            'name' => 'required|string|max:255',
        ]);


        $category = new Category();

        $category->name = $request->get('name');
        $category->save();

        return redirect()->route('admin.products.table');
    }

    public function delete(int $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('admin.category.table');

    }

    public function table()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);

        return view('admin.category.table', compact('categories'));
    }
}
