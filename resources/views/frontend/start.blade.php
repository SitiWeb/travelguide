@php
$lightblue =  Blade::render('<x-light-blue-text class="mb-2">Tap "Start" to let us know your travel preference</x-light-blue-text>', ['class' => __('mb-8')]);
$button =  Blade::render('<x-button class="" id="startButton" url="'.route('questions').'">Start</x-button>', ['url' => route('questions')]);
$terms =  Blade::render('<x-terms/>');
$slot2= $lightblue.$button.$terms;
@endphp

<x-guest-layout slot2="{!!$slot2!!}">
<x-plane  class="mb-4 text-center" width="w-14"/>
<x-title class="mb-8 text-6xl">Travel Guide</x-title>
<x-text class="mb-8 graphik-font " >Welcome to the Travel Guide,<br>complete the questionnaire to receive<br>a set of 3 x travel destinations<br>recommendations from a host of<br>iconic Cities around the globe. </x-text>

</x-guest-layout>


