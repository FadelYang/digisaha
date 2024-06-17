<?php

namespace App\Providers;

use App\Interfaces\ProductAndServiceInterface;
use App\Interfaces\UserInterface;
use App\Repositories\ProductAndServiceRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductAndServiceInterface::class, ProductAndServiceRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
