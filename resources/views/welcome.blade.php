<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    </head>
    <body class="font-sans antialiased overflow-x-hidden">
        {{-- Header Start --}}
        <div class="w-screen py-5 px-40 border-b">
            <div class="flex items-center gap-10 w-full">
                <div class="logo min-w-16">
                    <img src="{{ asset('storage/images/logo/logo.png') }}" class="w-14 h-14" alt="">
                </div>
                <div class="relative flex items-center w-full">
                    <i class="fi fi-rr-search absolute left-4 my-auto"></i>
                    <input type="search" placeholder="Search for Movies, Shows and Events" class="w-full p-3 pl-10 rounded-xl border-none hover:ring-1 hover:ring-indigo-500 hover:bg-indigo-50 focus:bg-indigo-50 bg-gray-100">
                </div>
                <div class="relative flex items-center gap-5">
                    <button class="flex items-center gap-2 px-4 py-4 hover:bg-gray-100 rounded-xl h-full">
                        <span>Jaipur</span>
                        <i class="fi fi-rr-angle-small-down"></i>
                    </button>
                    <x-button class="text-nowrap">Sign In</x-button>
                </div>
            </div>
            <div class="flex items-center justify-between w-full mt-5">
                <div class="nav flex gap-5">
                    <a href="">Movies</a>
                    <a href="">Stream</a>
                    <a href="">Events</a>
                    <a href="">Plays</a>
                    <a href="">Sports</a>
                    <a href="">Activities</a>
                </div>
                <div class="nav flex gap-5 text-sm">
                    <a href="">List your shows</a>
                    <a href="">Corporates</a>
                    <a href="">Offers</a>
                    <a href="">Gift Cards</a>
                </div>
            </div>
        </div>
        {{-- Header End --}}

        {{-- Recommender Start --}}
        <div class="px-40 mt-5">
            <div class="flex">
                <span class="text-2xl font-bold text-gray-800 my-2">Recommended Movies</span>
            </div>
            <div class="grid grid-cols-5 gap-5">
                <div class="flex flex-col gap-2">
                    <div style="background-image: url(https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OC45LzEwICAzNDMuOEsgVm90ZXM%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00364249-gysqjkrwnv-portrait.jpg)" class="flex bg-cover bg-no-repeat h-96 rounded-xl w-full"></div>
                    <span class="text-lg font-bold">Stree 2</span>
                    <span class="text-sm text-gray-400">Comedy/Horror</span>
                </div>
                <div class="flex flex-col gap-2">
                    <div style="background-image: url(https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@like_202006280402.png,lx-24,ly-617,w-29,l-end:l-text,ie-NjYuNEsgTGlrZXM%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00352820-qzpmggkprk-portrait.jpg)" class="flex bg-cover bg-no-repeat h-96 rounded-xl w-full"></div>
                    <span class="text-lg font-bold">Joker: Folie a Deux</span>
                    <span class="text-sm text-gray-400">Drama/Suspense/Thriller</span>
                </div>
                <div class="flex flex-col gap-2">
                    <div style="background-image: url(https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OC4zLzEwICAyMy41SyBWb3Rlcw%3D%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00401441-jhkvdzzhks-portrait.jpg)" class="flex bg-cover bg-no-repeat h-96 rounded-xl w-full"></div>
                    <span class="text-lg font-bold">Thalapathy is the G.O.A.T.</span>
                    <span class="text-sm text-gray-400">Action/Drama/Thriller</span>
                </div>
                <div class="flex flex-col gap-2">
                    <div style="background-image: url(https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@like_202006280402.png,lx-24,ly-617,w-29,l-end:l-text,ie-MTUuOEsgTGlrZXM%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00403265-wnjaqgpmcy-portrait.jpg)" class="flex bg-cover bg-no-repeat h-96 rounded-xl w-full"></div>
                    <span class="text-lg font-bold">The Buckingham Murders</span>
                    <span class="text-sm text-gray-400">Crime/Mystry/Thriller</span>
                </div>
                <div class="flex flex-col gap-2">
                    <div style="background-image: url(https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OC4xLzEwICA0Ni44SyBWb3Rlcw%3D%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00399518-cbuppzznzx-portrait.jpg)" class="flex bg-cover bg-no-repeat h-96 rounded-xl w-full"></div>
                    <span class="text-lg font-bold">Khel Khel Mein</span>
                    <span class="text-sm text-gray-400">Comedy/Drama</span>
                </div>
            </div>
        </div>

        {{-- Recommender End --}}

        {{-- Banner Start --}}
        <div class="flex px-40 my-10">
            <div class="flex">
                <img src="https://assets-in.bmscdn.com/discovery-catalog/collections/tr:w-1440,h-120/stream-leadin-web-collection-202210241242.png" alt="">
            </div>
        </div>
        {{-- Banner End --}}
    </body>
</html>
