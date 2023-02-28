@props(['pageTitle' => 'TropicalShop'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    @livewireStyles
    @vite('resources/css/app.css')
    @stack('head')
    
    <title>{{ $pageTitle }}</title>
</head>
<body class="bg-stone-100">
    {{ $slot }}
    
    @livewireScripts
    @vite('resources/js/app.js')
    @stack('end-body')
</body>
</html>