<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>

<body>

<!-- divCollection -->
@include('layouts.divSimpleContainer')

<div id="userForm">
    <form action="{{ route('Auth') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="userName">Your name: </label><br><input type="text" name="userName" id="userName" size="24"><br><br>
        <label for="userEmail">Your email: </label><br><input type="email" name="userEmail" id="userEmail" size="24"><br><br>
        <input type="submit" name="submit" value="Continue"><br>
    </form>
</div>

<!-- footer -->
@include('layouts.footer')


<!-- form validation -->
@if($errors->any())
    <div class="alert alert-success alert-dismissible" role="alert">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
            <br><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">OK</span></button>
    </div>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$(".alert").delay(2000).slideUp(200, function() {
$(this).alert('close');
});</script>

</body>
</html>