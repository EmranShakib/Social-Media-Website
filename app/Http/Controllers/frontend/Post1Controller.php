<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
     
    public function store(Request $request)
    {

        // image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/image/posts', $imageName);
        }
        // data store
        $data = new Post();
        $data->user_id = Auth::user()->id;
        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->image = $imageName ?? "";

        $data->save();

        return redirect()->back()->with('success', 'Post Created Successfully.');
    }

    public function show($id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
         
    }

}