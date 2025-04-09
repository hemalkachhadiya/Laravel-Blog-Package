<?php

namespace Smartttech\Blog;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // load view or component
        $this->loadViewsFrom(__DIR__.'/resources/views', 'blog');
        // load the component
        Blade::component('blog::components.blog-listing', 'blog-listing');

        // Load Routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');


        // Load Migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {

    }
}
