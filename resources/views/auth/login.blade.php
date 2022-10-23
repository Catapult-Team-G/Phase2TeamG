<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-orange-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                                placeholder="Password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-orange-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-orange-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="py-2">
                <button type="submit" class="px-3 py-1 text-white bg-orange-800 rounded w-full">Log In</button>
            </div>
            @if (Route::has('password.request'))
                <a class="text-sm text-orange-600 hover:text-orange-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif
        </form>

        <p class="mt-2 mb-4 text-center">or</p>

        <form action="{{ route('login.google') }}" method="GET" class="py-1">
            <button type="submit" class="px-3 py-1 text-white border border-primary rounded w-full bg-green-800">
                Login with Google
            </button>
        </form>

        <form action="{{ route('login.twitter') }}" method="GET" class="py-1">
            <button type="submit" class="px-3 py-1 text-white border border-primary rounded w-full bg-blue-800">
                Login with Twitter
            </button>
        </form>
    </x-auth-card>
</x-guest-layout>
