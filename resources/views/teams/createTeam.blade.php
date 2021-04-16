@extends('layout')
@section('title', 'Create')

@section('content')

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h3 >Create Team</h3>
                    </div>
                    <div class="login-form">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control block mt-1 w-full @error('name') is-invalid @enderror">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex form-group">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" id="city" name="city" class="form-control block mt-1 mr-5 w-full @error('city') is-invalid @enderror">
                                    @error('city')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Stadium</label>
                                    <input type="text" id="stadium" name="stadium" class="form-control block mt-1 mr-5 w-full @error('stadium') is-invalid @enderror">
                                    @error('stadium')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block">Create team</button>
                        </form>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <a href="{{url('/teams')}}"><button type="button" class="btn btn-outline-success mt-4">Back to Teams List</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
