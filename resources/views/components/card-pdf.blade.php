<div class='card'>
    <p class='text-white h2'>{{$index}}. {{$item->title}}</p>
    @isset($item->url)
    <a href='{{$item->url}}' class='link'><div style="display: flex; align-items: center; gap: 0.25rem;">
        <svg fill="#00abe3" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" style="height: 1em;">
            <path d="M579.8 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
        </svg>
        <div>Visit website</div>
    </div></a>
    @endisset
    @isset($item->address)
    <div class="link">{{$item->address}}</div>
    @endisset
    <p class='text-white'>
        {{$item->description}}
    </p>
    @isset($item->price)
    <p class='text-white text-right'>$$$</p>
    @endisset
    
</div>