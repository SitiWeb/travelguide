<x-guest-layout  background="{{url('storage/Footer2-4x.png')}}">

<x-header-question />
<x-steps active="1" />
<x-cards step="{{$question->id}}" question="{{$question->question}}" option_1="{{$question->option_1}}" option_2="{{$question->option_2}}"/>
</x-guest-layout>
