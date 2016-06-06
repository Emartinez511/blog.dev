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
<div id="404">
    <img id="metal_gear" src="/img/metalgear.gif" >
    <div class="text_over">
    <h1 id="errorHead">404.</h1>
    <h2>The Page could not be found.</h2>
    <a class="waves-effect waves-light btn red" id="back_home" href="/posts">Take Me BACK HOME</a>
    </div>
</div>

@stop
