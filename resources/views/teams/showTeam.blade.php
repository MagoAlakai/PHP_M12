@extends('layout')
@section('title', 'Show')

@section('content')

<h3 mt-2 class="text-center mb-4 mt-5">Team Details</h3 mt-2>
<hr>

<div class="container mt-4">
    <ul class="row d-block">
        <li class="col-3 mt-2 mx-auto"><strong>Name: </strong>{{$team->name}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>City: </strong>{{$team->email}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Stadium: </strong>{{$team->phone}}</li>
    </ul>

    <div class="container d-flex justify-content-center">
        <a href="{{url('/teams')}}"><button type="button" class="btn btn-outline-primary mt-4">Back to Teams List</button></a>
    </div>
</div>

@endsection
