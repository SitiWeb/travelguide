<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="card-container relative mx-auto max-w-xs h-96">
    <!-- Card 1 - Light Blue -->
    <div id="card-1" class="overflow-hidden background-blue-camel-alt  absolute p-6 rounded-lg  card h-80" style="transform: translateX(-55%) translateY(-45%) rotate(-10deg);width:85%;min-width:250px;">
  
    </div>
    
    <!-- Card 2 - Yellow -->
    <div id="card-2" class="overflow-hidden background-blue-camel-yellow absolute p-6 rounded-lg w-full card h-80" style="transform: translateX(-45%) translateY(-50%) rotate(10deg);width:75%;min-width:250px;">

    </div>
    
    <!-- Card 3 - White -->
    <div id="card-3" class="overflow-hidden w-full bg-white absolute p-6 rounded-lg w-full card h-80" style="transform: translateX(-50%) translateY(-50%);min-width:300px; ">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    </div>
  </div>

  <style>
    .card-container {
      perspective: 1000px; /* Create 3D perspective */
    }
    
    .card {
      position: absolute;
      top: 50%;
      left: 50%;
      transform-style: preserve-3d; /* Preserve 3D transformations */
      transition: transform 0.3s ease; /* Add smooth transition effect on hover */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box shadow to each card */
    }
    
    .card:hover {
      transform: translateY(-50%) rotateX(10deg); /* On hover, shift and tilt the cards */
    }
  </style>
   
</x-guest-layout>
