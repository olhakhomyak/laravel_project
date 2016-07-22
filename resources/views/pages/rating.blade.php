@extends('layouts.app')

@section('title')
    {{ trans('messages.Events') }}
@endsection

@section('bg')
    rating
@endsection

@section('content')
    <div class="container col-md-8 col-md-offset-2" id="userForm">
        <h2>{{ trans('messages.This_week') }}</h2>
        <hr>
		<div class="row">
			<div class="[ col-xs-12  col-sm-12 ]">
				<ul class="event-list">
                    @foreach($events as $event)
                    <li>
                        <time>
                            <span class="day">{{ date('d', strtotime($event->date)) }}</span>
                            <span class="month">{{ date('M', strtotime($event->date)) }}</span>
                        </time>
                        <img alt="EventLogo" src="{{ asset($event->image_url) }}" />
                        <div class="info">
                            <h2 class="title">{{ $event->title }}</h2><ul>
                                <li style="width:25%;"><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal{{ $event->id }}" style="margin: 0px auto">See more...</button>
                                    <div class="modal" id="myModal{{ $event->id }}" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">{{ $event->title }}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <hr><img alt="EventLogo" src={{ asset($event->image_url) }} />
                                                    <hr><p><b>{{ $event->short_description }}</b></p>
                                                   <hr> <p>{{ $event->description }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div></li>
                                <li style="width:75%; text-align: right; vertical-align: bottom">
                                    <form method="post" action="{{ route('event.subscribe', ['eventId' => $event->id]) }}">{!!  csrf_field() !!}
                                        <input type="email" name="user_join" size="25"  placeholder="your email" style="margin: 0 auto">
                                        <input type="submit" value="Join" class="btn btn-info btn-md" style="vertical-align: middle; margin: 0 auto">
                                    </form>
                                </li>
                            </ul>
                            <p class="desc">{{ $event->short_description }}</p>
                            @endforeach
                        </div>
                    </li>
                </div>
            </div>
        </div>
@endsection