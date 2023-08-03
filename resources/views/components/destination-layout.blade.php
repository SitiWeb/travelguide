<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      

           

            <!-- Page Content -->
            <main>
            <div class="">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm">
                        <div class="text-gray-900 dark:text-gray-100">
                        {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
            </main>
        </div>
    </body>
</html>
