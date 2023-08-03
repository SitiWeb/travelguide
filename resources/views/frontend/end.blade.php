@php
$button =  Blade::render('<x-button class="text-white" url="'.route('frontend.destinations',['id' => $destination->id]).'">Discover your destination</x-button>', ['class' => 'text-white']);
$slot2= $button;
@endphp

<x-guest-layout slot2="{!!$slot2!!}" background="{{url('storage/Footer7-4x.png')}}">
<form action="{{ route('clear_responses') }}" method="post" class="flex justify-center">
    @csrf
    <button type="submit"><x-plane class="mb-4 text-center" width="w-14"/></button>
</form>

<x-title class="mb-8 text-2xl">Start planning<br>your next trip</x-title>

<x-text class="mb-8">Please find your suggested<br>travel destination below</x-text>


</x-guest-layout>