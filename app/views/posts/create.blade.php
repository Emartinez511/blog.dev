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
  <form class="col s12" method="POST" action="{{{ action('PostsController@store') }}}">
    <div class="row">
      <div class="input-field col s12 m6 z-depth-1">
        <input id="input_text" type="text" length="50" name="title" value="{{{ Input::old('title') }}}">
        <label for="input_text">TITLE</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m8 z-depth-1">
        <textarea id="textarea1" class="materialize-textarea" length="500" name="description">{{{ Input::old('description') }}}</textarea>
        <label for="textarea1">Textarea</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light z-depth-1" type="submit" name="action">Post
    </button>
  </form>
</div>
@stop
