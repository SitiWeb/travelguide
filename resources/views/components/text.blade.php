<!-- resources/views/components/custom-div.blade.php -->

<div {{ $attributes->merge(['class' => 'text-center text-white font-bold']) }}>
    {{ $slot }}
</div>
