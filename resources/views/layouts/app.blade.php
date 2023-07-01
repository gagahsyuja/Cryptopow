<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptopow - {{ $title }}</title>
    <link rel="stylesheet" href="{{ URL('/css/style.css') }}">
    <link rel="icon" href="{{ URL('/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>

    <x-header />

    @yield('header')

    @yield('contents')

    <x-footer />
    
</body>
</html>