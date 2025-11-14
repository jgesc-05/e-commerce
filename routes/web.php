<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');

    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::delete('/products/delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');

    Route::get('/products', [ProductController::class, 'table'])->name('admin.products.table');

    //Tabla categorias
    Route::get('/category', [CategoryController::class, 'table'])->name('admin.category.table');

    //Brands
    Route::get('/brands/create', [BrandController::class, 'create'])->name('admin.brands.create');
    Route::post('/brands/store', [BrandController::class, 'store'])->name('admin.brands.store');
    Route::get('/brands', [BrandController::class, 'table'])->name('admin.brands.table');
    Route::delete('/brands/delete/{id}', [BrandController::class, 'delete'])->name('admin.brands.delete');
});


Route::get('/{id}/{category?}', [ProductController::class, 'show']);
