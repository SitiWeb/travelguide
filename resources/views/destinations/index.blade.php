<x-app-layout>
    <div class="container mx-auto mt-4">
        <h2 class="text-2xl font-bold mb-4">Destinations</h2>
        <ul class="space-y-2">
            @foreach ($destinations as $destination)
                <li class="flex items-center justify-between bg-white px-4 py-2 border border-gray-300 rounded-md">
                    <a href="{{ route('destinations.show', $destination->id) }}" class="text-blue-500">{{ $destination->city }}</a>
                    <span class="text-xs text-gray-600">{{ $destination->created_at->format('Y-m-d') }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    </x-app-layout>