<div {{ $attributes->merge(['class' => 'grid grid-cols-4 gap-4 mb-4 flex items-center']) }}>
  <div class="col-span-1">
    <!-- Content for the first column (1/4 width) -->
    <x-plane width="w-20"/>
  </div>
  <div class="col-span-3">
    <!-- Content for the second column (3/4 width) -->
    <div class="text-white graphik-font">Help us plan your next trips that best match your preferences</div>
  </div>
</div>
