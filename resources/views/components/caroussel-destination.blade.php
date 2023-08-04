@props(['items' , 'name'])


<div class="block swiper pattern-bg" style="background-color:#ffe713bd" id="{{$name}}_slider" data-id="{{$name}}_slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        @foreach($items as $index => $item)
        <div class="swiper-slide">
            <x-card :item="$item" index="{{$index + 1}}"></x-card>
        </div>
        @endforeach
    </div>
</div>