<x-guest-layout>
<form action="{{ route('clear_responses') }}" method="post" class="flex justify-center">
    @csrf
    <button type="submit"><x-plane class="mb-4 text-center" width="w-14"/></button>
</form>

<x-title class="mb-8 text-2xl">Start planning<br>your next trip</x-title>
<x-text class="mb-8">Please find your suggested<br>travel destination below</x-text>
<x-button url="{{route('questions')}}">Download PDF</x-button>

</x-guest-layout>