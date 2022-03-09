<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;

/**
 * アプリ全体で定義するルート管理
 */
class YosanRouteServiceProvider extends RouteServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::pattern('id', '[0-9]+');

        parent::boot();
    }
}
