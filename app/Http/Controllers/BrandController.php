<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function create(){
        return view('admin.brands.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $brand = new Brand();

        $brand->name = $request->get('name');
        $brand->save();

        return redirect()->route('admin.brands.table');
    }

    public function delete(int $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->delete();

        return redirect()->route('admin.brands.table');

    }

    public function table()
    {
        $brands = Brand::orderBy('id', 'desc')->paginate(10);

        return view('admin.brands.table', compact('brands'));
    }
}
