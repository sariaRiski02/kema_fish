<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/assets/logo/blue.png') }}">
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
    <title>Kema Fish</title>
</head>

<body>

    <header>
        @yield('header')
    </header>

    <content>
        <div class="pt-40 px-14" id="content">
            @yield('content')
        </div>
    </content>

</body>

</html>