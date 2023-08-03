<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Travelprofile') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-4">
        <x-success/>
        <x-delete-button>{{route('types.destroy', $type->id)}}</x-delete-button>
        <form action="{{ route('types.update', $type->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" id="name" value="{{ $type->name }}" class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
          
            <x-primary-button>Update</x-primary-button>
        </form>
    </div>
</x-app-layout>
