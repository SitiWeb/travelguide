<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create new answers') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <x-success/>
        <form action="{{ route('answers.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="type_id" class="block font-semibold mb-1">Select activity type</label>
                <select name="type_id" id="type_id" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('type_id') border-red-500 @enderror" required>
                    <option value="" selected disabled>Select a type</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            @foreach($questions as $index => $question)

                <div>
                    <div>{{ $index + 1 }}. {{$question->question}}</div>
                <div>
                    <label for="question_{{$index + 1}}_1" class="flex items-center">
                        <input type="radio" id="question_{{$index + 1}}_1" name="question_{{$index + 1}}" value="1" class="form-radio h-4 w-4 text-blue-600">
                        <span class="ml-2">{{$question->option_1}}</span>
                    </label>
                </div>
                <div>
                    <label for="question_{{$index + 1}}_2" class="flex items-center">
                        <input type="radio" id="question_{{$index + 1}}_2" name="question_{{$index + 1}}" value="2" class="form-radio h-4 w-4 text-blue-600">
                        <span class="ml-2">{{$question->option_2}}</span>
                    </label>
                </div>
                </div>
            @endforeach
            
            <x-primary-button>Update</x-primary-button>
        </form>
    </div>
</x-app-layout>
