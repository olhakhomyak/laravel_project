@extends('layouts.app')

@section('title')
    {{ trans('messages.News') }}
@endsection

@section('bg')
    collection
@endsection

@section('content')
    <div id="collection">
        <div id="content">
            <div id="text_field">
                <p> Some content for this page </p>
            </div>
        </div>
    </div>
@endsection