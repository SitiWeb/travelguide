<x-guest-layout>
<x-plane/>
<x-title>Start planning your next trip</x-title>
<x-text>Please find your suggested travel destination below</x-text>
<x-button url="{{route('questions')}}">Download PDF</x-button>
<form action="{{ route('clear_responses') }}" method="post">
    @csrf
    <button type="submit">Clear Responses</button>
</form>
</x-guest-layout>