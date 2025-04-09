{{-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">
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
</div> --}}

@php
    $perPage = request('per_page', 6); // default 6 blogs
    $blogs = \Smartttech\Blog\Models\Blog::paginate($perPage)->withQueryString();
@endphp

<div class="d-flex justify-content-between align-items-center mt-4">
    <h4 class="mb-0">Blog Listing</h4>

    <!-- Per Page Dropdown -->
    <form method="GET">
        <div class="input-group input-group-sm" style="width: 200px;">
            <label class="input-group-text" for="per_page">Show</label>
            <select class="form-select" name="per_page" id="per_page" onchange="this.form.submit()">
                <option value="6" {{ $perPage == 6 ? 'selected' : '' }}>6 per page</option>
                <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10 per page</option>
                <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25 per page</option>
                <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50 per page</option>
                <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100 per page</option>
            </select>
        </div>
    </form>
</div>

<hr>

<!-- Blog Cards -->
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($blogs as $blog)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-primary">{{ $blog->title }}</h5>
                    <p class="card-text text-muted mb-4">
                        {{ \Illuminate\Support\Str::limit($blog->content, 100) }}
                    </p>
                    <div class="mt-auto text-end">
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Pagination -->
<div class="mt-4 d-flex justify-content-center">
    {{ $blogs->links('pagination::bootstrap-5') }}
</div>
