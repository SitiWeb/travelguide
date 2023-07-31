<!-- resources/views/components/two-button-radio.blade.php -->

@props(['name', 'value'])

<label class="block items-center my-2">
    <input type="radio" name="{{ $name }}" value="{{ $value }}" class="hidden">
    <span class="w-full h-10 px-1 p-6 rounded-full flex items-center justify-center cursor-pointer transition duration-300 border-2 border-blue-camel font-bold text-color-camel-blue hover:bg-blue-200">
        {{ $slot }}
    </span>
</label>


