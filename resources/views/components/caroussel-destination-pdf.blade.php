@props(['items' , 'name','destination'])
<div class="block" style=" " id="{{$name}}_slider" data-hash="{{$name}}_slider_{{$destination}}" data-id="{{$name}}_slider" data-destination="{{$destination}}">
    <!-- Additional required wrapper -->
        @foreach($items as $index => $item)
            <x-card-pdf :item="$item" index="{{$index + 1}}" />
        @endforeach
</div>