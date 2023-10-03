<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/8ed8cc8801.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('DGSL.png') }}">
    <title>Digi-solutions</title>
</head>
<body style="background-image: url('{{ asset('bg.png') }}');">
    @include('layouts.partials.messages')
    @include('layouts.partials.nav')

    
    @yield('content')
    <br><br>
    @include('layouts.partials.footer')


    
</body>
</html>
