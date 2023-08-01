<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Question') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <h2 class="text-2xl font-bold">{{ $question->question }}</h2>
        <p class="mt-2">Option 1: {{ $question->option_1 }}</p>
        <p class="mt-2">Option 2: {{ $question->option_2 }}</p>
        <p class="text-sm text-gray-600">Created at: {{ $question->created_at }}</p>
    </div>
</x-app-layout>