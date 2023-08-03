@props(['item', 'index'])
<div class="p-8">
    <div class="p-4 rounded-2xl" style="background-color:#004578; color:white;">
        <div class="graphik-font text-2xl mb-2">{{$index}}. {{$item->title}}</div>
        @isset($item->url)
        <div class="mb-2"><a class="graphik-font text-color-camel-alt " href="{{$item->url}}">{{$item->url}}</a></div>
        @endisset
        <div class="graphik-font text-sm">{{$item->description}}</div>
        <div class="text-right graphik-font ">{{$item->price}}</div>
    </div>
</div>