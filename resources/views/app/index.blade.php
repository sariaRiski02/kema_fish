<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/assets/logo/blue.png') }}">
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
    <title>Document</title>
</head>

<body>

    <header>
        @include('headers.header')
    </header>

    <content>
        @yield('content')
    </content>

    {{-- <footer>
        created by riski saria
    </footer> --}}


</body>

</html>