@extends('layout')
@section('title', 'Edit')

@section('content')

<h3 class="container text-center mt-5 mb-4">Update Team: {{$game->name}}</h3>

<form action="" method="POST" class="row col-8 mx-auto mt-4">
    @csrf
    @method('PUT')

    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Date</label>
        <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{$game->name}}">
        @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-6">
            <label class="form-label">Visitor Team</label>
            <input type="text" id="team_1" name="team_1" class="form-control @error('team_1') is-invalid @enderror" value="{{$game->team_1}}">
            @error('team_1')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">Result</label>
            <input type="number" id="result_1" name="result_1" class="form-control @error('result_1') is-invalid @enderror" value="{{$game->result_1}}">
            @error('result_1')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--TODO:averiguar cómo seleccionar equipos.-->
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-6">
            <label class="form-label">Local Team</label>
            <input type="text" id="team_2" name="team_2" class="form-control @error('team_2') is-invalid @enderror" value="{{$game->team_2}}">
            @error('team_2')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">Result</label>
            <input type="number" id="result_2" name="result_2" class="form-control @error('result_2') is-invalid @enderror" value="{{$game->result_2}}">
            @error('result_2')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Stadium</label>
        <input type="text" id="stadium" name="stadium" class="form-control @error('stadium') is-invalid @enderror" value="{{$game->stadium}}">
        @error('stadium')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>
    <button type="submit" class="btn btn-primary col-8 mx-auto">Update Team</button>
  </form>

@endsection
