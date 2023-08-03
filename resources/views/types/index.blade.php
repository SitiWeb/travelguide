<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Travelprofiles') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <ul class="space-y-2">
            @foreach ($types as $type)
            <li class="flex items-center justify-between bg-white px-4 py-2 border border-gray-300 rounded-md">
                <a href="{{ route('types.show', $type->id) }}" class="text-blue-500">{{ $type->name }}</a>
                <span class="text-xs text-gray-600">{{ $type->created_at->format('Y-m-d') }}</span>
            </li>
            @endforeach
        </ul>
    </div>
    <div>
        <a href="{{ route('types.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create new</a>
    </div>
</x-app-layout>