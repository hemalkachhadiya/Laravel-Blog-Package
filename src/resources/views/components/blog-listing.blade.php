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
    {{ dd($blog->content) }}
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-primary">{{ $blog->title }}</h5>
                    <p class="card-text text-muted mb-4">
                        {{ \Illuminate\Support\Str::limit($blog->content, 100) }}
                    </p>
                    <div class="mt-auto text-end">
                        <button
    class="btn btn-sm btn-outline-primary"
    data-bs-toggle="modal"
    data-bs-target="#blogModal"
    data-title="{{ $blog->title }}"
    data-content="{{ htmlspecialchars($blog->content, ENT_QUOTES) }}"
>
    Read More
</button>

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
{{-- Model --}}
<div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="blogModalLabel">Blog Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="blogContent">Loading...</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    var blogModal = document.getElementById('blogModal');
    blogModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var title = button.getAttribute('data-title');
        var content = button.getAttribute('data-content');

        blogModal.querySelector('.modal-title').textContent = title;
        blogModal.querySelector('#blogContent').innerHTML = content;
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

