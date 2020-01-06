<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        $json = File::get('database/data/posts.json');
        $posts = json_decode($json);
        foreach ($posts as $post) {

            Post::create([
                'title' => $post->title,
                'description' => $post->description,
                'published_at' => $post->published_at,
                'user_id' => $post->user_id,
                'category_id' => $post->category_id,
            ]);
        }
    }
}