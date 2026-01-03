<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Blog;

class PageController extends Controller
{
    // Homepage
    public function home()
    {
        $latestBlogs = Blog::latest()->take(5)->get(); // latest 5 blogs
        $pages = Page::all(); // for navigation links
        $seoTitle = 'Welcome to My Website';
        $seoDescription = 'Latest blogs and pages on My Website';

        return view('home', compact('latestBlogs', 'pages', 'seoTitle', 'seoDescription'));
    }

    // Single static page
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $pages = Page::all();
        $seoTitle = $page->seo_title ?? $page->title;
        $seoDescription = $page->seo_description ?? substr(strip_tags($page->content), 0, 160);

        return view('page', compact('page', 'pages', 'seoTitle', 'seoDescription'));
    }

    // Single blog page
    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $pages = Page::all();
        $seoTitle = $blog->title;
        $seoDescription = substr(strip_tags($blog->content), 0, 160);

        return view('blog', compact('blog', 'pages', 'seoTitle', 'seoDescription'));
    }
}