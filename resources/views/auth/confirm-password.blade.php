@extends('layout')

@section('content')

<x-guest-layout>

    <h3 class="mt-5 mb-4 text-center">Password Confirmation</h3>

        <div class="mb-4 col-6 mx-auto text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-4 mb-4"  method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="mb-3 col-4 mx-auto">
                <x-label class="form-label mb-0" for="password" :value="__('Password')" />
                <x-input id="password" class="form-control block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="mb-3 col-4 mx-auto">
                <x-button class="btn btn-primary">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>

</x-guest-layout>

@endsection
