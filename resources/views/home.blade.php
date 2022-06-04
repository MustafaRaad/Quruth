<x-guest-layout>
    <div class="relative flex flex-col justify-center sm:items-center sm:pt-0">
        <div class="mt-3 text-center w-100 py-3 bg-white rounded-sm shadow-md">
            Loans application and management system
        </div>
        <div class=" mx-auto sm:px-4 lg:px-6">
            <x-auth-card>
                <x-slot name="logo">
                    <a href="/">
                        <img src="/images/uoitc.png" alt="" width="150px">
                    </a>
                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </x-auth-card>

            <div class="overflow-hidden shadow sm:rounded-lg mb-5">
                <div class="grid grid-cols-1 md:grid-cols-1 ">
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-light vw-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                    </path>
                                </svg>
                                <div class="ml-4 p-2 text-lg leading-7">Register</div>
                            </div>
                        </div>
                    </a>
                    @endif

                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
