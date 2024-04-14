<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogController;
// use App\Http\Controllers\ProductsController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/nosotros', [AboutUsController::class, 'index'])->name('about-us');

Route::resource('contact', ContactController::class);
Route::get('/contactanos', [ContactController::class, 'index'])->name('contact-us');
Route::post('store', [ContactController::class, 'store'])->name('store');

Route::resource('newsletter', newsletterController::class);
Route::post('store', [newsletterController::class, 'store'])->name('store');

Route::resource('blog', BlogController::class);
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/crear-blog', [BlogController::class, 'create'])->name('blog-create');
Route::post('store', [BlogController::class, 'store'])->name('store');



// Route::get('/tienda', [ShopController::class, 'index'])->name('shop');

// Route::get('/detalles-producto', [ProductsController::class, 'productDetails'])->name('product-details');




Route::get('/terminos-y-condiciones', function () {
    return view('terms');
})->name('terms');

Route::get('/politicas-de-privacidad', function () {
    return view('policy');
})->name('policy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('user-dashboard');
});
