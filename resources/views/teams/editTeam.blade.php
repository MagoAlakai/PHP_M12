@extends('layout')
@section('title', 'Edit')

@section('content')

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h3 >Update Team: {{$team->name}}</h3>
                    </div>
                    <div class="login-form">
                        <form method="POST">
                            @csrf
                            @method('PUT')

                            {{-- Name --}}
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control block mt-1 w-full @error('name') is-invalid @enderror" value="{{$team->name}}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- City & Stadium --}}
                            <div class="d-flex form-group">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" id="city" name="city" class="form-control block mt-1 mr-5 w-full @error('city') is-invalid @enderror" value="{{$team->city}}">
                                    @error('city')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Stadium</label>
                                    <input type="text" id="stadium" name="stadium" class="form-control block mt-1 mr-5 w-full @error('stadium') is-invalid @enderror" value="{{$team->stadium}}">
                                    @error('stadium')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block">Update team</button>
                        </form>
                    </div>

                    {{-- Back to List --}}
                    <div class="container d-flex justify-content-center">
                        <a href="{{url('/teams')}}"><button type="button" class="btn btn-outline-success mt-4">Back to Teams List</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
