<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seoTitle ?? 'My Website' }}</title>
    <meta name="description" content="{{ $seoDescription ?? '' }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        header, footer { background: #f5f5f5; padding: 10px 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; }
        main { padding: 20px; }
        img { max-width: 100%; height: auto; }
        .blog-card { border:1px solid #ddd; padding:10px; margin-bottom:10px; border-radius:5px; }
    </style>
</head>
<body>
    <header>
        <h1><a href="{{ route('home') }}">My Website</a></h1>
        <nav>
            @foreach($pages ?? [] as $page)
                <a href="{{ route('page.show', $page->slug) }}">{{ $page->title }}</a>
            @endforeach
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Website</p>
    </footer>
</body>
</html>