<?php

namespace Smartttech\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
                // Load Routes
        // $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        // // Load Migrations
        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {

    }
}
