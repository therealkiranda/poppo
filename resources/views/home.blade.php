@extends('layouts.app')

@section('content')

@if($homepage)
<!-- Hero Section with Video Background -->
<section style="position: relative; height: 90vh; overflow: hidden; display:flex; align-items:center; justify-content:center; text-align:center; color:white;">
    <!-- Video -->
    <video autoplay muted loop style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:0;">
        <source src="{{ asset('storage/' . $homepage->hero_video) }}" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div style="position:absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); z-index:1;"></div>

    <!-- Foreground Content -->
    <div style="position: relative; z-index:2; max-width:700px;">
        <h1 style="font-size:3rem; font-weight:bold; margin-bottom:20px;">{{ $homepage->hero_title }}</h1>
        <p style="font-size:1.3rem; margin-bottom:30px;">{!! $homepage->hero_subtitle !!}</p>

        <div style="display:flex; gap:20px; flex-wrap:wrap; justify-content:center;">
            <a href="{{ $homepage->host_cta_link }}" target="_blank"
               style="background:#EC4899; color:white; font-weight:bold; padding:15px 35px; border-radius:50px; font-size:1.1rem; box-shadow:0 5px 15px rgba(236,72,153,0.4); text-decoration:none; transition:0.3s;">Be a Host</a>
            <a href="{{ $homepage->agent_cta_link }}" target="_blank"
               style="background:#F472B6; color:white; font-weight:bold; padding:15px 35px; border-radius:50px; font-size:1.1rem; box-shadow:0 5px 15px rgba(244,114,182,0.4); text-decoration:none; transition:0.3s;">Be an Agent</a>
        </div>
    </div>
</section>

<!-- Earnings Section -->
<section style="padding:50px 20px; text-align:center; background:#FFF0F6; border-radius:15px; margin:50px auto; max-width:1000px;">
    {!! $homepage->earnings_text !!}
</section>

<!-- Latest Blogs Section -->
<section style="max-width:1200px; margin:0 auto 50px; padding:0 20px;">
    <h2 style="text-align:center; font-size:2rem; margin-bottom:30px; color:#111827;">Latest Blogs</h2>
    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:25px;">
        @foreach($latestBlogs as $blog)
            <div style="border-radius:15px; overflow:hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: transform 0.3s; background:white;">
                @if($blog->featured_image)
                    <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" style="width:100%; height:180px; object-fit:cover;">
                @endif
                <div style="padding:20px;">
                    <h3 style="margin-top:0; font-size:1.3rem; color:#111827;">
                        <a href="{{ route('blog.show', $blog->slug) }}" style="text-decoration:none; color:inherit;">{{ $blog->title }}</a>
                    </h3>
                    <p style="color:#6B7280;">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 130) }}</p>
                    <a href="{{ route('blog.show', $blog->slug) }}" style="color:#EC4899; font-weight:bold; text-decoration:none;">Read More →</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif

@endsection