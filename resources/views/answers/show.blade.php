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
            <div class="mb-2">
                <p>{{ $index + 1 }}. {{ $question->question }}</p>
                <p>Selected Option: {{ $answer['question_'.($index + 1)] === '1' ?  $answer['question_'.($index + 1)].' '. $question->option_1 : $answer['question_'.($index + 1)].' '.$question->option_2 }}</p>
            </div>
        @endforeach
        <a href="{{ route('answers.edit', $answer->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
        <!-- Additional details or actions -->
        <div class="mt-4">
            <a href="{{ route('answers.edit', $answer->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
            <form action="{{ route('answers.destroy', $answer->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
