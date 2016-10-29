@extends('layouts.master')

@section('content')
<div class="contatiner-fluid show_page">

    <div class="col-sm-4 login_form">
        <h1>LOGIN</h1>
        {{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'Post')) }}
          <div class="form-group">
            <div class="input-field">
                {{Form::label('email', 'Email')}}
              {{Form::text('email', null, [ 'value' => "{{{ Input::old('email') }}}", 'type' => 'email', 'class' => 'form-control' ])}}
            </div>
          </div>
          <div class="form-group">
              <div class="input-field">
                  {{ Form::label('password', 'Password') }}
                  {{ Form::password('password', ['class' => 'form-control']) }}
              </div>
          </div>
          {{ Form::submit('login', null, ['class' => 'btn waves-effect waves-light z-depth-1' ])}}
        {{ Form::close() }}
      </div>

</div>
@stop
