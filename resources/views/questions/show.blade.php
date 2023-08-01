<x-app-layout>
<div class="container mx-auto mt-4">
    <h2 class="text-2xl font-bold">{{ $destination->city }}</h2>
    <p class="mt-2">{{ $destination->description }}</p>
    <p class="text-sm text-gray-600">Created at: {{ $destination->created_at }}</p>
</div>
</x-app-layout>