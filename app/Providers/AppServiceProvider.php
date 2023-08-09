<?php

namespace App\Providers;

use App\Models\Categorys;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $CateAll =  Categorys::all();

        View::share([
            'cateAll' => $CateAll,
        ]);
    }
}
