<?php

use Illuminate\Http\Request;

use App\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});
Route::post('/login', 'UserController@login');

Route::get('/posts', 'PostController@getPosts');


Route::get('/posts/{postId}', 'PostController@show');

Route::post('/post', 'PostController@create');


Route::get('/categories', 'CategoryController@getAll');