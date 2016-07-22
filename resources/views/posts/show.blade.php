 <div id="containerUF" class="col-md-8">
    <div id="content">
        <div id="userForm">
            @foreach($posts as $post)
                <hr>
                <p>{{ trans('messages.Title') }} {{ $post->title }}</p>
                <hr>
                <p class="lead">{{ trans('messages.Message') }} {{ $post->body }}</p>
                <p>{{ trans('messages.Created_at') }} {{ date('j.m.Y, H:i', strtotime($post->created_at)) }}</p>
                <div class="row">
                    <div class="col-sm-3">
                        @if (Auth::check() && (boolean)Auth::user()->is_admin)
                            <a href="{{route('posts.delete', ['postId' => $post->id])}}" class="btn btn-danger btn-block">{{ trans('messages.Delete') }}</a>
                        @endif
                    </div>
                </div><br>
            @endforeach
        </div>
    </div>
</div>
