@extends('layout')
@section('title', 'Create')

@section('content')

<h3 class="container text-center mt-5 mb-4">Create Game</h3>

<form method="POST" class="row col-8 mx-auto">
    @csrf
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Date</label>
        <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror">
        @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <!--TODO:averiguar cómo seleccionar equipos.-->
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-6">
            <label class="form-label">Visitor Team</label>
            <select class="form-select form-control" id="team_1" name="team_1" class= "@error('team_1') is-invalid @enderror">
                <option value=""><small>Please select a team</small></option>
                @foreach ($teams as $team)
                <option>{{$team->name}}</option>
                @endforeach
            </select>
            @error('team_1')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">Result</label>
            <input type="number" min="0" id="result_1" name="result_1" class="form-control @error('result_1') is-invalid @enderror">
            @error('result_1')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-6">
            <label class="form-label">Local Team</label>
            <select class="form-select form-control" id="team_2" name="team_2" class=" @error('team_2') is-invalid @enderror">
                <option value=""><small>Please select a team</small></option>
                @foreach ($teams as $team)
                <option>{{$team->name}}</option>
                @endforeach
            </select>
            @error('team_2')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">Result</label>
            <input type="number" min="0" id="result_2" name="result_2" class="form-control @error('result_2') is-invalid @enderror">
            @error('result_2')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Stadium</label>
        <select class="form-select form-control"  id="stadium" name="stadium" class=" @error('stadium') is-invalid @enderror">
            <option value=""><small>Please select stadium</small></option>
            @foreach ($teams as $team)
            <option>{{$team->stadium}}</option>
            @endforeach
        </select>
        @error('stadium')
                <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary col-8 mx-auto mb-2">Create game</button>
  </form>

@endsection
