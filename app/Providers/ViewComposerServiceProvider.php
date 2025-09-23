<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\categories;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Make categories available to all views that include the menu
        View::composer('includes.menu', function ($view) {
            $categories = categories::with('subCategories')->where('status', 1)->get();
            $view->with('categories', $categories);
        });
    }
}
