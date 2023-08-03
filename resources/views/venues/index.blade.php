<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Venues') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        @foreach($locations as $city => $location)
        {{$city}}
        <ul class="space-y-2">
            
            @foreach ($location as $type => $venues)
                {{$type}}
                @foreach ($venues as $venue)

                <li class="flex items-center justify-between bg-white px-4 py-2 border border-gray-300 rounded-md">
                    <a href="{{ route('venues.show', $venue->id) }}" class="text-blue-500">{{ $venue->title }}</a>
                    <span class="text-xs text-gray-600">{{ $venue->created_at->format('Y-m-d') }}</span>
                </li>
                @endforeach
            @endforeach
        </ul>
        @endforeach
    </div>
    <div>
        <a href="{{ route('venues.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create new</a>
    </div>
        
    </x-app-layout>