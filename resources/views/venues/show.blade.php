<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Venue') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">


        <div>
            <p><span class="font-semibold">Title:</span> {{ $venue->title }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Address:</span> {{ $venue->address }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Url:</span> {{ $venue->url }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Price:</span> {{ $venue->price }}</p>
        </div>
        <div>
        <p><strong>Destination:</strong> {{ $venue->destination->city }}, {{ $venue->destination->country }}</p>
        </div>
        <div class="mt-4">
            <a href="{{ route('venues.edit', $venue->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
            <form action="{{ route('venues.destroy', $venue->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>


</x-app-layout>
