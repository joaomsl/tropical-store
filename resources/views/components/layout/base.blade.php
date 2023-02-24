@props(['pageTitle' => 'TropicalShop'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    @vite('resources/css/app.css')
    @stack('head')
    
    <title>{{ $pageTitle }}</title>
</head>
<body>
    {{ $slot }}
    
    @livewireScripts
    @vite('resources/js/app.js')
    @stack('end-body')
</body>
</html>