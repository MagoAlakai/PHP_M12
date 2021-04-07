@extends('layout')

@section('content')

<x-guest-layout>

    <h3 class="mt-5 mb-4 text-center">Login</h3>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-4 mb-4" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="email" :value="__('Email')" />
                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="password" :value="__('Password')" />
                <x-input id="password" class="form-control block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mb-3 col-4 mx-auto"">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mb-3 col-4 mx-auto">
                <x-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="mb-3 col-4 mx-auto">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

        </form>

</x-guest-layout>

@endsection
