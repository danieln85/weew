<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/contactanos', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('/tienda', [ShopController::class, 'index'])->name('shop');
Route::get('/detalles-producto', [ProductsController::class, 'index'])->name('products');






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
    Route::get('/tablero-de-usuario', function () {
        return view('user-dashboard');
    })->name('user-dashboard');
});
