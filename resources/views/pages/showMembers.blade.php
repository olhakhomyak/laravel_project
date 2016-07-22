@extends('layouts.app')

@section('title')
    {{ trans('messages.Show_members') }}
@endsection


@section('content')
    <div class="col-md-8 col-md-offset-2" id="userForm">
        <div class="container col-md-10 col-md-offset-1">
            <h2>{{ trans('messages.All_subscribers') }}</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{ trans('messages.User_email') }}:</th>
                    <th>            </th>
                    <th>{{ trans('messages.Event')}}:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subscribers as $subscriber)
                    <tr>
                        <td>{{ $subscriber->user_email }}</td>
                        <td>{{ $subscriber->event_title }}</td>
                    @foreach($subscriber->event as $event)
                        <td>{{ $event->title }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>





    </table>
@endsection
