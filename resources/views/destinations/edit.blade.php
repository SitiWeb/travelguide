<x-app-layout>
    <div class="container mx-auto mt-4">
        <h2 class="text-2xl font-bold mb-4">Edit Destination</h2>
        <form action="{{ route('destinations.update', $destination->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="city" class="block font-semibold mb-1">City</label>
                <input type="text" name="city" id="city" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('city') border-red-500 @enderror" value="{{ old('city', $destination->city) }}" required>
                @error('city')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="country" class="block font-semibold mb-1">Country</label>
                <input type="text" name="country" id="country" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('country') border-red-500 @enderror" value="{{ old('country', $destination->country) }}" required>
                @error('country')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block font-semibold mb-1">Description</label>
                <input type="text" name="description" id="description" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('description') border-red-500 @enderror" value="{{ old('description', $destination->description) }}" required>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
        </form>
    </div>
</x-app-layout>