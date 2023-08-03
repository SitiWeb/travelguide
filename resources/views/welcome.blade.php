@php
$lightblue =  Blade::render('<x-light-blue-text class="mb-2">Please re-visit the page to complete<br>the questionnaire and receive<br>your travel guide.</x-light-blue-text>', ['class' => __('mb-8')]);
$slot2= $lightblue;
@endphp
<x-guest-layout slot2={!!$slot2!!}>
<x-plane class="mb-4 text-center" width="w-14"/>
<x-title class="mb-8 text-6xl">Travel<br>Guide</x-title>
<x-title class="mb-8">The app will be available<br>from the 8th of august 2023.</x-title>

</x-guest-layout>