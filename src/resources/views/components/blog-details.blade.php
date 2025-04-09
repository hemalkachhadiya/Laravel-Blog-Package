{{-- @extends('layouts.app')

@section('content') --}}
<div class="container mt-4">
    <h2>{{ $blog->title }}</h2>
    <p class="text-muted">Published on {{ $blog->created_at->format('d M Y') }}</p>
    <hr>
    <div>
        {!! nl2br(e($blog->content)) !!}
    </div>
</div>
{{-- @endsection --}}
