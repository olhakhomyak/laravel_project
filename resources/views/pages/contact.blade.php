@extends('layouts.contact')

@section('content')
    <div id="userForm">
        {{ Form::open(['route'=>'contact', 'class'=>'form', 'method'=>"post"]) }}<br><br><br><br>
        {{ Form::label('Your email') }}<br>
        {{ Form::text('email', null,
            ['required',
                  'placeholder'=>'Enter your email',
                  'id'=>'userEmail',
                  'size'=>'37']) }}<br><br>
        {{ Form::label('Your Message') }}<br>
        {{ Form::textarea('message', null,
            ['required',
                  'placeholder'=>'Enter your message',
                  'cols'=>'37',
                  'rows'=>'8']) }}<br><br>
        {{ Form::submit('submit', null,
            ['value'=>'Send'])}}
        {{ Form::close() }}

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        @if(Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
                <p>Email: {{ $userEmail }}</p>
                <p>{{ $massage }}</p>
            </div>
        @endif
    </div>
@endsection