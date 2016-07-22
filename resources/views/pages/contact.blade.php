@extends('layouts.app')

@section('title')
    {{ trans('messages.Contact_us') }}
@endsection

@section('bg')
    about
@endsection

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div id="userForm">
            {{ Form::open(['route'=>'contact', 'class'=>'form', 'method'=>"post"]) }}<br><br>
            {{ Form::label(trans('messages.Us_email')) }}<br>
            {{ Form::text('email', null,
                ['required',
                      'placeholder'=>trans('messages.Enter_name'),
                      'id'=>'userEmail',
                      'size'=>'37']) }}<br><br>
            {{ Form::label(trans('messages.Us_message'), null,
                ['for'=>'message'
                ]) }}<br>
            {{ Form::textarea('message', null,
                ['required',
                      'placeholder'=>trans('messages.Enter_msg'),
                      'cols'=>'37',
                      'rows'=>'8',
                      'id'=>'message']) }}<br><br>
            {{ Form::submit(trans('messages.Send_email'), null,
                ['value'=>trans('messages.Send_email')])}}
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
    </div>
@endsection