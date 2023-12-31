@props(['items' , 'name','destination'])


<div class="block swiper pattern-bg" style=" " id="{{$name}}_slider" data-hash="{{$name}}_slider_{{$destination}}" data-id="{{$name}}_slider" data-destination="{{$destination}}">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        @foreach($items as $index => $item)

        <div class="swiper-slide">
            <x-card :item="$item" index="{{$index + 1}}"></x-card>
        </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>