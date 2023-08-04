@props(['item', 'index'])
<div class="p-8 ">
    <div class="p-4 rounded-2xl shadow-2xl" style="background-color:#004578; color:white;">
        <div class="graphik-font text-xl mb-2">{{$index}}. {{$item->title}}</div>
        @isset($item->url)
        <div class="mb-2"><a class="graphik-font text-color-camel-alt text-sm" href="{{$item->url}}">{{$item->url}}</a></div>
        @endisset
        <div class="graphik-font text-xs">{{$item->description}}</div>
        @isset($item->price)
        <div class="text-right graphik-font text-xs mt-2">{{$item->price}}</div>
        @endisset
    </div>
</div>