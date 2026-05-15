<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteController;
use App\Models\Product;

Route::get('/login', function () {

    if (Auth::check())
        return redirect('/product');

    return view('login');
})->name('login');

Route::post('/auth', [SiteController::class, 'auth']);

Route::get('/logout', function () {

    Auth::logout();

    return redirect('/login');
});

Route::get('/product', function () {

    $products = Product::all();

    return view('products.index', compact('products'));
})->middleware('auth');
