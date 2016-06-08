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
<h2>BLOG</h2>
<div class="right-align">
	<p>{{ $posts->links() }}</p>
</div>
<!-- <h1>All Post</h1> -->
  <div class="row">
    <div class="col s12 m9 l9">
      @foreach ($posts as $post)
        <div id="{{{$post->id}}}" class="section scrollspy z-depth-1 #ffffff white index_posts">
			<h3 class="index_posts"><a href="{{{action('PostsController@show', $post->id)}}}">{{{$post->title}}}</a></h3>
			<p class="index_posts">
				<small>written by: {{{$post->user->username}}}</small>
			</p>
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
      @endforeach
    </div>
    <div class="col hide-on-small-only m3 l2 offset-l1">
      <ul class="section table-of-contents fixed">
      @foreach ($posts as $post)
				<li><a href="#{{{$post->id}}}">{{{$post->title}}}</a></li>
      @endforeach
	    </ul>
    </div>
</div>
<div class="right-align z-depth-1 #90a4ae blue-grey lighten-2">
	<p>{{ $posts->links() }}</p>
</div>

<script>
  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
	$(".button-collapse").sideNav();
  });
</script>
@stop
