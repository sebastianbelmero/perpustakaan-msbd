<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body class="flex flex-col h-screen justify-between">
    <header>@livewire('pages.components.header')</header>     
    <main id="app">{{ $slot }}</main>
    <footer>@livewire('pages.components.footer')</footer>     
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/tailwind.js') }}" defer></script>
</body>
</html>
