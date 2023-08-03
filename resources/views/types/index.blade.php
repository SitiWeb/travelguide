<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Travelprofiles') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <ul class="space-y-2 mb-2">
            @foreach ($types as $type)
            <li class="flex items-center justify-between bg-white px-4 py-2 border border-gray-300 rounded-md">
                <a href="{{ route('types.edit', $type->id) }}" class="text-blue-500">{{ $type->name }}</a>
                <span class="text-xs text-gray-600">{{ $type->created_at->format('Y-m-d') }}</span>
            </li>
            @endforeach
        </ul>
    
        <a href="{{ route('types.create') }}" class="toggle-button rounded bg-white px-2 py-1 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Create new</a>
    </div>
</x-app-layout>