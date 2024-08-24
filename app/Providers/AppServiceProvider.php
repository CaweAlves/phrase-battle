<?php

namespace App\Providers;

use App\Repository\Eloquent\{FriendshipRepository, FriendshipRepositoryInterface};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FriendshipRepositoryInterface::class, FriendshipRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
