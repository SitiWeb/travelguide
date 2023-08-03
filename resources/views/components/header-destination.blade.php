@if($destination->image_path)
    <div>
        <img src="{{ asset('storage/' . $destination->image_path) }}" alt="Destination Image" class="w-full">
    </div>
@endif