<?php

namespace App\Providers;

use App\Models\AboutUs;
use App\Models\IndexHomePage;
use App\Policies\AboutUsPolicy;
use App\Policies\IndexHomePagePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        // Registering Eloquent Model Policies
        Gate::policies(IndexHomePage::class, IndexHomePagePolicy::class);
        Gate::policies(AboutUs::class, AboutUsPolicy::class);
    }
}
