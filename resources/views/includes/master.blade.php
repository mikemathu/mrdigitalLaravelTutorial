<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
</head>
<body>


@if(Auth::check())
<form method="post" action="{{route('logout')}}">

@csrf

<button type="submit">Logout</button>

</form>
@endif
    

@yield('content')




@yield('scripts')













</body>
</html>