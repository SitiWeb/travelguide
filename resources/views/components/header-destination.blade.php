@if ($destination->image_path)
    <div class='h-64'>
        <div class="bg-cover bg-center w-full flex flex-column justify-center items-center h-64 z-10 fixed max-w-7xl"
            style="background-image: url('{{ asset('storage/' . $destination->image_path) }}');flex-direction:column;">

        </div>
    </div>
@endif
