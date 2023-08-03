<!-- Add this inside your Blade template -->
@if(session('success'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-2" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <title>Close</title>
        <path d="M14.348 14.849l-1.503 1.503-3.845-3.845-3.845 3.845-1.503-1.503 3.845-3.845-3.845-3.845 1.503-1.503 3.845 3.845 3.845-3.845 1.503 1.503-3.845 3.845 3.845 3.845z" />
      </svg>
    </span>
  </div>
@endif

<!-- Your other content goes here -->
