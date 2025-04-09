<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">
    @foreach (\Smartttech\Blog\Models\Blog::all() as $blog)
        <div class="col">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <div class="card-body">
                    <h5 class="card-title text-primary">{{ $blog->title }}</h5>
                    <p class="card-text text-muted">
                        {{ \Illuminate\Support\Str::limit($blog->content, 100) }}
                    </p>
                </div>
                <div class="card-footer bg-white border-0 text-end">
                    <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
