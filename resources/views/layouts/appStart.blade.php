<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('/assets/logo/blue.png') }}">
    <title>{{ Route::currentRouteName() ?? 'Page Title' }}</title>

</head>

<body>
    {{ $slot }}
    
    @include('footers.footer')
</body>
</html>