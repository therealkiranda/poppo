@extends('layouts.app')

@section('content')
<h2>Latest Blogs</h2>

@foreach($latestBlogs as $blog)
    <div class="blog-card">
        <h3><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
        @if($blog->featured_image)
            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}">
        @endif
        <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 150) }}</p>
    </div>
@endforeach
@endsection