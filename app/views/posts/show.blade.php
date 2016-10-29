@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 show_post">
                <div id="{{{$post->id}}}">
                <h3 class="tests">{{{$post->title}}}</h3>
                <p>
                    <small> Created on :
                        {{{
                            $post
                                ->created_at
                                ->setTimezone('America/Chicago')
                                ->diffForHumans()
                        }}}
                    </small>
                </p>
                <p class="flow-text">{{{$post->description}}}</p>
                </div>
            </div>
        </div>
    </div>
@stop
