<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Display a listing of comments for a specific post
    public function index()
    {
        //$post = Post::with('comments')->find($postId);
        return response()->json(Post::with('user','post')->get());
    }

    // Show the form for creating a new comment
    public function create($postId)
    {
        $post = Post::find($postId);
        return view('comments.create', compact('post'));
    }

    // Store a newly created comment in the database
    public function store(Request $request, $postId)
    {
        $request->validate([
            'body' => 'required',
        ]);

        Comment::create([
            'body' => $request->body,
            'post_id' => $postId,
        ]);

        return redirect()->route('comments.index', $postId);
    }

    // Show the form for editing an existing comment
    public function edit($postId, $id)
    {
        $comment = Comment::find($id);
        return view('comments.edit', compact('comment'));
    }

    // Update the specified comment in the database
    public function update(Request $request, $postId, $id)
    {
        $comment = Comment::find($id);

        $request->validate([
            'body' => 'required',
        ]);

        $comment->update($request->all());
        return redirect()->route('comments.index', $postId);
    }

    // Delete the specified comment from the database
    public function destroy($postId, $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('comments.index', $postId);
    }
}
