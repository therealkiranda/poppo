<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Blog;

class PageController extends Controller
{
    // Homepage
    public function home()
    {
        $homepage = Page::where('slug', 'home')->first(); // create a "home" page in admin
        $latestBlogs = Blog::latest()->take(5)->get();

        return view('home', compact('homepage', 'latestBlogs'));
    }

    // Single static page
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('page', compact('page'));
    }

    // Single blog page
    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog', compact('blog'));
    }
}