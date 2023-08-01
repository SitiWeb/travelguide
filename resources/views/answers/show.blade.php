<!-- answers/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Answer Details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-4">
        <p><strong>Activity Type:</strong> {{ $answer->type->name }}</p>

        @foreach($questions as $index => $question)
            <div>
                <p>{{ $index + 1 }}. {{ $question->question }}</p>
                <p>Selected Option: {{ $answer['question_'.($index + 1)] === '1' ? $question->option_1 : $question->option_2 }}</p>
            </div>
        @endforeach

        <!-- Additional details or actions -->
    </div>
</x-app-layout>
