<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use DB class

use DB;
use App\Post;

class PostController extends Controller
{
    //
    public function show($postId)
    {
        // The \ indicates the global namespace, removing it will assume local namespace 
        // $post = DB::select('SELECT * FROM posts where id = ?', [$postId]);

        //NOT WORKING
        $post = Post::where('id', $postId)->firstOrFail();

        // dd($post);


        return $post;
    }


    public function getAll()
    {
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function create(Request $request)
    {

        $title = $request->input('title');
        $description = $request->input('description');
        // Hardcoded for now
        $user_id = 1;
        // Instantiate new post object
        $post = new Post;
        $post->title = $title;
        $post->description = $description;
        $post->user_id = $user_id;
        $post->save();
        return response()->json([
            'success' => TRUE,
            'error_message' => null
        ], 201);
    }
}