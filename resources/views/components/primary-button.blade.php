<button {{ $attributes->merge(['type' => 'submit', 'class' => 'toggle-button rounded bg-white px-2 py-1 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50']) }}>
    {{ $slot }}
</button>
