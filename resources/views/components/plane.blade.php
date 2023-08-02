<!-- resources/views/components/banner-image.blade.php -->

@props(['width' => ''])

<div {{ $attributes->merge(['class' => 'flex justify-center items-center w-full banner-image']) }}>
    <img class="{{ $width }}" src="{{ url('storage/Plane.svg') }}">
</div>
