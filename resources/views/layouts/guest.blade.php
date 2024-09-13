<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- styles --}}
        <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        {{-- <div class="fixed flex w-screen h-24 py-5 px-32">
            <div class="logo flex items-center  text-xl font-bold w-[500px]">
                <span>Company Name</span>
            </div>
            <div class="nav flex items-center justify-end gap-20 w-full pr-5">
                <a href="">Home</a>
                <a href="">Services</a>
                <a href="">About</a>
                <a href="">Contact Us</a>
            </div>
        </div> --}}
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased px-40">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
