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
                <a href="{{ route('destinations.edit', $destination->id) }}">
                <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                  <img src="{{ asset('storage/' . $destination->image_path) }}" alt="" class="pointer-events-none object-cover group-hover:opacity-75">
                  <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">{{ $destination->city }}</span>
                  </button>
                </div>
                <div class="flex items-center justify-between">
                  <div>
                <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">{{ $destination->city }}</p>
                <p class="pointer-events-none block text-sm font-medium text-gray-500">{{ $destination->country }}</p>
                  </div> 
                <div>
                    <p class="pointer-events-none block text-sm font-medium text-gray-500">{{$destination->type->name}}</p>
                  
                  </div>
                </div>

              </a>
              </li>
            
                @endforeach
            
          
            <!-- More files... -->
          </ul>
          <div class="my-4">
            <a href="{{ route('destinations.create') }}" class="toggle-button rounded bg-white px-2 py-1 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Create new</a>
        </div>
    </div>
   
    </x-app-layout>

  