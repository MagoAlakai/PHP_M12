@extends('layout')

@section('content')

<x-guest-layout>

    <h3 class="mt-5 mb-4 text-center">Register</h3>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-4 mb-4" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="name" :value="__('Name')" />
                <x-input id="name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="email" :value="__('Email')" />
                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0"  for="password" :value="__('Password')" />
                <x-input id="password" class="form-control block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="form-control block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mb-3 col-4 mx-auto">
                <x-button class="btn btn-primary">
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="mb-3 col-4 mx-auto">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

        </form>
</x-guest-layout>

@endsection

