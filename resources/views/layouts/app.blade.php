<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased font-jost bg-blue-50">
        <x-jet-banner />
        
        <div class="container flex h-screen mx-auto md:mt-10">

        <div class="grid w-screen h-screen grid-cols-1 grid-rows-4 gap-5 md:grid-rows-4 md:grid-cols-1 lg:grid-rows-1 lg:grid-cols-4">
            <div class="z-10 h-[72px] lg:h-full grid grid-cols-1 grid-rows-1 row-span-1 md:grid-rows-1 md:grid-cols-3 md:col-span-3 lg:grid-rows-6 lg:grid-cols-1 lg:col-span-1 ">
                
                <livewire:sidebar_components.title-card />
                <span class="hidden md:block">
                <livewire:sidebar_components.sidebar-categories />
                </span>
            </div>
            
            <div class="z-9 grid grid-cols-1 grid-rows-6 row-span-3 mt-[-110px] md:mt-0 md:col-span-4 lg:col-span-3 md:grid-cols-1 md:grid-rows-6 lg:grid-cols-1 lg:grid-rows-6 ">
                <div class="w-screen row-span-1 md:w-auto md:row-span-1 lg:row-span-1">
                    <livewire:navs.menu-bar />
                </div>
                <div class="row-span-5 lg:mt-[-35px]">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
           
        </div>
    </div>
        @stack('modals')

        @livewireScripts
    </body>
</html>
