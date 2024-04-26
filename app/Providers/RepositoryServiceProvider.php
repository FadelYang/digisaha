<?php

namespace App\Providers;

use App\Interfaces\ProductAndServiceInterface;
use App\Repositories\ProductAndServiceRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductAndServiceInterface::class, ProductAndServiceRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
