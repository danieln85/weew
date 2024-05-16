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


Route::get('/', [HomeController::class, 'index'])->name('home');

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

    Route::get('tienda/admin/crear-producto', [ProductController::class, 'create'])->name('product-create');    
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::resource('product', ProductController::class)->except(['index', 'productDetails']);
});


Route::put('/user-profile', [UserProfileController::class, 'update'])->name('user-profile.update');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

Route::get('/busqueda', [SearchController::class, 'index'])->name('search');





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
