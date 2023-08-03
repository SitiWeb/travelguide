@props(['item', 'index'])
<div class="p-8">
    <div class="p-4 rounded-2xl" style="background-color:#004578; color:white;">
        <div>{{$index}}. {{$item->title}}</div>
        <div>{{$item->url}}</div>
        <div>{{$item->description}}</div>
        <div>{{$item->price}}</div>
    </div>
</div>