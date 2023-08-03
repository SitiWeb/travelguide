<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Answers') }}
        </h2>
    </x-slot>
<div class="container mx-auto mt-4">
  
        @foreach ($answers as $cat => $answerss)

            <div class="border-b border-gray-200 pb-5">
            <h3 class="text-base font-semibold leading-6 text-gray-900 mt-12 camel-font">{{$cat}}</h3>
            </div>
            <div class="container mx-auto mt-4 grid gap-4 grid-cols-4">
            @foreach($answerss as $answer)
            <a href="{{ route('answers.edit', $answer->id) }}" class="text-blue-500">
                <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Question</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">1</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">2</th>
                    </tr>
                  </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                
                <tr  class="even:bg-gray-50">
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">1</td>
                    @if ($answer->question_1 == 1)
                        
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                    @else
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
                <tr  class="even:bg-gray-50">
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">2</td>
                    @if ($answer->question_2 == 1)
                        
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                    @else
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
                <tr  class="even:bg-gray-50">
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">3</td>
                    @if ($answer->question_3 == 1)
                    
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                    @else
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
                <tr  class="even:bg-gray-50">
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">4</td>
                    @if ($answer->question_4 == 1)
                   
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                    @else
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif 
                </tr>
                <tr  class="even:bg-gray-50"> 
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">5</td>
                    @if ($answer->question_5 == 1)
                    
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                    @else
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></td>
                        <td scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"><div class="text-center" style="width:20px;height:20px;background-color:green;border-radius:50%;"></div></td>
                    @endif
                </tr>
                </tbody>
            </table>
            </a>

            @endforeach
</div>
        @endforeach
        <div>
            <a href="{{ route('answers.create') }}" class="toggle-button rounded bg-white px-2 py-1 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Create new</a>
        </div>
</div>

</x-app-layout>
