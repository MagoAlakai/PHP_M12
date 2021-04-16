@extends('layout')
@section('title', 'Create')

@section('content')

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h3 >Create Game</h3>
                    </div>
                    <div class="login-form">

                        <form method="POST">
                            @csrf

                            {{-- Date --}}
                            <div class="form-group mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" id="date" name="date" class="form-control block w-full @error('date') is-invalid @enderror">
                                @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Team & Result 1 --}}
                            <div class="d-flex form-group row mb-2">
                                <div class="form-group col-10">
                                    <label class="form-label">Visitor Team</label>
                                    <select id="team_1" name="team_1" class="form-select form-control @error('team_1') is-invalid @enderror">
                                        <option value=""><small>Please select a team</small></option>
                                        @foreach ($teams as $team)
                                        <option>{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('team_1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-2">
                                    <label class="form-label">Result</label>
                                    <input type="number" min="0" id="result_1" name="result_1" class="form-control @error('result_1') is-invalid @enderror">
                                    @error('result_1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Team & Result 2 --}}
                            <div class="d-flex form-group row mb-2">
                                <div class="form-group col-10">
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
                                <div class="form-group col-2">
                                    <label class="form-label">Result</label>
                                    <input type="number" min="0" id="result_2" name="result_2" class="form-control @error('result_2') is-invalid @enderror">
                                    @error('result_2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Stadium --}}
                            <div class="form-group mb-4">
                                <label class="form-label">Stadium</label>
                                <select class="form-select form-control block mr-5 w-full"  id="stadium" name="stadium" class=" @error('stadium') is-invalid @enderror">
                                    <option value=""><small>Please select stadium</small></option>
                                    @foreach ($teams as $team)
                                    <option>{{$team->stadium}}</option>
                                    @endforeach
                                </select>
                                @error('stadium')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block mb-2">Create game</button>
                        </form>
                    </div>
                </div>

                {{-- Back to List --}}
                <div class="container d-flex justify-content-center">
                    <a href="{{url('/games')}}"><button type="button" class="btn btn-outline-success mt-4">Back to Games List</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
