<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Destination') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        
        <form action="{{ route('destinations.update', $destination->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
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
                <label for="type_id" class="block font-semibold mb-1">Select activity type</label>
                <select name="type_id" id="type_id" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('destination_id') border-red-500 @enderror" required>
                    <option value="" selected disabled>Select a type</option>
                    @foreach($types as $type)
                        @if ($destination->type_id == $type->id)
                        <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                        @else
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('type_id')
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
                <textarea name="description" id="description" rows="4" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('description') border-red-500 @enderror" required>{{ old('description', $destination->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block font-semibold mb-1">Upload Image</label>
                <input type="file" name="image" id="image" accept="image/*" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('image') border-red-500 @enderror">
                @error('image')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <p class="mt-2 text-sm text-gray-500">
                @if($destination->image_path)

                <a href="{{ asset('storage/' . $destination->image_path) }}" class="text-blue-600" >{{substr($destination->image_path, 5)}}</a>    <br>
                @endif
                Leave this field empty if you don't want to change the image.</p>
            </div>

            <!-- Add PDF upload field -->
            <div>
                <label for="pdf" class="block font-semibold mb-1">Upload PDF</label>
                <input type="file" name="pdf" id="pdf" accept=".pdf" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('pdf') border-red-500 @enderror">
                @error('pdf')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                
                <p class="mt-2 text-sm text-gray-500">
                @if($destination->pdf_path)

                <a href="{{ asset('storage/' . $destination->pdf_path) }}" class="text-blue-600" download>{{substr($destination->pdf_path, 5)}}</a>    <br>
                @endif
                Leave this field empty if you don't want to change the PDF.</p>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
        </form>
    </div>
</x-app-layout>