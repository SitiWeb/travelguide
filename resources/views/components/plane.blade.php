<!-- resources/views/components/banner-image.blade.php -->
@props(['width'])
@isset($width)

@else
$width = '';
@endif
<div {{ $attributes->merge(['class' => 'flex justify-center items-center w-full banner-image']) }}>
    <img class="{{$width}}" src="{{ url('storage/Plane.svg') }}">
</div>
