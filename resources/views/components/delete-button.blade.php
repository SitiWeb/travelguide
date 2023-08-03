<form method="POST" class="flex justify-end" action="{{ $slot }}" onsubmit="return confirm('Are you sure you want to delete this?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="toggle-button rounded bg-red-500 px-2 py-1 text-xs font-semibold text-white shadow-sm ring-1 ring-inset ring-red-600 hover:bg-red-600">
        Delete
    </button>
</form>