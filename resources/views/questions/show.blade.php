<x-app-layout>
<div class="container mx-auto mt-4">
    <h2 class="text-2xl font-bold">{{ $question->title }}</h2>
    <p class="mt-2">{{ $question->description }}</p>
    <p class="text-sm text-gray-600">Created at: {{ $question->created_at }}</p>
</div>
</x-app-layout>