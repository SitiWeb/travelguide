<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create venue') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">

        <form action="{{ route('venues.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="question" class="block font-semibold mb-1">title</label>
                <input type="text" name="title" id="title" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('title') border-red-500 @enderror" required>
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="destination_id" class="block font-semibold mb-1">Select Destination</label>
                <select name="destination_id" id="destination_id" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('destination_id') border-red-500 @enderror" required>
                    <option value="" selected disabled>Select a destination</option>
                    @foreach($destinations as $destination)
                        <option value="{{ $destination->id }}">{{ $destination->city }}, {{ $destination->country }}</option>
                    @endforeach
                </select>
                @error('destination_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="w-full">
                <label for="activity_type" class="block text-gray-700 text-sm font-bold mb-2">Select Activity Type:</label>
                <select name="activity_type" id="activity_type" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Activity">Activity</option>
                </select>
            </div>
            <div>
                <label for="address" class="block font-semibold mb-1">Address</label>
                <input type="text" name="address" id="address" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('address') border-red-500 @enderror" required>
                @error('address')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="url" class="block font-semibold mb-1">URL</label>
                <input type="text" name="url" id="url" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('url') border-red-500 @enderror" required>
                @error('url')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="price" class="block font-semibold mb-1">Price</label>
                <input type="text" name="price" id="price" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('price') border-red-500 @enderror" required>
                @error('price')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
        </form>
    </div>
</x-app-layout>
