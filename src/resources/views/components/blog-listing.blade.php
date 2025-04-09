<div>
    <h2>Blog Listing</h2>
    <ul>
        @foreach (\Smartttech\Blog\Models\Blog::all() as $blog)
            <li><strong>{{ $blog->title }}</strong> - {{ $blog->content }}</li>
        @endforeach
    </ul>
</div>
