<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\ConfigRepository::class,
            \App\Repositories\ConfigRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\PrincipalRepository::class,
            \App\Repositories\PrincipalRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\AlbumRepository::class,
            \App\Repositories\AlbumRepositoryEloquent::class);
    }
}
