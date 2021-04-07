@extends('layout')

@section('content')

<x-guest-layout>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h3 class="mt-5 mb-4 text-center">Reset Password</h3>

        <form class="mt-4 mb-4" method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="email" :value="__('Email')" />
                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="password" :value="__('Password')" />
                <x-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required />
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
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>

</x-guest-layout>

@endsection
