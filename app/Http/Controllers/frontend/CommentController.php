<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function comment(Request $request)
     {
         $comment=Comment::where('event_id',$request->eventId)->latest()->get();

        return response()->json(['status' => 'success', 'data' => $comment]);
     }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $comment= new Comment();

        $comment->user_id=Auth::user()->id;
        $comment->event_id=$request->eventId;
        $comment->comment=$request->comment;

        $comment->save();
        $comment = Comment::where('event_id', $request->eventId)->latest()->get();
        return response()->json(['status' => 'success', 'data' => $comment]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
