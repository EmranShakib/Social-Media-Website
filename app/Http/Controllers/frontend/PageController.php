<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profile()
    {
        return view('frontend.profile.profile_page');
    }
    public function favourite()
    {
        return view('frontend.favourites.favourites');
    }
}
