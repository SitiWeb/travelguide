<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Venues') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        @foreach($locations as $city => $location)
            
        
            <div class="my-8">
                <h2 class="text-xl font-medium text-gray-900 camel-font">{{$city}}</h2>
                <ul role="list" class="my-3 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3">
       
           
            @foreach ($location as $type => $venues)
                <li class="col-span-1 flex rounded-md shadow-sm">
                    <div class="flex flex-1  justify-between truncate rounded-r-md border-b border-r border-t border-gray-200 bg-white">
                        <div class="flex-1 truncate px-4 py-2 text-sm">
                          <a href="#" class="font-medium  hover:text-gray-600 text-gray-500 camel-font">{{$type}}</a>
                          
                        
                
                @foreach ($venues as $venue)
                   @php
                    $current = $venue->destination;
                   @endphp
                <p class="text-gray-500"><a href="{{ route('venues.show', $venue->id) }}" class="text-blue-500">{{ $venue->title }}</a></p>
                    
                    
                @endforeach
                </div>
                </li>
            @endforeach
          

      
            </ul>
          <!-- Toggle button 1 -->
          <button class="toggle-button rounded bg-white px-2 py-1 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" onclick="toggleDiv('{{$city}}')">Add another venue</button>
          <!-- The div to be shown or hidden -->
          <div id="{{$city}}" class="toggleable-div" style="display:none" >@include('venues.form')</div>
    </div>
  
        @endforeach
    </div>
    <div>
        <a href="{{ route('venues.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create new</a>
    </div>
        <script>function toggleDiv(divId) {
            const div = document.getElementById(divId);
            if (div) {
              div.style.display = div.style.display === 'none' ? 'block' : 'none';
            }
          }</script>
    </x-app-layout>