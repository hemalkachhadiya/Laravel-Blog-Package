<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }
        .blog-container {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        .blog-title {
            font-size: 2.2rem;
            font-weight: bold;
        }
        .blog-date {
            color: #6c757d;
            font-size: 0.95rem;
        }
        .blog-content {
            margin-top: 25px;
            line-height: 1.8;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="blog-container">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-secondary mb-3">← Back</a>

            <h1 class="blog-title">{{ $blog->title }}</h1>
            <p class="blog-date">Published on {{ $blog->created_at->format('d M Y') }}</p>
            <hr>
            <div class="blog-content">
                {!! nl2br(e($blog->content)) !!}
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
