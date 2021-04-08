@extends('layout')
@section('title', 'Show')

@section('content')

<h3 mt-2 class="text-center mb-4 mt-5">Employee Details</h3 mt-2>
<hr>

<div class="container mt-4">
    <ul class="row d-block">
        <li class="col-3 mt-2 mx-auto"><strong>Date: </strong>{{$game->date}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Visitor Team: </strong>{{$game->team_1}} - {{$game->result_1}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Local Team: </strong>{{$game->team_2}} - {{$game->result_2}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Stadium: </strong>{{$game->stadium}}</li>
    </ul>

    <div class="container d-flex justify-content-center">
        <a href="{{url('/games')}}"><button type="button" class="btn btn-outline-primary mt-4">Back to Games List</button></a>
    </div>
</div>

@endsection
