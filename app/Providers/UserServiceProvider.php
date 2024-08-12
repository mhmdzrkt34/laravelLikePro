<?php

namespace App\Providers;

use App\Services\User\IUserService;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
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
        //

        $this->app->bind(IUserService::class,UserService::class);
    }
}
