@props(['active'])
<div class="flex items-center graphik-font">
  <div class="flex items-center ">
    <div class="step-circle @if ($active == 1){{'active'}}@endif">
      <span class="step-number">@if ($active > 1){{'✓'}}@else {{'1'}}@endif</span>
    </div>
    <span class="step-separator"></span>
  </div>
  <div class="flex items-center ">
    <div class="step-circle @if ($active == 2){{'active'}}@endif">
      <span class="step-number">@if ($active > 2){{'✓'}}@else {{'2'}}@endif</span>
    </div>
    <span class="step-separator"></span>
  </div>
  <div class="flex items-center ">
    <div class="step-circle @if ($active == 3){{'active'}}@endif">
      <span class="step-number ">@if ($active > 3){{'✓'}}@else {{'3'}}@endif</span>
    </div>
    <span class="step-separator"></span>
  </div>
  <div class="flex items-center ">
    <div class="step-circle @if ($active == 4){{'active'}}@endif">
      <span class="step-number">@if ($active > 4){{'✓'}}@else {{'4'}}@endif</span>
    </div>
    <span class="step-separator"></span>
  </div>
  <div class="flex items-center ">
    <div class="step-circle @if ($active == 5){{'active'}}@endif">
      <span class="step-number">@if ($active > 5){{'✓'}}@else {{'5'}}@endif</span>
    </div>
  </div>
</div>
