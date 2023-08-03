<div {{ $attributes->merge(['class' => 'grid grid-cols-4 gap-4 mb-4']) }}>
  <div class="col-span-1">
    <!-- Content for the first column (1/4 width) -->
    <x-plane/>
  </div>
  <div class="col-span-3">
    <!-- Content for the second column (3/4 width) -->
    <x-text>Help us plan your next trips that best match your preferences</x-text>
  </div>
</div>