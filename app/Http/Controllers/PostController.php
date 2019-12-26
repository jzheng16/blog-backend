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


        return view('post', [
            'post' => $post
        ]);
    }


    public function getAll()
    {
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts
        ]);
    }
}