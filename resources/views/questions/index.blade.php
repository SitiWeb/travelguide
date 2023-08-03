<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Questions') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <ul class="space-y-2">
            @foreach ($questions as $question)
            <li class="flex items-center justify-between bg-white px-4 py-2 border border-gray-300 rounded-md">
                <a href="{{ route('questions.show', $question->id) }}" class="text-blue-500">{{ $question->question }}</a>
                <span class="text-xs text-gray-600">{{ $question->created_at->format('Y-m-d') }}</span>
            </li>
            @endforeach
        </ul>
    </div>
    
</x-app-layout>