<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $type->name }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <p class="mb-4">{{ $type->name }}</p>
        <a href="{{ route('types.edit', $type->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
    </div>
</x-app-layout>