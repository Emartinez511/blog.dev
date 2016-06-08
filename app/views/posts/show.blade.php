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
    <div class="col s12 m9 l9">
        <div id="{{{$post->id}}}" class="section scrollspy z-depth-1 #ffffff white index_posts">
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
        <p class="index_posts flow-text">{{{$post->description}}}</p>
        </div>
    </div>
        <div class="col hide-on-small-only m3 l2 offset-l1">
            <h3>Blog</h3>
        </div>
</div>
@stop
