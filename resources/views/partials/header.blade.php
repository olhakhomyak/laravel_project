<nav class="navbar navbar-default navbar-static-top" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"></button>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a id="a" href="{{ url('/') }}">{{ trans('messages.Home') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right dropdown">
                @if (Auth::guest())
                    <li><a style="color: whitesmoke" href="{{ url('/login') }}">{{ trans('messages.Login') }}</a></li>
                    <li><a style="color: whitesmoke" href="{{ url('/register') }}">{{ trans('messages.Register') }}</a></li>
                @else
                    <li class="dropdown">
                        <a id="a" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('messages.Logout') }}</a></li>
                        </ul>
                    </li>
                @endif
                <li>@if (Auth::check() && (boolean)Auth::user()->is_admin)
                    <li style="margin-right: 10px;"><div class="dropdown">
                            <button class="btn btn-default btn-md dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                {{ trans('messages.Admin_menu') }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/events/create') }}">{{ trans('messages.Create_event') }}</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/admin/events/show-all-subscribers') }}">{{ trans('messages.Show_members') }}</a></li>
                            </ul>
                        </div>
                        @endif</li>
                    <li><form action="{{ URL::route('language-chooser') }}" method="get">
                            <select name="locale" class="btn btn-md btn-default">
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                                <option value="ua" {{ app()->getLocale() == 'ua' ? 'selected' : '' }}>UA</option>
                            </select>
                            {{ Form::token() }}
                            <input type="submit" value="Ok" class="btn btn-default btn-md">
                        </form></li>
            </ul>
        </div>
    </div>
</nav>