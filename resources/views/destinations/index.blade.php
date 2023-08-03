<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Destinations') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($destinations as $destination)
            <li class="relative">
                <a href="{{ route('destinations.show', $destination->id) }}">
                <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                  <img src="{{ asset('storage/' . $destination->image_path) }}" alt="" class="pointer-events-none object-cover group-hover:opacity-75">
                  <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">{{ $destination->city }}</span>
                  </button>
                </div>
                <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">{{ $destination->country }}</p>
                <p class="pointer-events-none block text-sm font-medium text-gray-500">{{ $destination->created_at->format('Y-m-d') }}</p>
            </a>
              </li>
            
                @endforeach
            
          
            <!-- More files... -->
          </ul>
    </div>
    <div>
        <a href="{{ route('destinations.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create new</a>
    </div>
    </x-app-layout>

  