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

<h1>All Post</h1>
  <div class="row z-depth-1">
    <div class="col s12 m9 l10">
      @foreach ($posts as $post)
        <div id="{{{$post->id}}}" class="section scrollspy">
          <h3><a href="{{{action('PostsController@show', $post->id)}}}">{{{$post->title}}}</a></h3>
          <p>{{{$post->description}}}</p>
          <p> Created on : {{{$post->created_at}}}</p>
        </div>
      @endforeach
    </div>

    <div class="col hide-on-small-only m3 l2">
      <ul class="section table-of-contents fixed">
      @foreach ($posts as $post)
				<li><a href="#{{{$post->id}}}">{{{$post->title}}}</a></li>
      @endforeach
	    </ul>
    </div>
</div>
<script>
  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
</script>
@stop
