<x-app-layout>
    <div class="container mx-auto mt-4">
        <h2 class="text-2xl font-bold mb-4">Create a New Question</h2>
        <form action="{{ route('questions.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="question" class="block font-semibold mb-1">Question</label>
                <input type="text" name="question" id="question" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('question') border-red-500 @enderror" required>
                @error('question')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="option_1" class="block font-semibold mb-1">Option 1</label>
                <input type="text" name="option_1" id="option_1" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('option_1') border-red-500 @enderror" required>
                @error('option_1')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="option_2" class="block font-semibold mb-1">Option 2</label>
                <input type="text" name="option_2" id="option_2" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('option_2') border-red-500 @enderror" required>
                @error('option_2')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
        </form>
    </div>
</x-app-layout>
