<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProcessController;
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

Route::post('/add',[BasketController::class, 'add'])->middleware('auth')->name('add');

Route::get('/add', function(){
    return redirect('/');
});

Route::post('/remove',[BasketController::class, 'remove'])->name('remove');

Route::get('/remove', function(){
    return redirect('/');
});

//route for contact us page to display
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');

Route::get('/checkout', function(){
    return redirect('/');
});

Route::get('/success',[PaymentController::class, 'success'])->name('success');

// route for admin register access
Route::get('/admin-register-access', function () {
    return view('admin-register-access');
})->name('admin-register-access');

// New route for validating admin password
Route::post('/admin-register', [RegisterController::class, 'validateAdminPassword'])->name('admin-register');

//route for order processing for admins
Route::get('/process', [ProcessController::class, 'process'])->name('process');

// route to change the order status from placed to outgoing
Route::post('/processing', [ProcessController::class, 'processing'])->name('processing');


Route::get('/processing', function(){
    return redirect('/');
});
?>
