<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
 
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
              dd($request->post_id);
        // Assuming you have a Post model and you are passing post_id from the frontend
        $post_id = $request->input('post_id');

        // Create a new comment in the database
        $comment = Comment::create([
            'user_id' => $user_id,
            'post_id' => $post_id,
            'comment' => $request->input('comment'),
        ]);

        // You can return a response here if needed
        return response()->json(['comment1' => $comment]);
    }
    
}
