<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Responses') }}
        </h2>
    </x-slot>

    @if(request()->query('filter') == 'rating_not_null')
    <div class="mb-4">
        <a href="{{ route('responses.index') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Clear Filter
        </a>
    </div>
    @else
    <div class="mb-4">
        <a href="{{ route('responses.index', ['filter' => 'rating_not_null']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Filter responses with Rating
        </a>
    </div>
    @endif
    <table class="min-w-full bg-white border border-gray-300 rounded-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Rating</th>
                    <th class="py-2 px-4 border">User Responses</th>
                    <th class="py-2 px-4 border">IP</th>
                    <th class="py-2 px-4 border">Submitted Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userResponses as $userResponse)
                    <tr>
                        <td class="py-2 px-4 border">{{ $userResponse->id }}</td>
                        
                        <td class="py-2 px-4 border">{{ $userResponse->rating }}</td>
                        
                       
                        <td class="py-2 px-4 border">
                            @foreach(json_decode($userResponse->userresponse, true) as $key => $value)
                                <div>{{ $key }}: {{ $value }}</div>
                            @endforeach
                        </td>
                        <td class="py-2 px-4 border">{{ $userResponse->ip }}</td>
                        <td class="py-2 px-4 border">{{ $userResponse->submitted_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $userResponses->links() }}
        </div>

</x-app-layout>