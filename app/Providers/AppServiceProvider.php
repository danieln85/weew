<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Product; // Importa el modelo Product

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // Comparte los productos con todas las vistas
        view()->composer('*', function ($view) {
            $products_all = Product::paginate(15);
            $products_all->withPath('/tienda');
        
            // Obtiene los productos destacados
            $destacados = Product::where('reputacion', 'destacado')->take(3)->get();
        
            $view->with('products_all', $products_all)->with('destacados', $destacados);
        });
    }
}