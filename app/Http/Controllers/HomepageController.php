<?php

namespace App\Http\Controllers;

use App\Models\Homepage;

class HomepageController extends Controller
{
    public function index()
    {
        $homepage = Homepage::first(); // We only have one row
        return view('home', compact('homepage'));
    }
}
