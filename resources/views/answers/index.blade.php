<x-app-layout>
<div class="container mx-auto mt-4">
    <ul class="space-y-2">
        @foreach ($answers as $answer)
            <li class="flex items-center justify-between bg-white px-4 py-2 border border-gray-300 rounded-md">
                <a href="{{ route('answers.show', $answer->id) }}" class="text-blue-500">{{$answer->type->name}} 1:{{ $answer->question_1 }} 2:{{ $answer->question_2 }} 3:{{ $answer->question_3 }} 4:{{ $answer->question_4 }} 5:{{ $answer->question_5 }}</a>
                <span class="text-xs text-gray-600">{{ $answer->created_at->format('Y-m-d') }}</span>
            </li>
        @endforeach
    </ul>
</div>
<div>
    <a href="{{ route('answers.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create new</a>
</div>
</x-app-layout>