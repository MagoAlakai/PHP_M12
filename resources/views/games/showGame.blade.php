@extends('layout')
@section('title', 'Show')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content pb-5">
                    <h3 mt-2 class="text-center mb-4">Game Details</h3 mt-2>

                    <div class="container mt-4">
                        <ul class="row d-block">
                            <li class="col-9 mt-2 mx-auto"><strong>Date: </strong>{{$game->date}}</li>
                            <li class="col-9 mt-2 mx-auto"><strong>Visitor Team: </strong>{{$game->team_1}} - {{$game->result_1}}</li>
                            <li class="col-9 mt-2 mx-auto"><strong>Local Team: </strong>{{$game->team_2}} - {{$game->result_2}}</li>
                            <li class="col-9 mt-2 mx-auto"><strong>Stadium: </strong>{{$game->stadium}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="container d-flex justify-content-center">
            <a href="{{url('/games')}}"><button type="button" class="btn btn-outline-primary mt-4">Back to Games List</button></a>
        </div>
    </div>
</div>
@endsection
