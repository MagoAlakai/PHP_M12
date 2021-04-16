@extends('layout')

@section('content')
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h3 class="container text-center mt-5 mb-4">Recover Password</h3>
                    </div>
                    <div class="login-form">
                        <form method="POST" class="row col-8 mx-auto">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Confirm new password</label>
                                <input type="password" class="form-control @error('newpassword') is-invalid @enderror" id="newpassword" name="newpassword">
                                @error('newpassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-primary col-8 mt-3 mx-auto">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
