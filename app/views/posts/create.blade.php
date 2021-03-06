@extends('layouts.master')
@section('content')
<h1>Create a Post</h1>
    {{ $errors->first('title', '<span class="help-block">TITLE: did not meet requirements</span>') }}
    <div class="row">
            <div class="row">
                <div class="input-field col s12 m6 z-depth-1 #ffffff white">
                    {{ Form::open(array('action' => 'PostsController@store', 'class' => 'col s12')) }}
                    {{Form::text('title', null, [ 'value' => "{{{ Input::old('title') }}}" ])}}
                    {{Form::label('title', 'Title')}}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m8 z-depth-1 #ffffff white">
                    {{Form::textarea('description', null, ['value' => "{{{ Input::old('description') }}}", 'class' => 'materialize-textarea' ])}}
                    {{Form::label('description', 'Description')}}
                    {{ $errors->first('description', '<span class="help-block">DESCRIPTION: did not meet requirements </span>') }}
                </div>
            </div>
            {{ Form::submit('Post', null, ['class' => 'btn waves-effect waves-light z-depth-1' ])}}
            {{ Form::close()}}

    </div>

@stop
