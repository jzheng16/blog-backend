<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| 1. request helper function allows us to grab query string
| 2. Curly braces indicates query params 
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{postId}', 'PostController@show');
Route::get('/posts', 'PostController@getAll');





Route::get('login', function () {
    return view('login');
});