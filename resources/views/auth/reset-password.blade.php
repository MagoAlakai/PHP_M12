@extends('layout')

@section('content')

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h3 class="container text-center mt-5 mb-4">Reset Password</h3>
                    </div>
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="login-form">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="email" :value="__('Email')" />
                                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="password" :value="__('Password')" />
                                <x-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="password_confirmation" :value="__('Confirm Password')" />
                                <x-input id="password_confirmation" class="form-control block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required />
                            </div>

                            <div class="form-group">
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Reset Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
