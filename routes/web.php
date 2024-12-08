<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', action: [ProductController::class, 'productsHome'])->name('home');

// category pages
Route::get('/men', action: [ProductController::class, 'productsMen'])->name('men');

Route::get('/women', action: [ProductController::class, 'productsWomen'])->name('women');

Route::get('/kids', action: [ProductController::class, 'productsKids'])->name('kids');

Route::get('/accessories', action: [ProductController::class, 'productsAccessories'])->name('accessories');

// route for logging out
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// route for about us
Route::get('/about-us', function(){
    return view('about-us');
})->name('about-us');

// route for basket
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');

Route::get('/product/{id}', action: [ProductController::class, 'productSingle'])->name('product');

//route for the page that displays searched items
Route::get('/search', action: [ProductController::class, 'productSearch'])->name('search');

Route::post('/add',[BasketController::class, 'add'])->name('add');

Route::post('/remove',[BasketController::class, 'remove'])->name('remove');