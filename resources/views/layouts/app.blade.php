<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JTI Travelguide</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <STYLE>
            @font-face {
                font-family: IqbalCamel;
                src: url("{{ url('storage/CAMEL-BOLD.ttf') }}");
            }

            @font-face {
                font-family: Graphik-bold;
                src: url("{{ url('storage/GRAPHIK-BOLD.ttf') }}");
            }

            @font-face {
                font-family: Graphik-regular;
                src: url("{{ url('storage/GRAPHIK-LIGHT.ttf') }}");
            }
            body{
                font-family: Graphik-bold;
            }

            .camel-font {
                font-family: IqbalCamel;
                text-transform: uppercase;
            }

            .graphik-font {
                font-family: Graphik-bold;
            }
            .bg-footer-image {
                background-image:url('{{ url('storage/Footer4x.png') }}');
            }
            
        </STYLE>
        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
            </main>
        </div>
    </body>
</html>
