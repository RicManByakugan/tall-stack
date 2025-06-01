<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/product-controller', function () {
    return view('products-controller');
});



Route::get('/cproducts', [ProductController::class, 'index'])->name('cproducts.index');
Route::post('/cproducts', [ProductController::class, 'store'])->name('cproducts.store');

