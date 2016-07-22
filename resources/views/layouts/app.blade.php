<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hover.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body id=@yield('bg')>

@include('partials.header')

@yield('content')


<!-- JavaScripts -->
<script language="JavaScript" >
    var msg=document.title;
    var c=0;
    function animateTitle()
    {
        document.title=msg.substring(0,c);
        if(c==msg.length)
        {
            c=0;
            setTimeout("animateTitle()",2000)
        }
        else
        {
            c++;
            setTimeout("animateTitle()",200)
        }
    }
    animateTitle()
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>













            <!-- Right Side Of Navbar -->







{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>@yield('title')</title>--}}

    {{--<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hover.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
{{--</head>--}}

{{--<body id="body">--}}
    {{--<nav class="navbar navbar-default navbar-static-top" id="header">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a id="a" href="{{ url('/') }}">{{ trans('messages.Home') }}</a></li>--}}


                    {{--@if (Auth::check() && (boolean)Auth::user()->is_admin)--}}
                    {{--<li><div class="dropdown">--}}
                        {{--<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                            {{--Admin--}}
                            {{--<span class="caret"></span>--}}
                        {{--</button>--}}
                        {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
                            {{--<li><a href="{{ url('/admin/events/create') }}">Create event</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li><a href="#">Show all members</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                {{--</ul>--}}






                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (Auth::guest())--}}
                        {{--<li><a id="a" href="{{ url('/login') }}">{{ trans('messages.Login') }}</a></li>--}}
                        {{--<li><a id="a" href="{{ url('/register') }}">{{ trans('messages.Register') }}</a></li>--}}
                    {{--@else--}}
                        {{--<li class="dropdown">--}}
                            {{--<a id="a" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('messages.Logout') }}</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                    {{--<li><form action="{{ URL::route('language-chooser') }}" method="get">--}}
                            {{--<select name="locale" class="btn btn-md btn-default">--}}
                                {{--<option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>En</option>--}}
                                {{--<option value="ua" {{ app()->getLocale() == 'ua' ? 'selected' : '' }}>Ua</option>--}}
                            {{--</select>--}}
                            {{--{{ Form::token() }}--}}
                            {{--<input type="submit" value="Ok" class="btn btn-default btn-md">--}}
                        {{--</form></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--@yield('content')--}}

    {{--<!-- JavaScripts -->--}}
    {{--<script language="JavaScript" >--}}
    {{--var msg=document.title;--}}
    {{--var c=0;--}}
    {{--function animateTitle()--}}
    {{--{--}}
    {{--document.title=msg.substring(0,c);--}}
    {{--if(c==msg.length)--}}
    {{--{--}}
    {{--c=0;--}}
    {{--setTimeout("animateTitle()",2000)--}}
    {{--}--}}
    {{--else--}}
    {{--{--}}
    {{--c++;--}}
    {{--setTimeout("animateTitle()",200)--}}
    {{--}--}}
    {{--}--}}
    {{--animateTitle()--}}
    {{--</script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}

{{--</body>--}}
{{--</html>--}}
