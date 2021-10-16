<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'JH-Laravel')</title>
    <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}">
</head>
<body>
    <div class="container mx-auto">
    @yield('content')
    </div>
</body>
</html>