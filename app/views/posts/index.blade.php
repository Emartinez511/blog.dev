@extends('layouts.master')

@section('content')


	<div class="container-fluid">
	    <div class="row">

	      <div class="col-sm-10 blog_post" data-spy="scroll" data-target="#myScrollspy">
			@foreach ($posts as $post)
	        <div id="{{{$post->id}}}">
				<h3 class="index_posts"><a href="{{{action('PostsController@show', $post->id)}}}">{{{$post->title}}}</a></h3>
				<p class="index_posts">
					<small>written by: {{{$post->user->username}}}</small>
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
		  <nav class="col-sm-2 side_bar" id="myScrollspy">
			<ul class="nav nav-tabs nav-stacked" data-offset-top="120" data-spy="affix">
			@foreach ($posts as $post)
			  <li><a class"side_text" href="#{{{$post->id}}}">{{{$post->title}}}</a></li>
			@endforeach
			</ul>
		  </nav>
	    </div>
	</div>
	<div class=" row bottom_show">
		<div class="col-sm-12">
			<p>{{ $posts->links() }}</p>
		</div>
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('[data-spy="scroll"]').each(function () {
			var $spy = $(this).scrollspy('refresh')
		})
		$('body').scrollspy({ target: '.blog_post' })
	});

</script>

@stop
