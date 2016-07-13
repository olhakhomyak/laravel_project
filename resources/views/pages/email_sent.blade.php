@extends('layouts.contact')

@section('content')
    <div id="userForm">
        <br><br><br><br><br><br><br><br><br>
        Message was sent from:<br> {{ $feedback->email }} <br><br><br>
        Message:<br>{{ $feedback->message }}
    </div>
@endsection