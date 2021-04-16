@extends('layout')

@section('content')


<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email -->
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="email" :value="__('Email')" />
                                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email address" required autofocus/>
                            </div>
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="password" :value="__('Password')" />
                                <x-input id="password" class="form-control block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"
                                    placeholder="Password"/>

                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                                <label>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Log in') }}</button>

                        </form>
                        <div class="register-link">
                            <p>You don't have account?
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                    {{ __("Register") }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
