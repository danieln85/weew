<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        $recent_posts = Blog::latest()->take(3)->get();
        return view('home', compact('recent_posts'));
    }

}
