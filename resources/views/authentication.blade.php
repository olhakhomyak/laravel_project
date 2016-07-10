<!DOCTYPE html>
<html>
<head>
    <title>Movie Collection</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>

<body>

<!-- divCollection -->
@include('layouts.divSimpleContainer')

<div id="userForm">
    <p>You are logged in as:</p>
    <p>Name: {{ Request::get('userName') }} </p>
    <p>Email: {{ Request::get('userEmail') }} </p>
    <input type="submit" value="continue" onclick="location.href='{{ route('MainPage') }}'">
</div>

<!-- footer -->
@include('layouts.footer')

</body>
</html>