<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use DB class

use DB;
use App\Post;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    //
    public function show($postId)
    {
        // The \ indicates the global namespace, removing it will assume local namespace 
        // $post = DB::select('SELECT * FROM posts where id = ?', [$postId]);

        //NOT WORKING
        // $post = Post::where('id', $postId)->firstOrFail();
        $post = Post::with(['category', 'user'])->where('id', $postId)->firstOrFail();



        return $post;
    }


    public function getPosts(Request $request)
    {
        info('This is some useful information.');


        $page = $request->query('page');
        $results = $request->query('results');


        if (!$page && !$results) {
            $posts = Post::join('category', 'category.id = posts.category_id')->all();
            info(print_r($posts, TRUE));
            return $posts;
        }

        $posts = DB::table('posts')
            ->join('category', 'posts.category_id', '=', 'category.id')
            ->select('*', 'posts.id as id', 'posts.description as description', 'category.id as category_id', 'category.name as category_name')
            ->orderBy('posts.id', 'DESC')
            ->paginate($results);

        info(print_r($posts, TRUE));
        return $posts;
    }

    public function create(Request $request)
    {

        $title = $request->input('title');
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        \Log::info($category_id);
        // Hardcoded for now
        $user_id = 1;
        // Instantiate new post object
        $post = new Post;
        $post->title = $title;
        $post->description = $description;
        $post->user_id = $user_id;
        $post->category_id = $category_id;
        $post->published_at = now();

        $post->save();
        return response()->json([
            'success' => TRUE,
            'error_message' => null
        ], 201);
    }

    public function updatePost(Request $request, $post_id)
    {
        info(print_r($request->input(), TRUE));
        $update = Post::find($post_id)->update($request->input());
        return response()->json([
            'success' => $update,
            'error_message' => null
        ], 201);
    }
}