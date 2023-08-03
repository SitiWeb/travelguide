<!-- resources/views/components/custom-div.blade.php -->

<div {{ $attributes->merge(['class' => 'text-center text-white graphik-font ']) }}>
    {{ $slot }}
</div>
