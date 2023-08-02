<x-guest-layout>
<form action="{{ route('clear_responses') }}" method="post" class="flex justify-center">
    @csrf
    <button type="submit"><x-plane class="mb-4 text-center" width="w-14"/></button>
</form>

<x-title class="mb-8 text-2xl">Start planning<br>your next trip</x-title>
<x-title class="mb-8 text-2xl">{{$destination->city}}</x-title>
<x-text class="mb-8">Please find your suggested<br>travel destination below</x-text>
 <!-- Download PDF button -->
 @if($destination->pdf_path)

    <a href="{{ asset('storage/' . $destination->pdf_path) }}" class="text-white background-blue-camel-alt w-full text-center p-2 rounded-full block camel-font" download>
    <div class="flex justify-center items-center space-x-1.5">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="white" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>    
    <span class="ml-2">Download PDF</span>
</div>
</a>

@endif


</x-guest-layout>