<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomepageController;

// Homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Single static page
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');

// Single blog page
Route::get('/blog/{slug}', [PageController::class, 'blog'])->name('blog.show');

// Homepage 
Route::get('/', [HomepageController::class, 'index'])->name('home');