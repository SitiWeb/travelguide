<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Question') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <x-success/>
        <x-delete-button>{{route('questions.destroy', $question->id)}}</x-delete-button>
        <form action="{{ route('questions.update', $question->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
         
            @csrf
            @method('PUT')
            <div>
                <label for="question" class="block font-semibold mb-1">Question</label>
                <input type="text" name="question" id="question" value="{{ $question->question }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('question') border-red-500 @enderror" required>
                @error('question')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="option_1" class="block font-semibold mb-1">Option 1</label>
                <input type="text" name="option_1" id="option_1" value="{{ $question->option_1 }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('option_1') border-red-500 @enderror" required>
                @error('option_1')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="option_2" class="block font-semibold mb-1">Option 2</label>
                <input type="text" name="option_2" id="option_2" value="{{ $question->option_2 }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('option_2') border-red-500 @enderror" required>
                @error('option_2')
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
                @if($question->image_path)

                <a href="{{ url('storage/' . $question->image_path) }}" class="text-blue-600" >{{($question->image_path)}}</a>    <br>
                @endif
                @if ($question->image_path)
    <img src="{{ asset('storage/' . $question->image_path) }}" alt="Question Image">
@endif
                Leave this field empty if you don't want to change the image.</p>
            </div>
            <x-primary-button>Update</x-primary-button>
        </form>
    </div>
</x-app-layout>
