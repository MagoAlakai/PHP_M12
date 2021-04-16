@extends('layout')
@section('title', 'Show')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content pb-5">
                    <h3 mt-2 class="text-center mb-4">Team Details</h3>

                    <div class="container mt-4">
                        <ul class="row d-block">
                            <li class="col-7 mt-2 mx-auto"><strong>Name: </strong>{{$team->name}}</li>
                            <li class="col-7 mt-2 mx-auto"><strong>City: </strong>{{$team->city}}</li>
                            <li class="col-7  mt-2 mx-auto"><strong>Stadium: </strong>{{$team->stadium}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="container d-flex justify-content-center">
            <a href="{{url('/teams')}}"><button type="button" class="btn btn-outline-success mt-4">Back to Teams List</button></a>
        </div>
    </div>
</div>
@endsection
