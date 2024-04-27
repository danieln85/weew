<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $recent_posts = Blog::latest()->take(3)->get();
       
        return view('about-us', compact('recent_posts'));
    }
}
