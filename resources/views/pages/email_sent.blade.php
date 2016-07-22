@extends('layouts.app')

@section('title')
    {{ trans('messages.Email_sent') }}
@endsection

@section('bg')
    about
@endsection

@section('content')
    <div id="userForm" class="col-md-6 col-md-offset-3"><br><br><br>
        {{ trans('messages.Message_sent') }}:<br> {{ $feedback->email }} <br><br><br>
        {{ trans('messages.Message') }}<br>{{ $feedback->message }}<br><br><br>
    </div>
@endsection