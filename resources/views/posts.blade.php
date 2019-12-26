@extends('layout')

@section('content')


<section class="posts">
  <!-- With the foreach directive (@), we have access to a $loop object
       that provides us meta information about the loop we are currently in
       Examples include: index, iteration, remaining, count, first, last, depth, parent
  -->
  @foreach($posts as $post)
  <div class="post card">
    <h1> {{$post['title']}} </h1>
    <p> {{$post['description']}} </p>
    <p> Published on: {{$post['published_at']}} </p>
  </div>
  @endforeach

</section>