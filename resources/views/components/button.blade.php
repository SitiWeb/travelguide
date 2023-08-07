@props(['url','id'])

@if(!isset($id))
$id = '';
@endif
<a href="{{$url}}" class="camel-font text-white background-blue-camel-alt w-full text-center py-2 px-6 rounded-full block" id="{{$id}}">
    {{$slot}}
</a>