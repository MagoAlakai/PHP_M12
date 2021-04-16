@extends('layout')

@section('content')


<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h2 class="text-center">Register</h2>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="name" :value="__('Name')" />
                                <x-input id="name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="email" :value="__('Email')" />
                                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="form-group d-flex mx-auto">
                                <!-- Password -->
                                <div>
                                    <x-label class="form-label mb-0"  for="password" :value="__('Password')" />
                                    <x-input id="password" class="form-control block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>
                                <!-- Confirm Password -->
                                <div>
                                    <x-label class="form-label mb-0" for="password_confirmation" :value="__('Confirm Password')" />
                                    <x-input id="password_confirmation" class="form-control block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required/>
                                </div>
                            </div>

                            <!-- Role -->
                            <div class="form-group">
                                <x-label class="form-label mb-0" for="role" :value="__('Role')"/>
                                <select class="form-select form-control block mt-1 w-full"  id="role" name="role" required>
                                    <option>Admin</option>
                                    <option>User</option>
                                </select>
                            </div>

                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="aggree">Agree the terms and policy
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Register') }}</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Already registered?
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Login') }}
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

