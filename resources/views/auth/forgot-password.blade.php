@extends('layout')

@section('content')

<x-guest-layout>

    <h3 class="mt-5 mb-4 text-center">Forgot your password?</h3>

        <div class="mb-4 col-6 mx-auto text-sm text-gray-600">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-4 mb-4" method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4 col-4 mx-auto">
                <x-label class="form-label mb-0" for="email" :value="__('Email')" />
                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mb-3 col-4 mx-auto">
                <x-button class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
</x-guest-layout>

@endsection
