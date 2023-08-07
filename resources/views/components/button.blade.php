@props(['url','id'])


<a href="{{$url}}" class="camel-font text-white background-blue-camel-alt w-full text-center py-2 px-6 rounded-full block" id="@if(isset($id)) echo $id; @endif">
    {{$slot}}
</a>