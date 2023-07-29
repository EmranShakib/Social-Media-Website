<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\User; 
use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    public function index()
    {
        $posts=Post::latest()->get();
        $users=User::latest()->get();
        return view('frontend.dashboard',compact('posts','users'));
    }
}
