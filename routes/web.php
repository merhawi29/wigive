<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('home');
});

// Route::get('/adminn', function () {
//     return view('admin.home');
// });

// Route::get('/product/add', function () {
//     return view('admin.product-add');
// });

//admin

    Route::middleware(['auth'])->group(function () {
        Route::get('/adminn', [AdminController::class, 'index'])->name('adminn');
        Route::get('/product', [AdminController::class, 'show'])->name('product');
        Route::post('/product/store', [AdminController::class, 'store'])->name('product.store');
        Route::get('/product/edit/{id}', [AdminController::class, 'edit'])->name('product.edit');
        Route::post('/product/update/{id}', [AdminController::class, 'update'])->name('product.update');
        Route::delete('/product/delete/{id}', [AdminController::class, 'destroy'])->name('product.delete');
    });
// search
Route::get('/producted', [SearchController::class, 'index'])->name('producted.index');
    Route::get('/producted/search', [SearchController::class, 'search'])->name('producted.search');

//product user
 Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/add', [ProductController::class, 'store'])->name('products.add');
Route::get('/products/show', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

// Route::get('/products/action', [ProductController::class, 'show'])->name('products.action');
//cart
// Route::middleware(['clear.cart'])->group(function () {
    Route::post('/cart/add', [CatagoryController::class, 'addToCart'])->name('cart.add')->middleware('auth');
    Route::get('/carts', [CatagoryController::class, 'showCart'])->name('cart.index');
    Route::delete('/cart/remove/{id}', [CatagoryController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/discard', [CatagoryController::class, 'discardCart'])->name('cart.discard');
Route::get('/payment', [CatagoryController::class, 'payment'])->name('payment')->middleware('auth');

// });
//Contact
Route::get('/Contact', [ContactController::class, 'index'])->name('Contact.index');
Route::post('/contact.store', [ContactController::class, 'store'])->name('contact.store');



Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


Route::post('/product/{id}', [ProductController::class, 'show'])->name('product.show');