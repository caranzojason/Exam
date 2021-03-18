<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Comments\CommentsRepository;
use App\Repositories\Comments\CommentsRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
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
        //this is where interface and class will be bind
        $this->app->bind(
            CommentsRepositoryInterface::class, 
            CommentsRepository::class
        );
    }
}
