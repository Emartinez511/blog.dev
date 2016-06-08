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

    <div class="row grey lighten-5">
        <h1>LOGIN</h1>
        {{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'Post')) }}
          <div class="row">
            <div class="input-field col s12 m6 z-depth-1 #ffffff white">
              {{Form::text('email', null, [ 'value' => "{{{ Input::old('email') }}}", 'type' => 'email', 'class' => 'validate' ])}}
              {{Form::label('email', 'Email')}}
            </div>
          </div>
          <div class="row">
              <div class="input-field col s12 m6 z-depth-1 #ffffff white">
                  {{ Form::label('password', 'Password') }}
                  {{ Form::password('password') }}
              </div>
      </div>
          {{ Form::submit('login', null, ['class' => 'btn waves-effect waves-light z-depth-1' ])}}
        {{ Form::close() }}
      </div>

@stop
