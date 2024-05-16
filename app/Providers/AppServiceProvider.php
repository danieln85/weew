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
            $products_all = Product::paginate(3);
            $view->with('products_all', $products_all);
        });
    }
}