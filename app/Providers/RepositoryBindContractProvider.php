<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryBindContractProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Contracts\BaseContract::class,
            \App\Repositories\BaseRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Contracts\UserContract::class,
            \App\Repositories\UserRepository::class,
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
