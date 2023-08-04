@props(['slot2', 'background' =>  url('storage/Footer4x.png')])
@php
$route = request()->route()->getName();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="prefetch" href="http://localhost/travelguide/public/storage/images/MatQTPQ5HIn3wN5e38pa5z67zwobAmJbVAHQ1ZGP.png">
        <link rel="prefetch" href="http://localhost/travelguide/public/storage/images/nvtdDiwiIyLrmNIwYaE1wW4ujjJKqnPlesgeKcEx.png">
        <link rel="prefetch" href="http://localhost/travelguide/public/storage/images/uPwnUtgENs6oGze68SZIEVle44XQNew9jB2J3Hgz.png">
        <link rel="prefetch" href="http://localhost/travelguide/public/storage/images/7OEt1dSBmUch2d64bmcpKz5cPpNkyF9YZvWERKac.png">
        <link rel="prefetch" href="http://localhost/travelguide/public/storage/images/0OSaSPrAViwYWBaN6HBinM7MlEySwZYTCsgL4dHA.png">
        <title>JTI | Travelguide</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            body:after{
          display: none;
          content: url(http://localhost/travelguide/public/storage/images/MatQTPQ5HIn3wN5e38pa5z67zwobAmJbVAHQ1ZGP.png) url(http://localhost/travelguide/public/storage/images/nvtdDiwiIyLrmNIwYaE1wW4ujjJKqnPlesgeKcEx.png) url(http://localhost/travelguide/public/storage/images/uPwnUtgENs6oGze68SZIEVle44XQNew9jB2J3Hgz.png) url(http://localhost/travelguide/public/storage/images/7OEt1dSBmUch2d64bmcpKz5cPpNkyF9YZvWERKac.png) url(http://localhost/travelguide/public/storage/images/0OSaSPrAViwYWBaN6HBinM7MlEySwZYTCsgL4dHA.png);
      }
            @font-face {
                font-family: IqbalCamel;
                src: url("{{ url('storage/CAMEL-BOLD.ttf') }}");
            }

            @font-face {
                font-family: Graphik-bold;
                src: url("{{ url('storage/Graphik-Bold.woff2') }}");
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
                line-height: 1.3;
                font-family: Graphik-bold;
            }
            .bg-footer-image {
                background-image:url('{{ $background }}');
              
            }
       
            
        </style>
        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="page-{{ str_replace('.', '-', $route) }} font-sans text-gray-900 antialiased bg-white flex justify-center overflow-hidden" >
 

        <div style="min-height:100%;min-height:100vh;min-height:100dvh; background-size:contain;" class="sm:border  w-full sm:max-w-2xl flex flex-col justify-between lg:py-12 sm:pt-6 sm:pb-12 items-center background-blue-camel bg-footer-image bg-contain md:bg-cover bg-no-repeat bg-bottom" >
         

            <div class=" mt-12 px-6 py-4 sm:rounded-lg ">
                {{ $slot }}
            </div>
            
            @isset($slot2)
            <div class="mb-6 px-6 py-4 sm:rounded-lg">
                @php echo  $slot2 @endphp
            </div>
            @endisset

        </div>
    </body>
</html>
