<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <div class="container flex h-screen mx-auto mt-10">

        <div class="grid w-screen h-screen grid-cols-1 grid-rows-4 md:grid-rows-4 md:grid-cols-1 lg:grid-rows-1 lg:grid-cols-4">
            <div class="grid grid-cols-3 grid-rows-1 row-span-1 md:grid-rows-1 md:grid-cols-3 md:col-span-3 lg:grid-rows-3 lg:grid-cols-1 lg:col-span-1 ">
                <div class="bg-blue-100 "> 
                    Side bar 1
                </div>
                <div class="bg-red-100 "> 
                    Side bar 2
                </div>
                <div class="bg-yellow-100 "> 
                    Side bar 3
                </div>
            </div>
            
            <div class="grid grid-cols-1 grid-rows-6 row-span-3 md:col-span-4 lg:col-span-3 md:grid-cols-1 md:grid-rows-6 lg:grid-cols-1 lg:grid-rows-6 ">
                <div class="row-span-1 bg-blue-100 md:row-span-1 lg:row-span-1">
                    <livewire:navs.menu-bar />
                </div>
                <div class="row-span-5 bg-red-100 md:row-span-5 lg:row-span-5">
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
