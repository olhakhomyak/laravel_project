@extends('layouts.app')

@section('title')
    {{ trans('messages.Home') }}
@endsection

@section('bg')
    about
@endsection


@include('partials.divContainer')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            </div>
        </div>
    </div>
@endsection
