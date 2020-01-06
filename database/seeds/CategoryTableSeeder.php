<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        $json = File::get('database/data/categories.json');
        $categories = json_decode($json);
        foreach ($categories as $category) {
            Log::debug(var_dump($category));
            Category::create([
                'id' => $category->id,
                'name' => $category->name,
                'description' => $category->description,
            ]);
        }
    }
}