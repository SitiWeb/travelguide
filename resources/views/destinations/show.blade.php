<x-app-layout>
    <div class="container mx-auto mt-4">
        <h2 class="text-2xl font-bold mb-4">Destination Details</h2>

        <div>
            <p><span class="font-semibold">City:</span> {{ $destination->city }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Country:</span> {{ $destination->country }}</p>
        </div>

        <div>
            <p><span class="font-semibold">Description:</span> {{ $destination->description }}</p>
        </div>

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
