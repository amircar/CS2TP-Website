<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Auth::routes();


Route::get('/home', action: [ProductController::class, 'products4'])->name('home');


Route::get('/', action: [ProductController::class, 'products4']);

// mens routing page, uses the ProductController function to disply home page with 3 products right now
Route::get('/mens', action: [ProductController::class, 'products4'])->name('mens');

//route for the page that displays searched items
Route::get('/search', action: [ProductController::class, 'productSearch'])->name('search');

// route for logging out
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// route for about us
Route::get('/about-us', function(){
    return view('about-us');
});

// route for basket
Route::get('/basket', function(){
    return view('basket');
});

// route for an individual product displaying
Route::get('/product', function(){
    return view('product');
});

