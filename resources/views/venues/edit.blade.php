<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit venue') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <x-success/>
        <x-delete-button>{{route('venues.destroy', $venue->id)}}</x-delete-button>
        <form action="{{ route('venues.update', $venue->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block font-semibold mb-1">Title</label>
                <input type="text" name="title" id="title" value="{{ $venue->title }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('title') border-red-500 @enderror" required>
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description" class="block font-semibold mb-1">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('description') border-red-500 @enderror" required>{{ old('description', $venue->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="destination_id" class="block font-semibold mb-1">Select Destination</label>
                <select name="destination_id" id="destination_id" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('destination_id') border-red-500 @enderror" required>
                    <option value="" selected disabled>Select a destination</option>
                    @foreach($destinations as $destination)
                  
                        @if ($venue->destination_id == $destination->id)
                        <option selected value="{{ $destination->id }}">{{ $destination->city }}, {{ $destination->country }}</option>
                        @else
                        <option  value="{{ $destination->id }}">{{ $destination->city }}, {{ $destination->country }}</option>
                        @endif
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
                    <option value="restaurant" @if($venue->activity_type === 'restaurant') selected @endif>Place to eat</option>
                    <option value="hotel" @if($venue->activity_type === 'hotel') selected @endif>Place to stay</option>
                    <option value="activity" @if($venue->activity_type === 'activity') selected @endif>Activity</option>
                    <option value="nightlife" @if($venue->activity_type === 'nightlife') selected @endif>Nightlife</option>
                    <option value="get_around" @if($venue->activity_type === 'get_around') selected @endif>Getting around</option>
                </select>
            </div>
            <div>
                <label for="address" class="block font-semibold mb-1">Address</label>
                <input type="text" name="address" id="address" value="{{ $venue->address }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('address') border-red-500 @enderror" >
                @error('address')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="url" class="block font-semibold mb-1">URL</label>
                <input type="text" name="url" id="url" value="{{ $venue->url }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('url') border-red-500 @enderror" >
                @error('url')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="price" class="block font-semibold mb-1">Price</label>
                <input type="text" name="price" id="price" value="{{ $venue->price }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('price') border-red-500 @enderror" >
                @error('price')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <x-primary-button>Update</x-primary-button>

        </form>
        
        
        
    </div>
</x-app-layout>
