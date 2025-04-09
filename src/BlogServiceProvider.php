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
          Blade::component('blog::components.blog-details', 'blog-details');

          // Load Routes
          $this->loadRoutesFrom(__DIR__.'/routes/api.php');
          $this->loadRoutesFrom(__DIR__.'/routes/web.php');


          // Load Migrations
          $this->loadMigrationsFrom(__DIR__.'/database/migrations');

          $this->publishes([
              __DIR__.'/resources/views/stubs/blog_details.stub' => resource_path('views/components/blog-details.blade.php'),
          ], 'blog-views');

    }

    public function register()
    {

    }
}
