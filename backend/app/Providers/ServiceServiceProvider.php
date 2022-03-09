<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Services\BudgetServiceInterface::class,
            function ($app) {
                return new \App\Services\BudgetService(
                    $app->make(\App\Repositories\BudgetRepositoryInterface::class)
                );
            },
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
