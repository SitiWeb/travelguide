@if ($destination->image_path)
    <div class='h-64'>
        <div class="bg-cover bg-center w-full flex flex-column items-center h-64 z-10 fixed max-w-7xl"
            style="background-image: url('{{ asset('storage/' . $destination->image_path) }}');flex-direction:column;">
            <div class="text-white mt-2 camel-font p-2 rounded" style="background-color:#004578 ;">Slide to Discover</div>
        </div>
    </div>
@endif
