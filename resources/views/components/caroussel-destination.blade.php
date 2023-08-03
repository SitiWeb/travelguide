@props(['items'])
<div class="block" style="background-color:yellow">

    @foreach($items as $index => $item)
   
        <x-card :item="$item" index="{{$index + 1}}"></x-card>
    @endforeach
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>