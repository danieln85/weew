<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WompiController;
use App\Http\Controllers\OrderController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/gracias', [OrderController::class, 'confirmation'])->name('confirmation');

Route::get('/nosotros', [AboutUsController::class, 'index'])->name('about-us');

Route::resource('contact', ContactController::class);
Route::get('/contactanos', [ContactController::class, 'index'])->name('contact-us');
Route::post('store', [ContactController::class, 'store'])->name('store');

Route::resource('newsletter', newsletterController::class);
Route::post('store', [newsletterController::class, 'store'])->name('store');


Route::get('consumo-responsable/detalles-post/{id?}', [BlogController::class, 'blogDetails'])->name('blog-details');
Route::get('/consumo-responsable', [BlogController::class, 'index'])->name('blog');


Route::get('/tienda', [ProductController::class, 'index'])->name('shop');
Route::get('productos/detalles-producto/{id?}', [ProductController::class, 'productDetails'])->name('product-details');



Route::middleware(['blogAuth:admin,editor'])->group(function () {
    Route::get('blog/admin/crear-post', [BlogController::class, 'create'])->name('blog-create');
    Route::resource('blog', BlogController::class)->except(['index', 'blogDetails']);

 
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::get('tienda/admin/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('tienda/admin/crear-producto', [ProductController::class, 'create'])->name('product-create');
    Route::get('tienda/admin/crear-producto', [ProductController::class, 'create'])->name('product-create'); 
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('product.update');

Route::delete('eliminar/producto/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    
});



Route::middleware(['auth'])->group(function () {
    Route::get('carrito', [CartController::class, 'index'])->name('cart.index');
    Route::post('cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
    Route::put('cart/update/{cartItemId}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('cart/remove/{cartItemId}', [CartController::class, 'remove'])->name('cart.remove');
});


Route::put('/user-profile', [UserProfileController::class, 'update'])->name('user-profile.update');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

Route::get('/busqueda', [SearchController::class, 'index'])->name('search');

Route::get('/datos-de-envio', [CheckoutController::class, 'summary'])->name('summary');



Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');



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
