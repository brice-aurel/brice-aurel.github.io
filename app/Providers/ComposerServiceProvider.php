<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['index', 'products.indexProducts', 'products.showProduct', 'Categories.showCategory'],
            function ($view) {
                $view->with('categories', Category::all());
            }
        );
    }
}
