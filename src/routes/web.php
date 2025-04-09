<?php

use Illuminate\Support\Facades\Route;
use Smartttech\Blog\Models\Blog;

Route::get('/blog/{slug}', function ($slug) {
    $blog = Blog::where('slug', $slug)->firstOrFail();
    return view('components.blog-details', compact('blog'));
});
