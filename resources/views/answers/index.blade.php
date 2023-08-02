<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Answers') }}
        </h2>
    </x-slot>
<div class="container mx-auto mt-4">
  
        @foreach ($answers as $cat => $answerss)

            <div class="border-b border-gray-200 pb-5">
            <h3 class="text-base font-semibold leading-6 text-gray-900 mt-12">{{$cat}}</h3>
            </div>
            <div class="container mx-auto mt-4 grid gap-4 grid-cols-4">
            @foreach($answerss as $answer)
            <a href="{{ route('answers.show', $answer->id) }}" class="text-blue-500">
            <table class="table-auto">
                <tr>
                    <th>Option 1</th>
                    <th>Option 2</th>
                </tr>
                <tr>
                    @if ($answer->question_1 == 1)
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td></td>
                    @else
                        <td></td>
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
                <tr>
                    @if ($answer->question_2 == 1)
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td></td>
                    @else
                        <td></td>
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
                <tr>
                    @if ($answer->question_3 == 1)
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td></td>
                    @else
                        <td></td>
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
                <tr>
                    @if ($answer->question_4 == 1)
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td></td>
                    @else
                        <td></td>
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif 
                </tr>
                <tr>
                    @if ($answer->question_5 == 1)
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td></td>
                    @else
                        <td></td>
                        <td><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
            </table>
            </a>

            @endforeach
</div>
        @endforeach

</div>
<div>
    <a href="{{ route('answers.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create new</a>
</div>
</x-app-layout>