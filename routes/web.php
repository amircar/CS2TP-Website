<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ReviewController;
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

Route::get('/stocks', [StockController::class, 'update'])->name('stocks');

Route::post('/quantity', [StockController::class, 'quantity'])->name('quantity');

Route::get('/quantity', function(){
    return redirect('/');
});

//route for reviews
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/new',[StockController::class, 'new'])->name('new');

Route::post('/new',[StockController::class, 'create'])->name('create');

Route::get('/faq-orders',[FAQController::class, 'orders'])->name('faq-orders');

Route::get('/faq-other',[FAQController::class, 'other'])->name('faq-other');

Route::get('/faq-products',[FAQController::class, 'products'])->name('faq-products');

Route::get('/faq-promotions',[FAQController::class, 'promotions'])->name('faq-promotions');

Route::get('/faq-returns',[FAQController::class, 'returns'])->name('faq-returns');

Route::get('/account-details',[AccountController::class, 'details'])->name('account-details');

Route::get('/password-change',[AccountController::class, 'passwordChange'])->name('password-change');

Route::get('/order-history',[AccountController::class, 'orderHistory'])->name('order-history');

Route::get('/payment-info',[AccountController::class, 'paymentInfo'])->name('payment-info');

Route::get('/settings',[AccountController::class, 'settings'])->name('settings');

Route::get('/shipping',[AccountController::class, 'shipping'])->name('shipping');

Route::put('/update-details', [AccountController::class, 'updateDetails'])->name('update-details');

Route::put('/update-password', [AccountController::class, 'updatePassword'])->name('update-password');

Route::post('/update-shipping', [AccountController::class, 'updateShipping'])->name('update-shipping');

Route::delete('/deleteAccount', [AccountController::class, 'deleteAccount'])->name('deleteAccount');
?>
