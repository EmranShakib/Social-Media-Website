<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             'image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
             
        ]);
        // image upload
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $imageName=$image->getClientOriginalName();
            $image->storeAs('public/image/posts',$imageName);
        }
        // data store
        $data=new Post();
        $data->user_id=Auth::user()->id;
        $data->title=$request->input('title');
        $data->content=$request->input('content');
        $data->image=$imageName??'';


        $data->save();

        return redirect()->back()->with('success', 'Post Created Successfully.');
    }

    }

    /**
     * Display the specified resource.
     */
    function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
     function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
     function destroy(string $id)
    {
        //
    }

