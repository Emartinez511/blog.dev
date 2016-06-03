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
<h1>Create a Post</h1>
    {{ $errors->first('title', '<span class="help-block">TITLE: did not meet requirements</span>') }}
    {{ $errors->first('description', '<span class="help-block">DESCRIPTION: did not meet requirements </span>') }}
    <div class="row">
        {{ Form::open(array('action' => 'PostsController@store', 'class' => 'col s12')) }}
            <div class="row">
                <div class="input-field col s12 m6 z-depth-1 #ffffff white">
                    {{Form::text('title', null, [ 'value' => "{{{ Input::old('title') }}}" ])}}
                    {{Form::label('title', 'Title')}}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m8 z-depth-1 #ffffff white">
                    {{Form::textarea('description', null, ['value' => "{{{ Input::old('description') }}}", 'class' => 'materialize-textarea' ])}}
                    {{Form::label('description', 'Description')}}
                </div>
            </div>
            {{ Form::submit('Post', null, ['class' => 'btn waves-effect waves-light z-depth-1' ])}}
            {{ Form::close()}}

    </div>





  <!-- <form class="col s12" method="POST" action="{{{ action('PostsController@store') }}}"> -->
        <!-- <input id="input_text" type="text" length="50" name="title" value="{{{ Input::old('title') }}}"> -->
        <!-- <label for="input_text">TITLE</label> -->
        <!-- <textarea id="textarea1" class="materialize-textarea" length="500" name="description">{{{ Input::old('description') }}}</textarea> -->
        <!-- <label for="textarea1">Textarea</label> -->
    <!-- <button class="btn waves-effect waves-light z-depth-1" type="submit" name="action">Post
    </button> -->
  <!-- </form> -->
@stop
