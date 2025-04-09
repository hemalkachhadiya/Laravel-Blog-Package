@php
    $slug = request()->route('slug'); // grab from URL
    $blog = \Smartttech\Blog\Models\Blog::where('slug', $slug)->firstOrFail();
@endphp

<div class="container py-4">
    <h1 class="mb-3">{{ $blog->title }}</h1>
    <div class="text-muted">
        {!! nl2br(e($blog->content)) !!}
    </div>
</div>
