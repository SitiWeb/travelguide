<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Destination') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">

        <div>
            <p><span class="font-semibold">City:</span> {{ $destination->city }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Country:</span> {{ $destination->country }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Description:</span> {{ $destination->description }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Type:</span> {{ $destination->type->name }}</p>
        </div>
            <!-- Download PDF button -->
            @if($destination->pdf_path)
            <div class="block mt-2">
                <a href="{{ asset('storage/' . $destination->pdf_path) }}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" download>Download PDF</a>
            </div>        
            @endif
        <div class="mt-4">
            <a href="{{ route('destinations.edit', $destination->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
            <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
