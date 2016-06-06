@extends('layouts.master')
@section('material_script')
    <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <link rel="stylesheet" href="/css/main.css">

@stop
@section('content')
<div class="row">
    <div class="z-depth-1 col s12 m9 l9 #ffffff white">
        <h3 class="index_posts">{{{$post->title}}}</h3>
        <p class="index_posts">
            <small> Created on :
                {{{
                    $post
                        ->created_at
                        ->setTimezone('America/Chicago')
                        ->diffForHumans()
                }}}
            </small>
        </p>
        <p class="index_posts">{{{$post->description}}}</p>
        </div>
</div>
@stop
