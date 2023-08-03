
@props(['step','question', 'option_1', 'option_2'])


<div class="graphik-font text-center">
    <div class="text-center text-color-camel-alt">{{$step}}.</div>
    <div class="text-center text-color-camel-alt">{!!$question!!}</div>
    <!-- Your main Blade template or view -->

    <x-radio name="option[{{$step}}]" value="1" data-id="{{$step}}">{!!$option_1!!}</x-radio>
    <x-radio name="option[{{$step}}]" value="2" data-id="{{$step}}">{!!$option_2!!}</x-radio>
</div>