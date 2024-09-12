<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display a listing of posts
    public function index()
    {
        return response()->json(Post::with('user', 'category')->get());
    }
    public function store(Request $request)
    {
        $request->validate([
            'tittle' =>'required',
            'body' =>'required',
            'user_id' =>'required',
            'category_id' =>'required',
        ]);
        $post = Post::create($request->only('tittle','body','user_id','category'));
        return response()->json($post,201);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'tittle' =>'required',
            'body' =>'required',
            'user_id' =>'required',
            'category_id' =>'required',
        ]);
        $post->update($request->only('tittle', 'body', 'user_id', 'category'));
        return response()->json($post);
    }
    }


    // Store a newly created post in the database
    //public function store(Request $request)
   // {
        // Validate the request
     //   $request->validate([
       //     'title' => 'required|string|max:255',
         //   'body' => 'required|string',
           // 'user_id' => 'required|exists:users,id',
            //'category_id' => 'required|exists:categories,id',
        //]);

        // Store the post using only validated fields
        //Post::create($request->only('title', 'body', 'user_id', 'category_id'));

       // return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    //}

    // Show the form for editing an existing post
    public function edit(Post $post)
    {
        $users = User::all();
        $categories = Category::all();
        return view('posts.edit', compact('post', 'users', 'categories'));
    }

    // Update the specified post in the database
    public function update(Request $request, Post $post)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Update the post using only validated fields
        $post->update($request->only('title', 'body', 'user_id', 'category_id'));

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    // Delete the specified post from the database
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

    // Display a specific post
    public function show(Post $post)
    {
        $post->load('user', 'category', 'comments');
        return view('posts.show', compact('post'));
    }
}
