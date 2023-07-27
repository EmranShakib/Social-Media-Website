<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    public function index()
    {
        $posts=Post::latest()->get();
        return view('frontend.dashboard',compact('posts'));
    }
}
