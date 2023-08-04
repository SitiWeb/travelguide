@props(['items' , 'name'])


<div class="block swiper" style="background-color:#ffed00d6" id="{{$name}}_slider" data-id="{{$name}}_slider">
 <!-- Additional required wrapper -->
 <div class="swiper-wrapper">
    @foreach($items as $index => $item)

    <div class="swiper-slide">
        <x-card :item="$item" index="{{$index + 1}}"></x-card>
        </div>
    @endforeach
    </div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>