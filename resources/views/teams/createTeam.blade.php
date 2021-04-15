@extends('layout')
@section('title', 'Create')

@section('content')

<h3 class="container text-center mt-5 mb-4">Create Team</h3>

<form method="POST" class="row col-8 mx-auto">
    @csrf
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-4">
            <label class="form-label">City</label>
            <input type="text" id="city" name="city" class="form-control @error('city') is-invalid @enderror">
            @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Stadium</label>
            <input type="text" id="stadium" name="stadium" class="form-control @error('stadium') is-invalid @enderror">
            @error('stadium')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    </div>
    <button type="submit" class="btn btn-outline-primary col-8 mx-auto">Create team</button>
  </form>

@endsection
