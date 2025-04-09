@php
    $perPage = request('per_page', 6); // default
    $blogs = \Smartttech\Blog\Models\Blog::paginate($perPage)->withQueryString();
@endphp

<div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
        <h2 class="fw-bold text-primary">Latest Blogs</h2>

        <form method="GET" class="d-flex align-items-center gap-2">
            <label for="per_page" class="form-label m-0">Show:</label>
            <select class="form-select form-select-sm w-auto" name="per_page" id="per_page" onchange="this.form.submit()">
                <option value="6" {{ $perPage == 6 ? 'selected' : '' }}>6</option>
                <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
            </select>
        </form>
    </div>

    <div class="row g-4">
        @forelse ($blogs as $blog)
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark fw-bold">{{ $blog->title }}</h5>
                        <p class="card-subtitle text-muted mb-2 small">{{ $blog->created_at->format('d M, Y') }}</p>
                        <p class="card-text text-muted mb-4">{{ \Illuminate\Support\Str::limit($blog->content, 120) }}</p>
                        <div class="mt-auto text-end">
                            <a href="{{ url('/blog/' . $blog->slug) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">No blogs found.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-5 d-flex justify-content-center">
        {{ $blogs->links('pagination::bootstrap-5') }}
    </div>

</div>
