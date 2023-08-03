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
        
         <!-- Display the image if image_path is not empty -->
         @if($question->image_path)
            <div>
                <p><span class="font-semibold">Image:</span></p>
                <img src="{{ asset('storage/' . $question->image_path) }}" alt="Question Image" class="w-full rounded-md mt-2">
            </div>
        @endif
        <p class="text-sm text-gray-600">Created at: {{ $question->created_at }}</p>
    </div>
    <div class="mt-4">
        <a href="{{ route('questions.edit', $question->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
        <form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
        </form>
    </div>
</x-app-layout>