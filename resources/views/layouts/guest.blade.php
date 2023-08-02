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
        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased background-blue-camel bg-footer-image bg-no-repeat bg-contain bg-bottom" >
 

        <div class="min-h-screen flex flex-col pt-24 items-center "  >
         

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 sm:rounded-lg">
                {{ $slot }}
            </div>

        </div>
    </body>
</html>
