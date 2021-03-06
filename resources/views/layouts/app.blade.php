<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webnotes — @yield('title')</title>
    
    <!-- Global Style and Script -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

    <!-- Page Style and Script -->
    <link rel="stylesheet" href="@yield('css')">
    <script type="text/javascript" src="@yield('js')"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Carter+One|Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>