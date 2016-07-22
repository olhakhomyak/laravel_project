@extends('layouts.app')

@section('title')
    {{ trans('messages.Create_event') }}
@endsection

@section('bg')
    event
@endsection

@section('content')

    <div class="col-md-8 col-md-offset-2 form-horizontal" id="userForm">
        <form method="post" action="{{ route('admin.storeEvent') }}" class="form-horizontal" role="form">
            {!! csrf_field() !!}
            <h3>{{ trans('messages.Create_event') }}</h3>
            <hr>
            <div class="form-group">
                <label  class="control-label col-sm-4" for="title">{{ trans('messages.Title') }}</label>
                <div class="col-sm-8"><input type="text" name="title" id="title" class="form-control"></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="desc">{{ trans('messages.Description') }}</label>
                <div class="col-sm-8">
                    <input type="text" name="description" id="desc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="short_desc" class="control-label col-sm-4">{{ trans('messages.Localization') }}</label>
                <div class="col-sm-8">
                    <input type="text" name="short_description" class="form-control"  id="short_desc">
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="col-sm-4 control-label">{{ trans('messages.Image_link') }}</label>
                <div class="col-sm-8">
                    <input type="text" name="image_url" id="image" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="date" class="col-sm-4 control-label">{{ trans('messages.Date') }}</label>
                <div class="col-sm-8">
                    <input type="date" name="date" id="date" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default" value="create">{{ trans('messages.Create') }}</button>
                </div>
            </div>
        </form>
    </div>

@endsection







