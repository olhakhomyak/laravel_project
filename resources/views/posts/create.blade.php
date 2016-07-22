@extends('layouts.app')

@section('title')
    {{ trans('messages.Discussion') }}
@endsection

@section('bg')
    upcoming
@endsection

@section('content')
    <div class="col-md-4" id="containerUF">
        <div id="content">
            <div id="userForm">
                <h2>{{ trans('messages.Create_post') }}</h2>
                <hr>
                {{ Form::open([
                    'route' => 'posts.store']) }}

                {{ Form::label('title', trans('messages.Title')) }}
                {{ Form::text('title', null, ([
                    'class'     => 'form-control',
                    'required'  => '',
                    'maxlength' => '255'])) }}

                {{ Form::label('body', trans('messages.Message')) }}
                {{ Form::textarea('body', null, ([
                    'class'    => 'form-control',
                    'required' => ''])) }}

                {{ Form::submit(trans('messages.Send'), ([
                    'class'     => 'btn btn-success btn-lg btn-block'])) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
    @include('posts.show')

@endsection

